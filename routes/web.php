<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\ClientController;


use App\Models\Contact;
use App\Models\User;

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

Route::get('/', [LocalizationController::class, "index"]);
Route::get('/', [LocalizationController::class, "lang_change"])->name('LangChange');
Route::post('/', [ContactController::class, 'sendMsg']);

Auth::routes();


Route::group(['middleware' => 'auth','IsAdmin'], function () {

Route::get('/dashboard/index', [DashboardController::class, 'Showdashboard'])->name('admin.dash');
Route::get('/dashboard/messages', [DashboardController::class, 'Showmessages'])->name('admin.msg');
Route::get('/dashboard/messages/{id}', [DashboardController::class, 'showMsgbyID'])->name('admin.msgid');

//////CLient path dashboard ///////
Route::get('/authentication/index', [ClientController::class, 'Showdclientdash'])->name('client.dash');



});

Route::get('/auth/logout', [DashboardController::class, 'logout']);





Route::get('/blog', function () {
    return view('home.tutorial');
    
 }); 


Route::get('/hireusonfiverr', function () {
    return view('home.hireusonfiverr');
     });

Route::get('/discussidea', function () {
    return view('home.discussidea');
     });

Route::get('/solutions', function () {
    return view('home.solutions');
     });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
