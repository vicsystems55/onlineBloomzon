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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');

Route::get('/add-to-cart/{productId}', 'CartController@add')->name('cart.add')->middleware('auth');



Route::get('/destroy/{productId}', 'CartController@destroy')->name('cart.destroy')->middleware('auth');

Route::get('/cart', 'CartController@index')->name('cart')->middleware('auth');

Route::get('/home', 'BuyersPageController@dashboard')->name('dashboard')->middleware('verified');

Route::get('/dashboard', 'BuyersPageController@dashboard')->name('dashboard')->middleware('verified');

Route::get('/dashboard/upPaymentMethod', 'BuyersPageController@upPaymentMethod')->name('upPaymentMethod');

Route::get('/dashboard/securitySettings', 'BuyersPageController@securitySettings')->name('securitySettings');

Route::get('/dashboard/deliveryStatus', 'BuyersPageController@deliveryStatus')->name('deliveryStatus');

Route::get('/purchaseHistory', 'BuyersPageController@purchaseHistory')->name('purchaseHistory');

Route::get('/points', 'BuyersPageController@points')->name('points');


Route::get('/profile', 'BuyersPageController@profile')->name('profile');

Route::post('/profile/update', 'BuyersPageController@profileUpdate')->name('profileUpdate');

Route::get('/profile/viewEdit', 'BuyersPageController@viewEdit')->name('viewEdit');

Route::get('/profile/updateAccountDetails', 'BuyersPageController@updateAccountDetails')->name('updateAccountDetails');


Route::get('/purchaseHistory', 'BuyersPageController@purchaseHistory')->name('purchaseHistory');

Route::get('/notifications', 'BuyersPageController@notifications')->name('notifications');

Route::get('/favourites', 'BuyersPageController@favourites')->name('favourites');

Route::get('/bloomzonProducts', 'BuyersPageController@bloomzonProducts')->name('bloomzonProducts');

Route::get('/paymentHistory', 'BuyersPageController@paymentHistory')->name('paymentHistory');

Route::get('/messages', 'BuyersPageController@messages')->name('messages');

Route::post('/sendMessage', 'BuyersPageController@sendMessage')->name('sendMessage');

Route::get('/messages/messageChat', 'BuyersPageController@messageChat')->name('messageChat');

Route::get('/points', 'BuyersPageController@points')->name('points');

Route::get('/allAds', 'BuyersPageController@allAds')->name('allAds');

Route::get('/postNewAds', 'BuyersPageController@postNewAds')->name('postNewAds');

Route::get('/contactAdmin', 'BuyersPageController@contactAdmin')->name('contactAdmin');

Route::get('/dispute', 'BuyersPageController@dispute')->name('dispute');

Route::get('/feedback', 'BuyersPageController@feedback')->name('feedback');

Route::get('/reviews', 'BuyersPageController@reviews')->name('reviews');

Route::get('/becomeSeller', 'BuyersPageController@becomeSeller')->name('becomeSeller');

Route::get('/auth/google', 'SocialiteController@redirectToGoogle');

Route::get('/auth/google/callback', 'SocialiteController@handleGoogleCallback');


Route::get('/auth/facebook', 'fbkLoginController@redirectToFacebook');

Route::get('/auth/facebook/callback', 'fbkLoginController@handleFacebookCallback');


Route::get('/auth/twitter', 'twitLoginController@redirectToTwitter');

Route::get('/auth/twitter/callback', 'twitLoginController@handleTwitterCallback');

