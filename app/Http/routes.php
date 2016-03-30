<?php

use brigis\Municipality;

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
    Route::get('/', 'HomeController@index');
    Route::resource('users', 'UserController');
    Route::resource('admins', 'AdminController');
    Route::resource('provinces', 'ProvinceController');
   // Route::get('municipalities/remove', 'MunicipalityController@remove');
    Route::delete('/municipalities/remove/{province_id}/{municipality_id}',[
    'as' => 'municipalities.remove',
    'uses' => 'MunicipalityController@remove'
    ]);
    Route::resource('municipalities', 'MunicipalityController');
	Route::resource('barangays', 'BarangayController');
	Route::resource('households', 'HouseholdController');
	Route::resource('maps', 'MapController');    


 
Route::get('/information',['as'=>'information', function()
{
    $output = Municipality::all();
    return $output;
}]);      

});



