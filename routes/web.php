<?php

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

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//home
Route::get('/', [HomeController::class, 'home']);
Route::get('/ticket', [HomeController::class, 'index_ticket']);
Route::get('/bukit-strawberry', [HomeController::class, 'index_bukit_strawberry']);
Route::get('/store', [HomeController::class, 'index_store']);
Route::get('/mart', [HomeController::class, 'index_mart']);
Route::get('/contact', [HomeController::class, 'index_contact']);
Route::get('/blog', [HomeController::class, 'index_blog']);
Route::get('/login', [HomeController::class, 'index_login']);

//farm
Route::get('/farm', [HomeController::class, 'index_farm']);
Route::get('/farm/{animal}', [HomeController::class, 'detail_farm']);

//park
Route::get('/park', [HomeController::class, 'index_park']);
Route::get('/park/{park}', [HomeController::class, 'detail_park']);

//island
Route::get('/island', [HomeController::class, 'index_island']);
Route::get('/island/{island}', [HomeController::class, 'detail_island']);

//jungle
Route::get('/jungle', [HomeController::class, 'index_jungle']);
Route::get('/jungle/{jungle}', [HomeController::class, 'detail_jungle']);

//city
Route::get('/city', [HomeController::class, 'index_city']);
Route::get('/city/{city}', [HomeController::class, 'detail_city']);

//planet
Route::get('/planet', [HomeController::class, 'index_planet']);
Route::get('/planet/{planet}', [HomeController::class, 'detail_planet']);

//restaurant
Route::get('/restaurant', [HomeController::class, 'index_resto']);
Route::get('/restaurant/{resto}', [HomeController::class, 'detail_resto']);
//Dashboard Route
// Route::group(['namespace'=>'Dashboard'], function(){
// 	Route::group(['middleware'=>'loguser'], function(){
// 		Route::group(['middleware'=>'auth'], function(){
// 			Route::get('dashboard', 'DashboardController@index');
// 			Route::get('panel-explore','PanelExploreController@index');
// 			Route::get('panel-explore/{id}/detail','PanelExploreController@show');
// 			Route::get('search_post', 'PanelExploreController@search_post');
// 		});
// 	});
// });
