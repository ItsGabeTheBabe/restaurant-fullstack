<?php

use App\GeneralSetting;
use App\SocialSetting;
use App\SeoSetting;

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
//Satic Pages
Route::get('/', 'StaticPagesController@home');
Route::get('/menu', 'StaticPagesController@menu');
Route::get('/menu/{slug}', 'StaticPagesController@singleMenu');
Route::get('/about', 'StaticPagesController@about');
Route::get('/reservations', 'StaticPagesController@reservations');
Route::post('/reservations', 'StaticPagesController@saveReservation');
Route::get('/reservations/thank-you', 'StaticPagesController@thankYou');
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/offers', 'StaticPagesController@offers');
Route::post('/offers', 'StaticPagesController@registerMember');
Route::get('/offers/thank-you', 'StaticPagesController@thankYou');

//admin dashboard
Route::get('/admin', 'admin\AdminController@dashboard');

//admin food categories
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index')
    ->middleware("role:Admin");
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create')
    ->middleware("role:Admin");
Route::post('/admin/food-categories', 'admin\FoodCategoriesController@store')
    ->middleware("role:Admin");
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit')
    ->middleware("role:Admin");
Route::put('/admin/food-categories/{id}', 'admin\FoodCategoriesController@update');
Route::get('/admin/food-categories/{id}/delete', 'admin\FoodCategoriesController@delete')
    ->middleware("role:Admin");

//admin food items
Route::get('/admin/food-items', 'admin\FoodItemsController@index')
    ->middleware("role:Admin");
Route::get('/admin/food-items/create', 'admin\FoodItemsController@create')
    ->middleware("role:Admin");
Route::post('/admin/food-items', 'admin\FoodItemsController@store')
    ->middleware("role:Admin");
Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit')
    ->middleware("role:Admin");
Route::put('/admin/food-items/{id}', 'admin\FoodItemsController@update');
Route::get('/admin/food-items/{id}/delete', 'admin\FoodItemsController@delete')
    ->middleware("role:Admin");

//admin Users
Route::get('/admin/users', 'admin\UsersController@index')
    ->middleware("role:Admin");
Route::get('/admin/users/create', 'admin\UsersController@create')
    ->middleware("role:Admin");
Route::post('/admin/users', 'admin\UsersController@store')
    ->middleware("role:Admin");
Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit')
    ->middleware("role:Admin");
Route::put('/admin/users/{id}', 'admin\UsersController@update');
Route::put('/admin/users/{id}', 'admin\UsersController@update');
Route::get('/admin/users/{id}/delete', 'admin\UsersController@delete')
    ->middleware("role:Admin");

//admin customers
//admin members
Route::get('/admin/members', 'admin\MemberController@index');
Route::get('/admin/members/{id}/delete', 'admin\MemberController@delete');
//admin reservations
Route::get('/admin/reservations', 'admin\ReservationController@index');
Route::get('/admin/reservations/{id}/delete', 'admin\ReservationController@delete');
//admin settings
Route::get('/admin/settings/general', 'admin\SettingController@general')
    ->middleware("role:Admin");
Route::put('/admin/settings/general', 'admin\SettingController@savegeneral');
Route::get('/admin/settings/seo', 'admin\SettingController@seo')
    ->middleware("role:Admin");
Route::put('/admin/settings/seo', 'admin\SettingController@saveseo');
Route::get('/admin/settings/social', 'admin\SettingController@social')
    ->middleware("role:Admin");
Route::put('/admin/settings/social', 'admin\SettingController@savesocial');


//admin authentication
Route::get('/admin/register', function () {
    return view('admin/register');
});
Route::get('/admin/login', function () {
    return view('admin/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

View::composer([
    'home', 'pages/about', 'pages/contact',
    'pages/offers', 'pages/reservations', 'thank-you',
    'menu/index', 'menu/single-menu'
], function ($view) {
    $generalSettings = GeneralSetting::find(1);
    $socialSettings = SocialSetting::find(1);
    $seoSettings = SeoSetting::find(1);

    $view->with('settings', [
        "general" => $generalSettings,
        "social" => $socialSettings,
        "seo" => $seoSettings,
    ]);
});
