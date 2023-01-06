<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ProfileController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
})->name('top');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::prefix('mypage')
     ->namespace('MyPage')
     ->middleware('auth')
     ->group(function () {
         Route::get('edit-profile', [ProfileController::class,'showProfileEditForm'])->name('mypage.edit-profile');
         Route::post('edit-profile', [ProfileController::class,'editProfile'])->name('mypage.edit-profile');
     });