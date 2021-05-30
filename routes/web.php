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

Auth::routes();
Route::get('verify/resend', 'Auth\TwoFactorController@resend')->name('verify.resend');
Route::get('account','Auth\TwoFactorController@account')->name('account')->middleware('auth');
Route::put('account/{user:id}','Auth\TwoFactorController@updateAccount')->name('account.update')->middleware('auth');
Route::resource('verify', 'Auth\TwoFactorController')->only(['index', 'store'])->middleware(['auth', 'twofactor']);
Route::view('/crypto-ico-landing','crypto-ico-landing')->name('crypto-ico-landing');
Route::view('/token-presale','token-presale')->name('token-presale');
Route::group(['namespace' => 'Admin', 'as' => 'admin.', 'middleware' => ['auth','twofactor']], static function () {
    Route::get('/', 'HomeController@root')->name('home');
//    Permission
    Route::get('permission', 'PermissionController@index')->name('permission');
    Route::any('/permission/form/{form}', 'PermissionController@form');
    Route::any('/permission/form/{form}/{id}', 'PermissionController@form');
    Route::get('/permission/view/{id}', 'PermissionController@view');
    Route::delete('/permission/destroy/{id}', 'PermissionController@destroy');
    Route::post('/permission/delete_all', 'PermissionController@delete_all')->name('permission.delete_all');

//    Role
    Route::get('role', 'RoleController@index')->name('role');
    Route::get('role/create', 'RoleController@create')->name('role.create');
    Route::post('role/store', 'RoleController@store')->name('role.store');
    Route::get('role/duplicate/{role:id}', 'RoleController@duplicate')->name('role.duplicate');
    Route::get('role/edit/{role:id}', 'RoleController@edit')->name('role.edit');
    Route::put('role/update/{role:id}', 'RoleController@update')->name('role.update');
    Route::get('/role/view/{id}', 'RoleController@view');
    Route::delete('/role/destroy/{id}', 'RoleController@destroy');
    Route::post('/role/delete_all', 'RoleController@delete_all')->name('role.delete_all');
    Route::get('/role/switch','RoleController@switch')->name('role.switch');

//    Users
    Route::resource('user','UserController');
    Route::post('user/delete_all', 'UserController@delete_all')->name('user.delete_all');
    Route::delete('/user/destroy/{id}', 'UserController@destroy');
    Route::get('/user/{user:id}', 'UserController@profileEdit')->name('user.profile');
    
    // Bank
    Route::get('crypto-wallet','BankController@index')->name('crypto-wallet');
    Route::post('crypto-wallet/deposit','BankController@deposit')->name('deposit');

    // Video
    Route::get('videos','VideoController@myVideo')->name('videos');
    Route::get('upload-video','VideoController@create')->name('upload-video');
    Route::post('upload','VideoController@upload')->name('upload');
    Route::get('/socialmedia','VideoController@socialMedia')->name('social-media');
    Route::post('promotesong','VideoController@promoteSong')->name('promotesong');
    Route::post('valyousong','VideoController@valyouSong')->name('valyousong');
    
    Route::get('/{any}', 'HomeController@index');
});

Route::group(['prefix' => 'artist','namespace' => 'Artist', 'as' => 'artist.', 'middleware' => ['auth','twofactor']], static function () {
    //    Artists
    Route::resource('artist','ArtistController');
    Route::get('show/{artist:id}', 'ArtistController@show');
    Route::post('artist/delete_all', 'ArtistController@delete_all')->name('artist.delete_all');
    Route::delete('/artist/destroy/{id}', 'ArtistController@destroy');
});

Route::group(['prefix' => 'business','namespace' => 'Business', 'as' => 'business.', 'middleware' => ['auth','twofactor']], static function () {
    //    Businessess
    Route::resource('business','BusinessController');
    Route::get('show/{business:id}', 'BusinessController@show');
    Route::post('business/delete_all', 'BusinessController@delete_all')->name('business.delete_all');
});

Route::get('pages-login', 'SkoteController@index');
Route::get('pages-login-2', 'SkoteController@index');
Route::get('pages-register', 'SkoteController@index');
Route::get('pages-register-2', 'SkoteController@index');
Route::get('pages-recoverpw', 'SkoteController@index');
Route::get('pages-recoverpw-2', 'SkoteController@index');
Route::get('pages-lock-screen', 'SkoteController@index');
Route::get('pages-lock-screen-2', 'SkoteController@index');
Route::get('pages-404', 'SkoteController@index');
Route::get('pages-500', 'SkoteController@index');
Route::get('pages-maintenance', 'SkoteController@index');
Route::get('pages-comingsoon', 'SkoteController@index');

Route::post('keep-live', 'SkoteController@live');
Route::get('index/{locale}', 'LocaleController@lang');

Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');

Route::post('/contacts-profile', 'UserController@updateProfile');


/////ARTIST
Route::view('/upload-artist', 'upload-artist')->name('upload-artist');
Route::view('/my-songs', 'my-songs')->name('my-songs');
Route::view('/my-videos', 'my-videos')->name('my-videos');
Route::view('/promote-music', 'promote-music')->name('promote-music');
// Route::view('/social-media', 'promote-music')->name('social-media');
Route::view('/artist-pricing', 'artist-pricing')->name('artist-pricing');
Route::view('/artist-profile', 'artist-profile')->name('artist-profile');
Route::view('/followers', 'followers')->name('followers');
Route::view('/revenue-streams', 'revenue-streams')->name('revenue-streams');
