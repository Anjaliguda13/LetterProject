<?php
use App\Http\Controllers\indexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\releivingController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\PromotionContoller;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\IndustrialController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\SponsorshipController;
use App\Http\Controllers\SalaryController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',[indexController::class,'index'])->middleware('logincheck');
Route::get('header',[indexController::class,'header']);

Route::get('login',[indexController::class,'login']);
Route::post('log',[LoginController::class,'login1']);
Route::get('logout',[LoginController::class,'logout']);



Route::get('sponsorship',[SponsorshipController::class,'sponsorship'])->middleware('logincheck');

Route::post('stores', [SponsorshipController::class, 'store']);
Route::resource('sponsorships',SponsorshipController::class)->middleware('logincheck');


Route::get('offer',[OfferController::class,'offer'])->middleware('logincheck');
Route::post('ostore', [OfferController::class, 'store']);
Route::resource('offers',OfferController::class)->middleware('logincheck');


Route::get('rele', [releivingController::class, 'releiving'])->middleware('logincheck');
Route::post('sto', [releivingController::class, 'store']);
Route::resource('releivings',releivingController::class)->middleware('logincheck');

Route::get('promotion',[PromotionContoller::class,'promotion'])->middleware('logincheck');
Route::post('pstore', [PromotionContoller::class, 'store']);
Route::resource('promotions',PromotionContoller::class)->middleware('logincheck');

Route::get('emp',[EmpController::class,'emp'])->middleware('logincheck');
Route::post('store',[EmpController::class,'store']);
Route::resource('emps',EmpController::class)->middleware('logincheck');

Route::get('experience',[ExperienceController::class,'experience'])->middleware('logincheck');
Route::post('estore',[ExperienceController::class,'store']);
Route::resource('experiences',ExperienceController::class)->middleware('logincheck');

Route::get('industrial',[IndustrialController::class,'industrial'])->middleware('logincheck');
Route::post('istore', [IndustrialController::class, 'store']);
Route::resource('industrials',IndustrialController::class)->middleware('logincheck');

Route::get('internship',[InternshipController::class,'internship'])->middleware('logincheck');
Route::post('instore',[InternshipController::class,'store']);
Route::resource('internships',InternshipController::class)->middleware('logincheck');

Route::get('sal',[SalaryController::class,'salary']);
Route::post('sstore',[SalaryController::class,'store']);
Route::resource('salaries',SalaryController::class)->middleware('logincheck');


Route::get('empsearch',[EmpController::class,'search']);


// Route::get('/employees/search', 'EmployeeController@search')->name('employees.search');
