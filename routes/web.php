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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Route::get('arr', function () {
//    return [1, 2, 3];
//});
//
//Route::get('header', function () {
//    return response('Hello World', 200)->header('Content-Type', 'text/plain');
//});
//
//Route::get('dashboard', function() {
//    return redirect('header');
//});

//
//Route::get('/athome/{atid}',function($atid){
//    $atdata=Athomes::where('id','=',$atid)
//        ->select('id','temperature','sensors1','sensors2','led1')
//        ->get();
//    return Response::json($atdata);
//});

//Route::get('athomes', 'AthomesController@index');
//Route::get('athomes/create', ['uses' => 'AthomesController@create']);
//Route::get('athomes/show/{id?}', ['uses' => 'AthomesController@show']);