<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/clear', function() {

   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');

   return "Cleared!";

});

Route::get('/', function () {
    return view('main.home');
});

Auth::routes();

Route::get('/generate_roi', [App\Http\Controllers\Cron::class, 'generate_roi'])->name('generate_roi');
Route::get('/boosterincome', [App\Http\Controllers\Cron::class, 'boosterincome'])->name('boosterincome');
Route::get('/milestone_bonus', [App\Http\Controllers\Cron::class, 'milestone_bonus'])->name('milestone_bonus');
Route::get('/tradeAmt', [App\Http\Controllers\Cron::class, 'tradeAmt'])->name('tradeAmt');
Route::get('/reward_bonus', [App\Http\Controllers\Cron::class, 'reward_bonus'])->name('reward_bonus');
Route::get('/InactiveID', [App\Http\Controllers\Cron::class, 'InactiveID'])->name('InactiveID');


Route::post('login', [App\Http\Controllers\Login::class, 'login'])->name('login');
Route::get('forgot-password', [App\Http\Controllers\Login::class, 'forgot_password'])->name('forgot-password');
Route::any('forgot_submit', [App\Http\Controllers\Login::class, 'forgot_password_submit'])->name('forgot_submit');
Route::any('submitResetPassword', [App\Http\Controllers\Login::class, 'submitResetPassword'])->name('submitResetPassword');
Route::any('verifyCode', [App\Http\Controllers\Login::class, 'verifyCode'])->name('verifyCode');
Route::get('codeVerify', [App\Http\Controllers\Login::class, 'codeVerify'])->name('codeVerify');
Route::get('resetPassword', [App\Http\Controllers\Login::class, 'resetPassword'])->name('resetPassword');

Route::post('/getUserName', [App\Http\Controllers\Register::class, 'getUserNameAjax'])->name('getUserName');
Route::post('/registers', [App\Http\Controllers\Register::class, 'register'])->name('registers');
Route::get('/register_sucess', [App\Http\Controllers\Register::class, 'index'])->name('register_sucess');

Route::get('/contacts', [App\Http\Controllers\FrontController::class, 'contacts'])->name('contacts');

Route::get('/Index', [App\Http\Controllers\FrontController::class, 'index'])->name('Index');
Route::get('/faq', [App\Http\Controllers\FrontController::class, 'faq'])->name('faq');
Route::get('/about', [App\Http\Controllers\FrontController::class, 'about'])->name('about');
Route::get('/news', [App\Http\Controllers\FrontController::class, 'news'])->name('news');
Route::get('/work', [App\Http\Controllers\FrontController::class, 'work'])->name('work');
Route::get('/staking', [App\Http\Controllers\FrontController::class, 'staking'])->name('staking');
Route::get('/tasks', [App\Http\Controllers\FrontController::class, 'tasks'])->name('tasks');
Route::get('/partners', [App\Http\Controllers\FrontController::class, 'partners'])->name('partners');
Route::get('/accelerators', [App\Http\Controllers\FrontController::class, 'accelerators'])->name('accelerators');

