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
    return view('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
		
	
	Route::get('botstats', ['as' => 'pages.botstats', 'uses' => 'App\Http\Controllers\PageController@botstats']);
	Route::get('botslot', ['as' => 'pages.botslot', 'uses' => 'App\Http\Controllers\PageController@botslot']);
	Route::get('botslotadd', ['as' => 'pages.botslotadd', 'uses' => 'App\Http\Controllers\PageController@botslotadd']);
	Route::get('botslotaddsuccess', ['as' => 'pages.botslotaddsuccess', 'uses' => 'App\Http\Controllers\PageController@botslotaddsuccess']);
	Route::get('botslotedit', ['as' => 'pages.botslotedit', 'uses' => 'App\Http\Controllers\PageController@botslotedit']);
	Route::get('botsloteditsuccess', ['as' => 'pages.botsloteditsuccess', 'uses' => 'App\Http\Controllers\PageController@botsloteditsuccess']);
	Route::get('botslotdelete', ['as' => 'pages.botslotdelete', 'uses' => 'App\Http\Controllers\PageController@botslotdelete']);
	Route::get('botslotdeletesuccess', ['as' => 'pages.botslotdelete', 'uses' => 'App\Http\Controllers\PageController@botslotdeletesuccess']);

	
		Route::get('stats', ['as' => 'pages.stats', 'uses' => 'App\Http\Controllers\PageController@stats']);
		Route::get('stats1day', ['as' => 'pages.stats1day', 'uses' => 'App\Http\Controllers\PageController@stats1day']);
		Route::get('stats7day', ['as' => 'pages.stats7day', 'uses' => 'App\Http\Controllers\PageController@stats7day']);
		Route::get('stats30day', ['as' => 'pages.stats30day', 'uses' => 'App\Http\Controllers\PageController@stats30day']);
		Route::get('stats30daymin', ['as' => 'pages.stats30daymin', 'uses' => 'App\Http\Controllers\PageController@stats30daymin']);
		Route::get('stats30daymax', ['as' => 'pages.stats30daymax', 'uses' => 'App\Http\Controllers\PageController@stats30daymax']);
		Route::get('amb', ['as' => 'pages.amb', 'uses' => 'App\Http\Controllers\PageController@amb']);
		Route::get('racha', ['as' => 'pages.racha', 'uses' => 'App\Http\Controllers\PageController@racha']);
		Route::get('selectdate', ['as' => 'pages.selectdate', 'uses' => 'App\Http\Controllers\PageController@selectdate']);
		Route::get('racha1day', ['as' => 'pages.racha1day', 'uses' => 'App\Http\Controllers\PageController@racha1day']);
		Route::get('racha7day', ['as' => 'pages.racha7day', 'uses' => 'App\Http\Controllers\PageController@racha7day']);
		Route::get('racha30day', ['as' => 'pages.racha30day', 'uses' => 'App\Http\Controllers\PageController@racha30day']);
		Route::get('rachaSelectdate', ['as' => 'pages.rachaSelectdate', 'uses' => 'App\Http\Controllers\PageController@rachaSelectdate']);

		Route::get('racha30Toasc', ['as' => 'pages.racha30Toasc', 'uses' => 'App\Http\Controllers\PageController@racha30Toasc']);
		Route::get('racha30Todes', ['as' => 'pages.racha30Todes', 'uses' => 'App\Http\Controllers\PageController@racha30Todes']);
		Route::get('racha30yWinasc', ['as' => 'pages.racha30Winasc', 'uses' => 'App\Http\Controllers\PageController@racha30Winasc']);
		Route::get('racha30Windes', ['as' => 'pages.racha30Windes', 'uses' => 'App\Http\Controllers\PageController@racha30Windes']);
		Route::get('racha30Lossasc', ['as' => 'pages.racha30Lossasc', 'uses' => 'App\Http\Controllers\PageController@racha30Lossasc']);
		Route::get('racha30Lossdes', ['as' => 'pages.racha30Lossdes', 'uses' => 'App\Http\Controllers\PageController@racha30Lossdes']);
		Route::get('racha30Ttasc', ['as' => 'pages.racha30Ttasc', 'uses' => 'App\Http\Controllers\PageController@racha30Ttasc']);
		Route::get('racha30Ttdes', ['as' => 'pages.racha30Ttdes', 'uses' => 'App\Http\Controllers\PageController@racha30Ttdes']);

		
		Route::get('racha7Toasc', ['as' => 'pages.racha7Toasc', 'uses' => 'App\Http\Controllers\PageController@racha7Toasc']);
		Route::get('racha7Todes', ['as' => 'pages.racha7Todes', 'uses' => 'App\Http\Controllers\PageController@racha7Todes']);
		Route::get('racha7yWinasc', ['as' => 'pages.racha7Winasc', 'uses' => 'App\Http\Controllers\PageController@racha7Winasc']);
		Route::get('racha7Windes', ['as' => 'pages.racha7Windes', 'uses' => 'App\Http\Controllers\PageController@racha7Windes']);
		Route::get('racha7Lossasc', ['as' => 'pages.racha7Lossasc', 'uses' => 'App\Http\Controllers\PageController@racha7Lossasc']);
		Route::get('racha7Lossdes', ['as' => 'pages.racha7Lossdes', 'uses' => 'App\Http\Controllers\PageController@racha7Lossdes']);
		Route::get('racha7Ttasc', ['as' => 'pages.racha7Ttasc', 'uses' => 'App\Http\Controllers\PageController@racha7Ttasc']);
		Route::get('racha7Ttdes', ['as' => 'pages.racha7Ttdes', 'uses' => 'App\Http\Controllers\PageController@racha7Ttdes']);

		
		Route::get('racha1Toasc', ['as' => 'pages.racha1Toasc', 'uses' => 'App\Http\Controllers\PageController@racha1Toasc']);
		Route::get('racha1Todes', ['as' => 'pages.racha1Todes', 'uses' => 'App\Http\Controllers\PageController@racha1Todes']);
		Route::get('racha1yWinasc', ['as' => 'pages.racha1Winasc', 'uses' => 'App\Http\Controllers\PageController@racha1Winasc']);
		Route::get('racha1Windes', ['as' => 'pages.racha1Windes', 'uses' => 'App\Http\Controllers\PageController@racha1Windes']);
		Route::get('racha1Lossasc', ['as' => 'pages.racha1Lossasc', 'uses' => 'App\Http\Controllers\PageController@racha1Lossasc']);
		Route::get('racha1Lossdes', ['as' => 'pages.racha1Lossdes', 'uses' => 'App\Http\Controllers\PageController@racha1Lossdes']);
		Route::get('racha1Ttasc', ['as' => 'pages.racha1Ttasc', 'uses' => 'App\Http\Controllers\PageController@racha1Ttasc']);
		Route::get('racha1Ttdes', ['as' => 'pages.racha1Ttdes', 'uses' => 'App\Http\Controllers\PageController@racha1Ttdes']);



		Route::get('racha0Toasc', ['as' => 'pages.racha0Toasc', 'uses' => 'App\Http\Controllers\PageController@racha0Toasc']);
		Route::get('racha0Todes', ['as' => 'pages.racha0Todes', 'uses' => 'App\Http\Controllers\PageController@racha0Todes']);
		Route::get('racha0yWinasc', ['as' => 'pages.racha0Winasc', 'uses' => 'App\Http\Controllers\PageController@racha0Winasc']);
		Route::get('racha0Windes', ['as' => 'pages.racha0Windes', 'uses' => 'App\Http\Controllers\PageController@racha0Windes']);
		Route::get('racha0Lossasc', ['as' => 'pages.racha0Lossasc', 'uses' => 'App\Http\Controllers\PageController@racha0Lossasc']);
		Route::get('racha0Lossdes', ['as' => 'pages.racha0Lossdes', 'uses' => 'App\Http\Controllers\PageController@racha0Lossdes']);
		Route::get('racha0Ttasc', ['as' => 'pages.racha0Ttasc', 'uses' => 'App\Http\Controllers\PageController@racha0Ttasc']);
		Route::get('racha0Ttdes', ['as' => 'pages.racha0Ttdes', 'uses' => 'App\Http\Controllers\PageController@racha0Ttdes']);



		Route::get('rachaSelectToasc', ['as' => 'pages.rachaSelectToasc', 'uses' => 'App\Http\Controllers\PageController@rachaSelectToasc']);
		Route::get('rachaSelectTodes', ['as' => 'pages.rachaSelectTodes', 'uses' => 'App\Http\Controllers\PageController@rachaSelectTodes']);
		Route::get('rachaSelectWinasc', ['as' => 'pages.rachaSelectWinasc', 'uses' => 'App\Http\Controllers\PageController@rachaSelectWinasc']);
		Route::get('rachaSelectWindes', ['as' => 'pages.rachaSelectWindes', 'uses' => 'App\Http\Controllers\PageController@rachaSelectWindes']);
		Route::get('rachaSelectLossasc', ['as' => 'pages.rachaSelectLossasc', 'uses' => 'App\Http\Controllers\PageController@rachaSelectLossasc']);
		Route::get('rachaSelectLossdes', ['as' => 'pages.rachaSelectLossdes', 'uses' => 'App\Http\Controllers\PageController@rachaSelectLossdes']);
		Route::get('rachaSelectTtasc', ['as' => 'pages.rachaSelectTtasc', 'uses' => 'App\Http\Controllers\PageController@rachaSelectTtasc']);
		Route::get('rachaSelectTtdes', ['as' => 'pages.rachaSelectTtdes', 'uses' => 'App\Http\Controllers\PageController@rachaSelectTtdes']);


		Route::get('amb30Toasc', ['as' => 'pages.amb30Toasc', 'uses' => 'App\Http\Controllers\PageController@amb30Toasc']);
		Route::get('amb30Todes', ['as' => 'pages.amb30Todes', 'uses' => 'App\Http\Controllers\PageController@amb30Todes']);
		Route::get('amb30Winasc', ['as' => 'pages.amb30Winasc', 'uses' => 'App\Http\Controllers\PageController@amb30Winasc']);
		Route::get('amb30Windes', ['as' => 'pages.amb30Windes', 'uses' => 'App\Http\Controllers\PageController@amb30Windes']);
		Route::get('amb30Lossasc', ['as' => 'pages.amb30Lossasc', 'uses' => 'App\Http\Controllers\PageController@amb30Lossasc']);
		Route::get('amb30Lossdes', ['as' => 'pages.amb30Lossdes', 'uses' => 'App\Http\Controllers\PageController@amb30Lossdes']);
		Route::get('amb30Ttasc', ['as' => 'pages.amb30Ttasc', 'uses' => 'App\Http\Controllers\PageController@amb30Ttasc']);
		Route::get('amb30Ttdes', ['as' => 'pages.amb30Ttdes', 'uses' => 'App\Http\Controllers\PageController@amb30Ttdes']);


		Route::get('amb7Toasc', ['as' => 'pages.amb7Toasc', 'uses' => 'App\Http\Controllers\PageController@amb7Toasc']);
		Route::get('amb7Todes', ['as' => 'pages.amb7Todes', 'uses' => 'App\Http\Controllers\PageController@amb7Todes']);
		Route::get('amb7Winasc', ['as' => 'pages.amb7Winasc', 'uses' => 'App\Http\Controllers\PageController@amb7Winasc']);
		Route::get('amb7Windes', ['as' => 'pages.amb7Windes', 'uses' => 'App\Http\Controllers\PageController@amb7Windes']);
		Route::get('amb7Lossasc', ['as' => 'pages.amb7Lossasc', 'uses' => 'App\Http\Controllers\PageController@amb7Lossasc']);
		Route::get('amb7Lossdes', ['as' => 'pages.amb7Lossdes', 'uses' => 'App\Http\Controllers\PageController@amb7Lossdes']);
		Route::get('amb7Ttasc', ['as' => 'pages.amb7Ttasc', 'uses' => 'App\Http\Controllers\PageController@amb7Ttasc']);
		Route::get('amb7Ttdes', ['as' => 'pages.amb7Ttdes', 'uses' => 'App\Http\Controllers\PageController@amb7Ttdes']);


		Route::get('amb1Toasc', ['as' => 'pages.amb1Toasc', 'uses' => 'App\Http\Controllers\PageController@amb1Toasc']);
		Route::get('amb1Todes', ['as' => 'pages.amb1Todes', 'uses' => 'App\Http\Controllers\PageController@amb1Todes']);
		Route::get('amb1Winasc', ['as' => 'pages.amb1Winasc', 'uses' => 'App\Http\Controllers\PageController@amb1Winasc']);
		Route::get('amb1Windes', ['as' => 'pages.amb1Windes', 'uses' => 'App\Http\Controllers\PageController@amb1Windes']);
		Route::get('amb1Lossasc', ['as' => 'pages.amb1Lossasc', 'uses' => 'App\Http\Controllers\PageController@amb1Lossasc']);
		Route::get('amb1Lossdes', ['as' => 'pages.amb1Lossdes', 'uses' => 'App\Http\Controllers\PageController@amb1Lossdes']);
		Route::get('amb1Ttasc', ['as' => 'pages.amb1Ttasc', 'uses' => 'App\Http\Controllers\PageController@amb1Ttasc']);
		Route::get('amb1Ttdes', ['as' => 'pages.amb1Ttdes', 'uses' => 'App\Http\Controllers\PageController@amb1Ttdes']);


		
		Route::get('amb1Toasc', ['as' => 'pages.amb1Toasc', 'uses' => 'App\Http\Controllers\PageController@amb1Toasc']);
		Route::get('amb1Todes', ['as' => 'pages.amb1Todes', 'uses' => 'App\Http\Controllers\PageController@amb1Todes']);
		Route::get('amb1Winasc', ['as' => 'pages.amb1Winasc', 'uses' => 'App\Http\Controllers\PageController@amb1Winasc']);
		Route::get('amb1Windes', ['as' => 'pages.amb1Windes', 'uses' => 'App\Http\Controllers\PageController@amb1Windes']);
		Route::get('amb1Lossasc', ['as' => 'pages.amb1Lossasc', 'uses' => 'App\Http\Controllers\PageController@amb1Lossasc']);
		Route::get('amb1Lossdes', ['as' => 'pages.amb1Lossdes', 'uses' => 'App\Http\Controllers\PageController@amb1Lossdes']);
		Route::get('amb1Ttasc', ['as' => 'pages.amb1Ttasc', 'uses' => 'App\Http\Controllers\PageController@amb1Ttasc']);
		Route::get('amb1Ttdes', ['as' => 'pages.amb1Ttdes', 'uses' => 'App\Http\Controllers\PageController@amb1Ttdes']);

		
		
		Route::get('amb0Toasc', ['as' => 'pages.amb0Toasc', 'uses' => 'App\Http\Controllers\PageController@amb0Toasc']);
		Route::get('amb0Todes', ['as' => 'pages.amb0Todes', 'uses' => 'App\Http\Controllers\PageController@amb0Todes']);
		Route::get('amb0Winasc', ['as' => 'pages.amb0Winasc', 'uses' => 'App\Http\Controllers\PageController@amb0Winasc']);
		Route::get('amb0Windes', ['as' => 'pages.amb0Windes', 'uses' => 'App\Http\Controllers\PageController@amb0Windes']);
		Route::get('amb0Lossasc', ['as' => 'pages.amb0Lossasc', 'uses' => 'App\Http\Controllers\PageController@amb0Lossasc']);
		Route::get('amb0Lossdes', ['as' => 'pages.amb0Lossdes', 'uses' => 'App\Http\Controllers\PageController@amb0Lossdes']);
		Route::get('amb0Ttasc', ['as' => 'pages.amb0Ttasc', 'uses' => 'App\Http\Controllers\PageController@amb0Ttasc']);
		Route::get('amb0Ttdes', ['as' => 'pages.amb0Ttdes', 'uses' => 'App\Http\Controllers\PageController@amb0Ttdes']);
		
		Route::get('ambSelectToasc', ['as' => 'pages.ambSelectToasc', 'uses' => 'App\Http\Controllers\PageController@ambSelectToasc']);
		Route::get('ambSelectTodes', ['as' => 'pages.ambSelectTodes', 'uses' => 'App\Http\Controllers\PageController@ambSelectTodes']);
		Route::get('ambSelectWinasc', ['as' => 'pages.ambSelectWinasc', 'uses' => 'App\Http\Controllers\PageController@ambSelectWinasc']);
		Route::get('ambSelectWindes', ['as' => 'pages.ambSelectWindes', 'uses' => 'App\Http\Controllers\PageController@ambSelectWindes']);
		Route::get('ambSelectLossasc', ['as' => 'pages.ambSelectLossasc', 'uses' => 'App\Http\Controllers\PageController@ambSelectLossasc']);
		Route::get('ambSelectLossdes', ['as' => 'pages.ambSelectLossdes', 'uses' => 'App\Http\Controllers\PageController@ambSelectLossdes']);
		Route::get('ambSelectTtasc', ['as' => 'pages.ambSelectTtasc', 'uses' => 'App\Http\Controllers\PageController@ambSelectTtasc']);
		Route::get('ambSelectTtdes', ['as' => 'pages.ambSelectTtdes', 'uses' => 'App\Http\Controllers\PageController@ambSelectTtdes']);
});	

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});


