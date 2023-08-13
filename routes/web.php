<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',['as'=>'/login','uses'=> 'AuthController@ShowFormLogin']);
Route::get('login',['as'=> 'login','uses'=>'AuthController@ShowFormLogin']);
Route::post('login', ['as'=>'login_post','uses'=>'AuthController@login'] );
Route::get('logout', ['as'=>'logout','uses'=>'AuthController@logout']);

Route::middleware(['auth'])->group(function () {

    Route::post('upload_img',['as'=>'upload_img','uses'=> 'MainController@upload_img']);
    Route::post('upload_doc',['as'=>'upload_doc','uses'=> 'MainController@upload_doc']);

    //Dashboard
    Route::get('dasbor',['as'=> 'dasbor','uses'=>'MainController@dasbor']);

    //Karyawan
    Route::get('inp_karyawan',['as'=> 'inp_karyawan','uses'=>'MainController@inp_karyawan']);
    Route::post('add_karyawan',['as'=> 'add_karyawan','uses'=>'MainController@add_karyawan']);
    Route::get('list_karyawan',['as'=> 'list_karyawan','uses'=>'MainController@list_karyawan']);
    Route::get('editprofile',['as'=> 'editprofile','uses'=>'MainController@editprofile']);

    //Nasabah
    Route::get('approve_nasabah',['as'=> 'approve_nasabah','uses'=>'MainController@approve_nasabah']);
    Route::get('actionapprove',['as'=> 'actionapprove','uses'=>'MainController@actionapprove']);
    Route::post('add_nasabah',['as'=> 'add_nasabah','uses'=>'MainController@add_nasabah']);
    Route::get('inp_nasabah',['as'=> 'inp_nasabah','uses'=>'MainController@inp_nasabah']);
    Route::get('list_nasabah',['as'=> 'list_nasabah','uses'=>'MainController@list_nasabah']);
    Route::get('detailnasabah',['as'=> 'detailnasabah','uses'=>'MainController@detailnasabah']);

    Route::post('edit',['as'=> 'edit','uses'=>'MainController@edit']);

});