Route::prefix('user')->group(function ()
{
Route::middleware('auth')->group(function ()
{
Route::get('/dashboard', [App\Http\Controllers\UserPanel\Dashboard::class, 'index'])->name('user.dashboard');
Route::post('watch-task', [App\Http\Controllers\UserPanel\Dashboard::class, 'watch_task'])->name('user.watch-task');
// profile
Route::get('/profile', [App\Http\Controllers\UserPanel\Profile::class, 'index'])->name('user.profile');
Route::post('/update-profile', [App\Http\Controllers\UserPanel\Profile::class, 'profile_update'])->name('user.update-profile');
Route::post('/update-wallet', [App\Http\Controllers\UserPanel\Profile::class, 'profile_wallet'])->name('user.update-wallet');

Route::get('/ChangePass', [App\Http\Controllers\UserPanel\Profile::class, 'change_password'])->name('user.ChangePass');
Route::get('/security-password', [App\Http\Controllers\UserPanel\Profile::class, 'ChangeSecurityPass'])->name('user.security-password');
Route::get('/share', [App\Http\Controllers\UserPanel\Profile::class, 'share'])->name('user.share');

Route::post('/edit-password', [App\Http\Controllers\UserPanel\Profile::class, 'change_password_post'])->name('user.edit-password');
Route::get('/BankDetail', [App\Http\Controllers\UserPanel\Profile::class, 'BankDetail'])->name('user.BankDetail');
Route::post('/bank-update', [App\Http\Controllers\UserPanel\Profile::class, 'bank_profile_update'])->name('user.bank-update');
Route::post('/change-trxpasswword', [App\Http\Controllers\UserPanel\Profile::class, 'change_trxpassword_post'])->name('user.change-trxpasswword');
// end profile


// add fund

Route::get('/AddFund', [App\Http\Controllers\UserPanel\AddFund::class, 'index'])->name('user.AddFund');
Route::post('/fundconfirm', [App\Http\Controllers\UserPanel\AddFund::class, 'fundconfirm'])->name('user.fundconfirm');

Route::get('/fundHistory', [App\Http\Controllers\UserPanel\AddFund::class, 'fundHistory'])->name('user.fundHistory');
Route::any('/SubmitBuyFund', [App\Http\Controllers\UserPanel\AddFund::class, 'SubmitBuyFund'])->name('user.SubmitBuyFund');
// Route::post('/confirmDeposit', [App\Http\Controllers\UserPanel\AddFund::class, 'confirmDeposit'])->name('user.confirmDeposit');

// end add fund

// invest
Route::get('/invest', [App\Http\Controllers\UserPanel\Invest::class, 'index'])->name('user.invest');
Route::any('/confirm', [App\Http\Controllers\UserPanel\Invest::class, 'confirm'])->name('user.confirm');
Route::post('/fundActivation', [App\Http\Controllers\UserPanel\Invest::class, 'fundActivation'])->name('user.fundActivation');
Route::get('/DepositHistory', [App\Http\Controllers\UserPanel\Invest::class, 'invest_list'])->name('user.DepositHistory');


// end invest

// withdraw
Route::get('/Withdraw', [App\Http\Controllers\UserPanel\WithdrawRequest::class, 'index'])->name('user.Withdraw');
Route::post('/WithdrawRequest', [App\Http\Controllers\UserPanel\WithdrawRequest::class, 'WithdrawRequest'])->name('user.Withdraw-Request');
Route::get('/WithdrawHistory', [App\Http\Controllers\UserPanel\WithdrawRequest::class, 'WithdrawHistory'])->name('user.WithdrawHistory');
// end withdraw

//team
Route::get('/referral-team', [App\Http\Controllers\UserPanel\Team::class, 'index'])->name('user.referral-team');
Route::get('/level-team', [App\Http\Controllers\UserPanel\Team::class, 'LevelTeam'])->name('user.level-team');
//end team

//bonus
Route::get('/level-income', [App\Http\Controllers\UserPanel\Bonus::class, 'index'])->name('user.level-income');
Route::get('/cashback-income', [App\Http\Controllers\UserPanel\Bonus::class, 'cashback_income'])->name('user.cashback-income');
Route::get('/reward-bonus', [App\Http\Controllers\UserPanel\Bonus::class, 'reward_income'])->name('user.reward-bonus');
Route::get('/roi-bonus', [App\Http\Controllers\UserPanel\Bonus::class, 'roi_income'])->name('user.roi-bonus');
Route::get('/gap-margin-bonus', [App\Http\Controllers\UserPanel\Bonus::class, 'gap_margin_bonus'])->name('user.gap-margin-bonus');
//end bonus

//tickets
Route::get('/GenerateTicket',[App\Http\Controllers\UserPanel\Tickets::class,'GenerateTicket'])->name('user.GenerateTicket');
Route::post('/SubmitTicket',[App\Http\Controllers\UserPanel\Tickets::class,'SubmitTicket'])->name('user.SubmitTicket');
Route::get('/SupportMessage',[App\Http\Controllers\UserPanel\Tickets::class,'SupportMessage'])->name('user.SupportMessage');
Route::get('/ViewMessage',[App\Http\Controllers\UserPanel\Tickets::class,'ViewMessage'])->name('user.ViewMessage');

//end tickets

});
});


// admin

