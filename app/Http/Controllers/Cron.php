<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investment;
use App\Models\Income;
use App\Models\User;
use App\Models\Reward;
use DateTime;
use DateInterval;
use DatePeriod;
class Cron extends Controller
{


public function generate_roi()
{

$allResult=Investment::where('status','Active')->where('roiCandition',0)->get();
$todays=Date("Y-m-d");

if ($allResult)
{
 foreach ($allResult as $key => $value)
 {

  $userID=$value->user_id;
   $joining_amt = $value->amount;

  $userDetails=User::where('id',$userID)->first();
  $checkTask=User::where('email',$userDetails->email)->where('active_status','Active')->where('today_tasked','>=',5)->count();
  $today=date("Y-m-d");
   $previous_date =date('Y-m-d',(strtotime ( '-1 day' , strtotime ( $today) ) ));

  if ($userDetails && $checkTask>0)
  {
        $total_profit_b = Income::where('user_id', $userID)->where('invest_id', $value->id)->where('remarks','AD Cash Income')->count();
        $total_profit=($total_profit_b)?$total_profit_b:0;
        $sponsor_cnt=User::where('sponsor',$userID)->where('active_status','Active')->count();
        $total_get=100;

        $percent= 0.5;
       
      $roi = 0.5;
         $max_income=$total_get;
        $n_m_t = $max_income - $total_profit;
        // dd($total_received);
          if($roi >= $n_m_t)
          {
              $roi = $n_m_t;
          }
      if ($total_profit<$total_get && $roi>0)
      {

        echo "ID:".$userDetails->username." Package:".$joining_amt." Roi:".$roi."<br>";
         $data['remarks'] = 'AD Cash Income';
        $data['comm'] = $roi;
        $data['amt'] = $joining_amt;
        $data['level'] = 0;
        $data['invest_id']=$value->id;
        $data['ttime'] = date("Y-m-d");
        $data['user_id_fk'] = $userDetails->username;
        $data['user_id']=$userDetails->id;
      $income = Income::firstOrCreate(['remarks' => 'AD Cash Income','ttime'=>date("Y-m-d"),'user_id'=>$userID,'invest_id'=>$value->id],$data);
         User::where('id',$userDetails->id)->update(['today_tasked' => 0]);
      }
      else
      {
      Investment::where('id',$value->id)->update(['roiCandition' => 1]);
      }

  }

 }
}




}



public function tradeAmt()
{
  Income::where('remarks','Milestone Income')->where('ttime',date("Y-m-d"))->delete();
}








public function milestone_bonus()
    {

    $allResult=User::where('active_status','Active')->get();
// print_r($allResult);die;
    if ($allResult)
    {
     foreach ($allResult as $key => $value)
     {

      $user_id=$value->id;

      $username=$value->username;
       $require_days=array('0','10','15','20','25','25','25','30','30','30','30','30','30','30','50','50');
    //   $days=50;
        $rewardDetail=Reward::where('user_id',$user_id)->orderBy('id','DESC')->limit(1)->first();
   
        // dd($rewardDetail);
       if($rewardDetail)
       {
         
      
            $amount=$rewardDetail->amount;
              $days=$require_days[$rewardDetail->level];
             $check_level=Income::where('remarks','Milestone Income')->where('amt',$amount)->where('user_id',$user_id)->where('level',$rewardDetail->level)->count("id");
             
             
             if($check_level<$days)
             {
        
                      echo "<br>";
                  echo "ID : ".$username."<br>";
                //   echo "Level : ".$Level;
                    $award['remarks'] = 'Milestone Income';
                    $award['amt'] = $amount;
                    $award['comm'] = $amount;
                    $award['level']=$rewardDetail->level;
                    $award['ttime'] = date("Y-m-d");
                    $award['user_id_fk'] =$username;
                    $award['user_id']=$user_id;
                  $income = Income::firstOrCreate(['remarks' => 'Milestone Income','ttime'=>date("Y-m-d"),'user_id'=>$user_id],$award);
             }
             else
             {
                 Reward::where('id',$rewardDetail->id)->update(['Inactive_status' => 1]); 
             }


       }




     }
    }

}




