<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use DB;
use Redirect;
use Auth;

class Dashboard extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {     
     
     $this->data['page'] = 'admin.dashboard';
     return $this->admin_dashboard();
     
    } 


    public function changePassword()
    {     
     
     $this->data['page'] = 'admin.setting.change-password';
     return $this->admin_dashboard();
     
    } 

    public function addPrice()
    {     
     
     $this->data['page'] = 'admin.setting.add-price';
     return $this->admin_dashboard();
     
    } 
      public function addWallet(Request $request)
    {     
        
            $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = \DB::table('wallets')->orderBy('id', 'DESC');

        if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('wallet', 'LIKE', '%' . $search . '%')
              ->orWhere('currency', 'LIKE', '%' . $search . '%');
            });

          }
    $notes = $notes->orderBy('id', 'DESC')->paginate($limit)
        ->appends([
            'limit' => $limit
        ]);

        $this->data['wallets'] =  $notes;
        $this->data['search'] = $search;

     
     $this->data['page'] = 'admin.setting.add-wallet';
     return $this->admin_dashboard();
     
    } 
    

    public function settings()
    {     
     
     $this->data['page'] = 'admin.setting.index';
     return $this->admin_dashboard();
     
    } 
    

    public function taskReport(Request $request)
    {     
     
         $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = \DB::table('add_task_urls')->orderBy('id', 'DESC');

        if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('url', 'LIKE', '%' . $search . '%')
              ->orWhere('tdate', 'LIKE', '%' . $search . '%');
            });

          }
    $notes = $notes->orderBy('id', 'DESC')->paginate($limit)
        ->appends([
            'limit' => $limit
        ]);

        $this->data['alluserlist'] =  $notes;
        $this->data['search'] = $search;

     $this->data['page'] = 'admin.setting.taskReport';
     return $this->admin_dashboard();
     
    } 
    

    public function delete_task(Request $request)
    {

      $id= $request->id; // or any params
      $user =  \DB::table('add_task_urls')->where('id',$id)->delete();

    $notify[] = ['success', 'Deleted successfully'];
    return redirect()->back()->withNotify($notify);
  }


  

    public function delete_wallet(Request $request)
    {

      $id= $request->id; // or any params
      $user =  \DB::table('wallets')->where('id',$id)->delete();

    $notify[] = ['success', 'Deleted successfully'];
    return redirect()->back()->withNotify($notify);
  }



    public function change_password_post(Request $request)
    {

        try {
            $data = $request->all();
            $rules = array('old_password' => 'required', 'password' => 'required|confirmed');
            $msg = [
                'old_password.required'     => 'Old Password is required',
                'password.required'         => 'Password is required' ,
                'password.confirmed'        => 'Password must match'    ,
            ];

            $validator = Validator::make($data, $rules, $msg);
            if ($validator->fails())
                return Redirect::back()->withErrors($validator->getMessageBag()->first());

            $user = Auth::guard('admin')->user();
            // print_r($user);die();

            if (!\Hash::check($data['old_password'], $user->password))
                return Redirect::back()->withErrors('Current Password is incorrect');

            DB::Table('admins')->where('id', $user->id)->update(array(
                'password' => \Hash::make($data['password']),
                'updated_at' => new \DateTime
            ));

        
            $notify[] = ['success', 'password updated successfully'];
            return redirect()->back()->withNotify($notify);
        } catch (\Exception $e) {
            return Redirect::back()->witherrors($e->getMessage())->withInput();
        }

    }

    public function change_price(Request $request)
    {

        try {
            $data = $request->all();
            $rules = array('url' => 'required');
            $msg = [
                'url.required'     => 'Url is required',
            ];

            $validator = Validator::make($data, $rules, $msg);
            if ($validator->fails())
                return Redirect::back()->withErrors($validator->getMessageBag()->first());

            $user = Auth::guard('admin')->user();
            // print_r($user);die();

        

            DB::table('add_task_urls')->insert(array(
                'url' => $data['url'],
                'tdate' =>Date("Y-m-d"),
                'updated_at' => new \DateTime
            ));

            
            $notify[] = ['success', 'url updated successfully'];
        return redirect()->back()->withNotify($notify);
        } catch (\Exception $e) {
            return Redirect::back()->witherrors($e->getMessage())->withInput();
        }

    }
    
  public function change_wallet_address(Request $request)
    {

        try {
            $data = $request->all();
            $rules = array('currency' => 'required','wallet' => 'required');
            $msg = [
                'currency.required'     => 'currency is required',
                'wallet.required'     => 'wallet is required',
            ];

            $validator = Validator::make($data, $rules, $msg);
            if ($validator->fails())
                return Redirect::back()->withErrors($validator->getMessageBag()->first());

            $user = Auth::guard('admin')->user();
            // print_r($user);die();

        

            DB::table('wallets')->insert(array(
                'currency' => $data['currency'],
                'wallet' => $data['wallet'],
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ));

            
            $notify[] = ['success', 'wallet updated successfully'];
        return redirect()->back()->withNotify($notify);
        } catch (\Exception $e) {
            return Redirect::back()->witherrors($e->getMessage())->withInput();
        }

    }



    public function update_settings(Request $request)
    {

        try {
            $data = $request->all();
            $rules = array('company_users' => 'required');
            $msg = [
                'company_users.required'     => 'Company users is required',
            ];

            $validator = Validator::make($data, $rules, $msg);
            if ($validator->fails())
                return Redirect::back()->withErrors($validator->getMessageBag()->first());

            $user = Auth::guard('admin')->user();
            // print_r($user);die();

            DB::table('company_users')->insert(array(
                'member' => $data['company_users'],
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ));

            
            $notify[] = ['success', 'updated successfully'];
        return redirect()->back()->withNotify($notify);
        } catch (\Exception $e) {
            return Redirect::back()->witherrors($e->getMessage())->withInput();
        }

    }


    

}