Route::prefix('admin')->group(function () {
Route::get('/admin-login', [App\Http\Controllers\Admin\AdminLogin::class, 'index'])->name('admin.admin-login');
Route::post('LoginAction', [App\Http\Controllers\Admin\AdminLogin::class, 'admin_login'])->name('admin.LoginAction');
Route::get('/admin-logout', [App\Http\Controllers\Admin\AdminLogin::class, 'admin_sign_out'])->name('admin.admin-logout');
Route::group(['middleware' => ['admin']], function ()
{

 Route::get('/dashboard', [App\Http\Controllers\Admin\Dashboard::class, 'index'])->name('admin.dashboard');
 Route::get('/changePassword', [App\Http\Controllers\Admin\Dashboard::class, 'changePassword'])->name('admin.changePassword');
 Route::get('/add-price', [App\Http\Controllers\Admin\Dashboard::class, 'addPrice'])->name('admin.add-price');
 Route::get('/add-wallet', [App\Http\Controllers\Admin\Dashboard::class, 'addWallet'])->name('admin.add-wallet');
 Route::get('/settings', [App\Http\Controllers\Admin\Dashboard::class, 'settings'])->name('admin.settings');
 Route::post('/update-settings', [App\Http\Controllers\Admin\Dashboard::class, 'update_settings'])->name('admin.update-settings');
 Route::post('/update-wallets', [App\Http\Controllers\Admin\Dashboard::class, 'change_wallet_address'])->name('admin.update-wallets');
 
 Route::get('/taskReport', [App\Http\Controllers\Admin\Dashboard::class, 'taskReport'])->name('admin.taskReport');
 Route::get('delete-task', [App\Http\Controllers\Admin\Dashboard::class, 'delete_task'])->name('admin.delete-task');
 Route::get('delete-wallet', [App\Http\Controllers\Admin\Dashboard::class, 'delete_wallet'])->name('admin.delete-wallet');

 Route::post('/change-price', [App\Http\Controllers\Admin\Dashboard::class, 'change_price'])->name('admin.change-price');
 
 Route::post('/change-password-post', [App\Http\Controllers\Admin\Dashboard::class, 'change_password_post'])->name('admin.change-password-post');

 // active users controller


 Route::get('/active-user', [App\Http\Controllers\Admin\ActiveuserController::class, 'active_user'])->name('admin.active-user');
 Route::post('activate-admin', [App\Http\Controllers\Admin\ActiveuserController::class, 'activate_admin_post'])->name('admin.activate-admin');

 // usercontroller
 Route::get('/totalusers', [App\Http\Controllers\Admin\UserController::class, 'alluserlist'])->name('admin.totalusers');
 Route::get('/active-users', [App\Http\Controllers\Admin\UserController::class, 'active_users'])->name('admin.active-users');
 Route::get('/pending-user', [App\Http\Controllers\Admin\UserController::class, 'pending_users'])->name('admin.pending-user');
 Route::get('/edit-users', [App\Http\Controllers\Admin\UserController::class, 'edit_users'])->name('admin.edit-users');
 Route::get('edit-user-view/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit_users_view'])->name('admin.edit-user-view');

 Route::any('update-user-profile', [App\Http\Controllers\Admin\UserController::class, 'users_profile_update'])->name('admin.update-user-profile');
 Route::get('/block-users', [App\Http\Controllers\Admin\UserController::class, 'block_users'])->name('admin.block-users');
 Route::get('block-submit', [App\Http\Controllers\Admin\UserController::class, 'block_submit'])->name('admin.block-submit');


 //end userController

//DepositManagmentController
 Route::get('/depodit-request', [App\Http\Controllers\Admin\DepositController::class, 'deposit_request'])->name('admin.deposit-request');
 Route::get('/rejected-deposit', [App\Http\Controllers\Admin\DepositController::class, 'rejected_deposit'])->name('admin.rejected-deposit');

 Route::get('/depodit-list', [App\Http\Controllers\Admin\DepositController::class, 'deposit_list'])->name('admin.deposit-list');
 Route::get('deposit_request_done', [App\Http\Controllers\Admin\DepositController::class, 'deposit_request_done'])->name('admin.deposit_request_done');
// end DepositManagmentController



//bonusController
Route::get('roi-bonus', [App\Http\Controllers\Admin\BonusController::class, 'roi_bonus'])->name('admin.roi-bonus');
Route::get('level-bonus', [App\Http\Controllers\Admin\BonusController::class, 'level_bonus'])->name('admin.level-bonus');
Route::get('booster-bonus', [App\Http\Controllers\Admin\BonusController::class, 'booster_bonus'])->name('admin.booster-bonus');
Route::get('club-bonus', [App\Http\Controllers\Admin\BonusController::class, 'club_bonus'])->name('admin.club-bonus');
Route::get('reward-bonus', [App\Http\Controllers\Admin\BonusController::class, 'reward_bonus'])->name('admin.reward-bonus');


// withdraw
Route::get('pendingWithdrawal', [App\Http\Controllers\Admin\WithdrawController::class, 'pendingWithdrawal'])->name('admin.pendingWithdrawal');
Route::get('withdraw_request_done', [App\Http\Controllers\Admin\WithdrawController::class, 'withdraw_request_done'])->name('admin.withdraw_request_done');
Route::get('rejectedWithdrawal', [App\Http\Controllers\Admin\WithdrawController::class, 'rejectedWithdrawal'])->name('admin.rejectedWithdrawal');
Route::get('approvedWithdrawal', [App\Http\Controllers\Admin\WithdrawController::class, 'approvedWithdrawal'])->name('admin.approvedWithdrawal');
Route::get('pendingBankWithdrawal', [App\Http\Controllers\Admin\WithdrawController::class, 'pendingBankWithdrawal'])->name('admin.pendingBankWithdrawal');

// support


Route::get('support-query', [App\Http\Controllers\Admin\SupportController::class, 'index'])->name('admin.support-query');
Route::get('get_support_msg', [App\Http\Controllers\Admin\SupportController::class, 'get_support_msg'])->name('admin.get_support_msg');
Route::get('close_ticket_', [App\Http\Controllers\Admin\SupportController::class, 'close_ticket_'])->name('admin.close_ticket_');
Route::get('reply_support_msg', [App\Http\Controllers\Admin\SupportController::class, 'reply_support_msg'])->name('admin.reply_support_msg');
Route::post('admin_ticket_submit', [App\Http\Controllers\Admin\SupportController::class, 'admin_ticket_submit'])->name('admin.admin_ticket_submit');

});

});