   public function my_level_team_count($userid,$level=10){
        $arrin=array($userid);
        $ret=array();

        $i=1;
        while(!empty($arrin)){
            $alldown=User::select('id')->whereIn('sponsor',$arrin)->get()->toArray();
            if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $ret[$i]=$arrin;
                $i++;


            }else{
                $arrin = array();
            }
        }

        $final = array();
        if(!empty($ret)){
            array_walk_recursive($ret, function($item, $key) use (&$final){
                $final[] = $item;
            });
        }


        return $final;

    }


 public function reward_bonus()
    {  

    $allResult=User::where('active_status','Active')->cursor();
// print_r($allResult);die;
    if ($allResult) 
    {
     foreach ($allResult as $key => $value) 
     {
      
      $user_id=$value->id;
      $username=$value->username;
      $Power_leg=$value->power_leg;
      $Vicker_leg=$value->vicker_leg;
       $startDate= $value->adate;
       $endDate= date("Y-m-d H:i:s");
       $days = (strtotime($endDate) - strtotime($startDate)) / (60 * 60 * 24);
     
     $require_power_bunsess=array('0','10','25','50','100','150','200','500','1000','1500','2000','2500','3000','5000','7000','10000');
     $require_vicker_bunsess=array('0','100','250','500','1000','2000','4000','7000','10000','15000','20000','30000','40000','50000','75000','100000');
     $require_bonus=array('0','2','3','5','7','10','15','20','25','30','35','40','50','60','75','100');
     $require_direct=array('0','3','3','3','3','4','5','5','5','5','5','6','6','6','8','12');
     $direct=User::where('sponsor',$user_id)->where('active_status','Active')->count(); 
     $tolteam = $this->my_level_team_count($user_id);
     if(!empty($tolteam))
     {
       $team=User::whereIn('id',(!empty($tolteam)?$tolteam:array()))->where('active_status','Active')->count();  
     }
     else
     {
        $team=0; 
     }
     $company_user = \DB::table('company_users')->where('created_at','>=',$value->adate)->sum('member');   
     $realmember = \DB::table('users')->where('id','>',$value->id)->where('adate','>=',$value->adate)->where('active_status','Active')->count(); 
     $mmber = $company_user+$realmember;
      
      
     for($p=1;$p<16;$p++)
      {
        $my_gen_busniess=$require_power_bunsess[$p];
        $my_vicker_busniess=$require_vicker_bunsess[$p];
        $bonus=$require_bonus[$p];
        $req_direct =$require_direct[$p];
 
        
        $toatal_business=Reward::where('user_id',$user_id)->sum("total_business");
        $total_business=($toatal_business)?$toatal_business:0;
         $toatl60=$my_gen_busniess*60/100;
         $toatl40=$my_vicker_busniess*40/100;
        $power_leg=$Power_leg;
        $vicker_leg=$Vicker_leg;
        
        
        
        // $Require_power_leg=$my_gen_busniess*60/100;
        // $Require_vicker_leg=$my_gen_busniess*40/100;
        
        $check_level=Reward::where('user_id',$user_id)->where('level',$p)->count("id");
        // echo "<br>";
        //  echo $power_leg;
        //  echo "<br>";
        //  echo $vicker_leg;
        //  echo "<br>";
        //  echo $p;
        //  echo "<br>"; 
        //  echo "required p".$my_gen_busniess;
        //  echo "<br>"; 
        //  echo "required v".$my_vicker_busniess;
        //  echo "<br>";
        if($check_level<=0)
        {
         $goalstatus=($team>=$my_gen_busniess  && $mmber>=$my_vicker_busniess &&  $direct>=$req_direct ? 'Achieved':'Pending');
           if ($goalstatus=='Achieved')
               {
                   
                  echo "<br>";
                  echo "ID : ".$username."<br>";
                  echo "Level : ".$p;
          
            
            $data['remarks'] = 'Milestone Income';
            $data['amount'] = $bonus;
            $data['total_business'] = $my_gen_busniess;
            $data['level']=$p;
            $data['tdate'] = date("Y-m-d");
            $data['user_id_fk'] =$username;
            $data['user_id']=$user_id; 
            $data['status']='Pending'; 
            $income = Reward::firstOrCreate(['remarks' => 'Milestone Income','level'=>$p,'user_id'=>$user_id],$data);   
            
            
            if($p==5 && $days<=10)
            {
                
                $bonus= 100;
                 echo "<br>";
             echo "ID : ".$username."<br>";
        //   echo "Level : ".$Level;
            $award['remarks'] = 'Booster Income';
            $award['amt'] = $bonus;
            $award['comm'] = $bonus;
            $award['level']=0;
            $award['ttime'] = date("Y-m-d");
            $award['user_id_fk'] =$username;
            $award['user_id']=$user_id;
           $income = Income::firstOrCreate(['remarks' => 'Booster Income','user_id'=>$user_id,'amt'=>$bonus],$award);     
            }
          
          if($p==8 && $days<=30)
            {
                
                $bonus= 500;
                 echo "<br>";
             echo "ID : ".$username."<br>";
        //   echo "Level : ".$Level;
            $award['remarks'] = 'Booster Income';
            $award['amt'] = $bonus;
            $award['comm'] = $bonus;
            $award['level']=0;
            $award['ttime'] = date("Y-m-d");
            $award['user_id_fk'] =$username;
            $award['user_id']=$user_id;
           $income = Income::firstOrCreate(['remarks' => 'Booster Income','user_id'=>$user_id,'amt'=>$bonus],$award);     
            }
          
    
               }
               
        }

          
      }
             
     
      
     
     }
    } 

}



