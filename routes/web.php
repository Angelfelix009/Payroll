<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\PagesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\PagesController as UserSetting;
use App\Http\Controllers\Bank\BankController;
use App\Http\Controllers\Branch\BranchController;
use App\Http\Controllers\State\StateController;
use App\Http\Controllers\Pension\PensionController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('home');
})->name('dashboard');

Route::get('/', [PagesController::class,'index']);
Route::get('/login', [LoginController::class,'showLoginForm']);
Route::post('/login', [LoginController::class,'login'])->name('login');

Route::get('/register',function (){
    return redirect()->route('user.create');
});
Route::post('/register',function (){
    return redirect()->route('user.store');
});

Route::post('/change-role',[UserSetting::class,'change_role'])->name('change-role');

Route::resource('/user',UserController::class);
Route::resource('/bank',BankController::class);
Route::resource('/state',StateController::class);
Route::resource('/branch',BranchController::class);
Route::resource('/pension',PensionController::class);