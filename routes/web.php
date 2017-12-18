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

Route::post('/create','AssignmentController@store');
Route::post('/mail','MessageController@store');

Route::get('paywithpaypal', array('as' => 'addmoney.paywithpaypal','uses' => 'AddMoneyController@payWithPaypal',));
Route::post('paypal', array('as' => 'addmoney.paypal','uses' => 'AddMoneyController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'payment.status','uses' => 'AddMoneyController@getPaymentStatus',));
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('twitterUserTimeLine', 'TwitterController@twitterUserTimeLine');

Route::post('tweet', ['as'=>'post.tweet','uses'=>'TwitterController@tweet']);