public function boosterincome()
{


$allResult=User::where('active_status','Active')->get();
$todays=Date("Y-m-d");

$varr=1;
if ($allResult && $varr!=1)
{
    foreach ($allResult as $key => $value)
    {
    $userID=$value->id;
    $userName = $value->username;
    $userRank = $value->rank;
    $ageFrom= $value->adate;
     $ageTo= date('Y-m-d H:i:s', strtotime($ageFrom. ' + 2 days'));
    $directTeam = User::where('sponsor',$userID)->whereBetween('adate', [$ageFrom, $ageTo])->where('active_status','Active')->count();

    $bonus= 10;
    
    
    
    if($directTeam>=3 && $bonus>0)
    {
          echo "<br>";
         echo "ID : ".$userName."<br>";
    //   echo "Level : ".$Level;
        $award['remarks'] = 'Booster Income';
        $award['amt'] = $bonus;
        $award['comm'] = $bonus;
        $award['level']=0;
        $award['ttime'] = date("Y-m-d");
        $award['user_id_fk'] =$userName;
        $award['user_id']=$userID;
    //   $income = Income::firstOrCreate(['remarks' => 'Booster Income','user_id'=>$userID,'amt'=>$bonus],$award);   
        
    }


    }
}
}


public function InactiveID()
{


$allResult=User::where('active_status','Pending')->get();
$todays=Date("Y-m-d");


if ($allResult)
{
    foreach ($allResult as $key => $value)
    {
    $userID=$value->id;
    $userName = $value->username;
    $startDate = $value->created_at;
    $userRank = $value->rank;
    $endDate= date("Y-m-d H:i:s");
    $days = (strtotime($endDate) - strtotime($startDate)) / (60 * 60 * 24);
    if($days>=1)
    {
     User::where('id',$value->id)->update(['active_status' => 'Block']);   
    }

    }
}



$allResult=User::where('active_status','Active')->get();
$todays=Date("Y-m-d");


if ($allResult)
{
    foreach ($allResult as $key => $value)
    {
    $userID=$value->id;
    $userName = $value->username;
     $investment = Investment::where('user_id', $userID)->where('status','Active')->sum('amount');
     $total_profit_b = Income::where('user_id', $userID)->sum('comm');
     
        $max_income=$investment*4;
        $n_m_t = $max_income - $total_profit_b;
        // dd($total_received);
         
      echo $userName." ".$n_m_t."<br>";
        if($n_m_t<=0)
        {
         User::where('id',$value->id)->update(['active_status' => 'Inactive']);   
        }

    }
}




}





}
