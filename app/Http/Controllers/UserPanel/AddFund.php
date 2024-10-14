<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BuyFund;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Hexters\CoinPayment\CoinPayment;
use App\Models\CoinpaymentTransaction;
use App\Models\GeneralSetting;
use Log;
use Redirect;
class AddFund extends Controller
{

public function index(Request $request)
{

$user=Auth::user();
$this->data['page'] = 'user.fund.addFund';
return $this->dashboard_layout();

}


public function fundHistory(Request $request)
{

   
    $user=Auth::user();
    $limit = $request->limit ? $request->limit : paginationLimit();
    $status = $request->status ? $request->status : null;
    $search = $request->search ? $request->search : null;
    $notes = BuyFund::where('user_id',$user->id);
    if($search <> null && $request->reset!="Reset"){
    $notes = $notes->where(function($q) use($search){
        $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
        ->orWhere('txn_no', 'LIKE', '%' . $search . '%')
        ->orWhere('status', 'LIKE', '%' . $search . '%')
        ->orWhere('type', 'LIKE', '%' . $search . '%')
        ->orWhere('amount', 'LIKE', '%' . $search . '%');
    });

    }

    $notes = $notes->paginate($limit)
        ->appends([
            'limit' => $limit
        ]);

    $this->data['search'] =$search;
    $this->data['level_income'] =$notes;
    $this->data['page'] = 'user.fund.fundHistory';
    return $this->dashboard_layout();

}


public function fundconfirm(Request $request)
{
try{
 $validation =  Validator::make($request->all(), [
    'amount' => 'required|numeric',
    'paymentMode' => 'required',
 ]);

if($validation->fails()) {
    Log::info($validation->getMessageBag()->first());

    return redirect()->route('user.fund')->withErrors($validation->getMessageBag()->first())->withInput();
}

$setting = GeneralSetting::where('id',1)->first();


if($request->paymentMode == "USDT.BEP20"){
      $walletAddress = $setting->usdtBep20;
}else{
    $walletAddress = $setting->usdtTrc20;

}


$user=Auth::user();

$this->data['paymentMode'] =$request->paymentMode;
$this->data['walletAddress'] = $walletAddress;

$this->data['amount'] =$request->amount;
$this->data['page'] = 'user.fund.fundconfirm';
return $this->dashboard_layout(); 


}
catch(\Exception $e){
Log::info('error here');
Log::info($e->getMessage());
print_r($e->getMessage());
die("hi");
return  redirect()->route('user.fund')->withErrors('error', $e->getMessage())->withInput();
  }



}



public function SubmitBuyFund(Request $request)
{

  try{
        $validation =  Validator::make($request->all(), [
            // 'amount' => 'required|numeric|min:30',
            // 'paymentMode' => 'required',
            'transaction_hash' => 'required',
            // 'icon_image'=>'max:4096|mimes:jpeg,png,jpg,svg',
        ]);

        if($validation->fails()) {
            Log::info($validation->getMessageBag()->first());

            return redirect()->route('user.AddFund')->withErrors($validation->getMessageBag()->first())->withInput();
        }



        $user=Auth::user();

               $data = [
                    'txn_no' =>$request->transaction_hash,
                    'user_id' => $user->id, 
                    'user_id_fk' => $user->username,
                    'amount' => $request->amount,
                    'status'=>'Pending', 
                    'type' => $request->paymentMode,
                    'bdate' => Date("Y-m-d"),

                ];
                // dd($data);
               $payment =  BuyFund::create($data);


      $notify[] = ['success', 'Fund Request Submited successfully'];
      return redirect()->route('user.AddFund')->withNotify($notify);
      }
       catch(\Exception $e){
        Log::info('error here');
        Log::info($e->getMessage());
        print_r($e->getMessage());
        die("hi");
        return  redirect()->route('user.AddFund')->withErrors('error', $e->getMessage())->withInput();
    }

}



}
