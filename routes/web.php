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
Route::get('login', 'Authcontroller@login')->name('login');
Route::Post('authenticate', 'Authcontroller@authenticate')->name('authenticate');
Route::get('logout', 'Authcontroller@logout')->name('logout');
Route::get('register', 'Authcontroller@register')->name('register');
Route::post('register', 'Authcontroller@do_register')->name('do_register');



Route::resource('contacts', 'ContactController');

Route::get('train', 'TrainController@querybuilder');
Route::get('orm', 'TrainController@orm');




Route::namespace('Dashboard')->middleware('auth')->prefix('dashboard.')->group(function(){
    Route::get('/','Dashboardcontroller@index' );
    Route::resource('product', 'productcontroller');
    Route::resource('User', 'UserController');
    Route::resource('Category', 'Categorycontroller');
    
});






Route::get('/','frontSiteController@ShowHome')->name('frontside.home');
Route::get('aboutus','frontSiteController@ShowAboutus')->name('frontside.aboutus');
Route::get('whatwedo','frontSiteController@ShowWhatwedo')->name('frontside.whatwedo');
Route::get('contact','frontSiteController@ShowContact')->name('frontside.contact');
Route::get('meet','frontSiteController@ShowMeet')->name('frontside.meet');
//Route::resource('users', 'Dashboard\UserController');



/*Route::get('/', function () {
    return view('welcom');
});

Route::get('/', function () {
    return view('frontside.home');
})->name('frontside.home');

Route::get('aboutus', function () {
    return view('frontside.aboutus');
})->name('frontside.aboutus');

Route::get('whatwedo', function () {
    return view('frontside.whatwedo');
})->name('frontside.whatwedo');

Route::get('contact', function () {
    return view('frontside.contact');
})->name('frontside.contact');

Route::get('meet', function () {
    return view('frontside.meet');
})->name('frontside.meet');
*/