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
define('PAGINATION_COUNT',10);
Route::group(['namespace'=>'Admin','middleware'=>'auth:admin'],function (){
    Route::get('/','DashboardController@index')->name('admin.dashboard');

    #################################Begin Language Route#######################################
    Route::group(['prefix' => 'languages'], function () {
        Route::get('/','LanguagesController@index')->name('admin.languages');
        Route::get('create','LanguagesController@create')->name('admin.languages.create');
        Route::post('store','LanguagesController@store')->name('admin.languages.store');
        Route::get('edit/{id}','LanguagesController@edit')->name('admin.languages.edit');
        Route::post('update/{id}','LanguagesController@update')->name('admin.languages.update');
        Route::get('delete/{id}','LanguagesController@destroy')->name('admin.languages.destroy');
    });
    #################################End Language Route#######################################

    #################################Begin Main Categories Route#######################################
    Route::group(['prefix' => 'main_categories'], function () {
        Route::get('/','MainCategoriesController@index')->name('admin.maincategories');
        Route::get('create','MainCategoriesController@create')->name('admin.maincategories.create');
        Route::post('store','MainCategoriesController@store')->name('admin.maincategories.store');
        Route::get('edit/{id}','MainCategoriesController@edit')->name('admin.maincategories.edit');
        Route::post('update/{id}','MainCategoriesController@update')->name('admin.maincategories.update');
        Route::get('delete/{id}','MainCategoriesController@destroy')->name('admin.maincategories.destroy');
        Route::get('changeStatus/{id}','MainCategoriesController@changeStatus')->name('admin.maincategories.status');
    });
    #################################End Main Categories Route#######################################

    #################################Begin Organizers Route#######################################
    Route::group(['prefix' => 'organisor'], function () {
        Route::get('/','OrganizersController@index')->name('admin.organisor');
        Route::get('create','OrganizersController@create')->name('admin.organisor.create');
        Route::post('store','OrganizersController@store')->name('admin.organisor.store');
        Route::get('edit/{id}','OrganizersController@edit')->name('admin.organisor.edit');
        Route::post('update/{id}','OrganizersController@update')->name('admin.organisor.update');
        Route::get('delete/{id}','OrganizersController@destroy')->name('admin.organisor.destroy');
        Route::get('changeStatus/{id}','OrganizersController@changeStatus')->name('admin.organisor.status');
    });
    #################################End Vendors Route#######################################

});




Route::group(['namespace'=>'Admin','middleware'=>'guest:admin'], function () {
    Route::get('login', 'LoginController@getLogin') ->name('get.admin.login');
    Route::post('login', 'LoginController@Login')->name('admin.login');
});
