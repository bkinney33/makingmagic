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
Route::get('/', [
    'uses'=> 'CustomCardController@getIndex',
    'as'=> 'MainPages.index'
]
);


Route::group(['prefix' => 'Cards'], function() {
  Route::get('create',[
    'uses'=> 'CustomCardController@getCreateCard',
    'as'=>'Cards.create'
  ]);
  Route::get('edit/{id}',[
    'uses'=> 'CustomCardController@getEditCard',
    'as'=>'Cards.create'
  ]);
  Route::post('create', [
          'uses' => 'CustomCardController@postCreateCard',
          'as' => 'Cards.create'
      ]);
  Route::get('displaycard',[
    'uses'=>'CustomCardController@getDisplayCard',
    'as'=> 'Cards.displaycard'
  ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
