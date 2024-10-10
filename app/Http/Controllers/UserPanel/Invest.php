<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Investment;
use App\Models\Income;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Log;
use Redirect;
use Hash;

class Invest extends Controller
{

  private $downline = "";

    public function index()
    {
        $user=Auth::user();
        $invest_check=Investment::where('user_id',$user->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();

        $this->data['last_package'] = ($invest_check)?$invest_check->amount:0;
        $this->data['page'] = 'user.invest.Deposit';
        return $this->dashboard_layout();
    }


    public function confirm(Request $request)
    {

    
      try{
        $validation =  Validator::make($request->all(), [
            'amount' => 'required|numeric|min:20',
            'paymentMode' => 'required',
        ]);
    
        if($validation->fails()) {
            Log::info($validation->getMessageBag()->first());
    
            return redirect()->route('user.invest')->withErrors($validation->getMessageBag()->first())->withInput();
        }



       $user=Auth::user();
       $plan="1";

     $user_detail=User::where('username',$user->username)->orderBy('id','desc')->limit(1)->first();
    //  $invest_check=Investment::where('user_id',$user_detail->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();
    //   if($invest_check)
    //   {
    //      return Redirect::back()->withErrors(array('You Are Already Active Or Pending Request '));
    //   }
      
       $invest_check=Investment::where('user_id',$user_detail->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();
       $invoice = substr(str_shuffle("0123456789"), 0, 7);

       $last_package = ($invest_check)?$invest_check->amount:0;
       
    //   if($request->amount<$last_package)
    //   {
    //       return redirect()->route('user.invest')->withErrors(array('choose package greater than  of last package'));  
    //   }
       
        $wallet= \DB::table('wallets')->where('currency',$request->paymentMode)->inRandomOrder()->first();
      
        $walletAddress=($wallet)?$wallet->wallet:"";
    
      
      
         $this->data['walletAddress'] =$walletAddress;
         $this->data['amount'] =$request->amount;
         $this->data['paymentMode'] =$request->paymentMode;
        $this->data['page'] = 'user.invest.confirm';
        return $this->dashboard_layout();
        


  }
   catch(\Exception $e){
    Log::info('error here');
    Log::info($e->getMessage());
    print_r($e->getMessage());
    die("hi");
    return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
      }


        }



   
        public function fundActivation(Request $request)
        {
    
    
      try{
        $validation =  Validator::make($request->all(), [
            'amount' => 'required|numeric|min:20',
            'username' => 'required',
            'paymentMode' => 'required',
        ]);
    
        if($validation->fails()) {
            Log::info($validation->getMessageBag()->first());
    
            return redirect()->route('user.invest')->withErrors($validation->getMessageBag()->first())->withInput();
        }
    
    
           $user=Auth::user();
           $plan="1";
    
           $user_detail=User::where('username',$user->username)->orderBy('id','desc')->limit(1)->first();
           $invest_check=Investment::where('user_id',$user_detail->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();
           $invoice = substr(str_shuffle("0123456789"), 0, 7);
    
           $last_package = ($invest_check)?$invest_check->amount:0;
       
             if ($request->amount>=$last_package)
              {
    
               $data = [
                    'plan' => $plan,
                    'transaction_id' =>$request->username,
                    'user_id' => $user_detail->id,
                    'user_id_fk' => $user_detail->username,
                    'amount' => $request->amount,
                    'payment_mode' => $request->paymentMode,
                    'status' => 'Pending',
                    'sdate' => Date("Y-m-d"),
                    'active_from' => $user->username,
                ];
                $payment =  Investment::insert($data);
                


            $notify[] = ['success', $user_detail->username.' User Activation Request Submited successfully'];
            return redirect()->route('user.invest')->withNotify($notify);
    
          }
    
          else
          {
             return redirect()->route('user.invest')->withErrors(array('choose package greater than  of last package'));  
          }
    
    
      }
       catch(\Exception $e){
        Log::info('error here');
        Log::info($e->getMessage());
        print_r($e->getMessage());
        die("hi");
        return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
          }
    
    
            }
    



        public function invest_list(Request $request){

      $user=Auth::user();
      $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Investment::where('user_id',$user->id);
      if($search <> null && $request->reset!="Reset"){
        $notes = $notes->where(function($q) use($search){
          $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
          ->orWhere('txn_no', 'LIKE', '%' . $search . '%')
          ->orWhere('status', 'LIKE', '%' . $search . '%')
          ->orWhere('type', 'LIKE', '%' . $search . '%')
          ->orWhere('amount', 'LIKE', '%' . $search . '%');
        });

      }

        $notes = $notes->paginate($limit)->appends(['limit' => $limit ]);

      $this->data['search'] =$search;
      $this->data['deposit_list'] =$notes;
      $this->data['page'] = 'user.invest.DepositHistory';
      return $this->dashboard_layout();


        }

}
