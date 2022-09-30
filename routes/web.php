<?php

use App\Http\Controllers\categoriecontroller;
use App\Http\Controllers\chambrecontroller;
use App\Http\Controllers\departementcontroller;
use App\Http\Controllers\fonctionairecontroller;
use App\Http\Controllers\paymentcontroller;
use App\Http\Controllers\reservationcontroller;
use App\Http\Controllers\temoignagecontroller;
use App\Http\Controllers\usercontroller;
use App\Models\payment;
use App\Models\reservation;
use App\Models\temoignage;
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

	


Route::get('adminx', function () {
    return view('admin_base');
});

Route::get('template/home', function () {
    return view('proto.home_pag');
});

Route::get('template/ad', function () {
    return view('template');
});





//CATEGORIE
Route::get('categorie/create',[categoriecontroller::class,'create']);
Route::post('categorie/strore',[categoriecontroller::class,'store']);
Route::get('categorie/show',[categoriecontroller::class,'show_cat']);
Route::get('categorie/edit/{id}',[categoriecontroller::class,'edit']);
Route::post('categorie/update/{id}',[categoriecontroller::class,'update']);
Route::get('categorie/delete/{id}',[categoriecontroller::class,'destroy']);
Route::get('categorie/retore_cat',[categoriecontroller::class,'restore_cat']);

//CHAMBRES
Route::get('chambre/create',[chambrecontroller::class,'create']);
Route::post('chambre/store_ch',[chambrecontroller::class,'store_ch']);
Route::get('chambre/show',[chambrecontroller::class,'show_chb']);
Route::get('chambre/edit/{id}',[chambrecontroller::class,'edit_chr']);
Route::post('chambre/update/{id}',[chambrecontroller::class,'update_chr']);
Route::get('chambre/deleto/{id}',[chambrecontroller::class,'destroy_y']);
Route::get('chambre/delete_resto/{id}',[chambrecontroller::class,'delete_resto']);
Route::get('chambre/delete_gallery/{id}',[chambrecontroller::class,'delete_gallery']);
Route::get('chambre/delete_multiple',[chambrecontroller::class,'delete_multiple']);
Route::get('chambre/restora',[chambrecontroller::class,'restore_chambre']);

//TEMPLATE
Route::get('/',[reservationcontroller::class,'home_template']);
Route::post('template/disponibity/{date1}',[reservationcontroller::class,'dispo']);
Route::get('template/reservation',[reservationcontroller::class,'store']);
Route::get('template/description/{id}',[reservationcontroller::class,'show']);

//USER
Route::get('template/create_user',[usercontroller::class,'create_user']);
Route::post('template/store_user',[usercontroller::class,'store_userx']);
Route::get('template/create_for_login',[usercontroller::class,'create_for_login']);
Route::post('template/store_login',[usercontroller::class,'store_login']);
Route::get('template/deconnect_user',[usercontroller::class,'deconnect']);

//DEPARTEMENT
Route::get('template/dep_create',[departementcontroller::class,'create']);
Route::post('template/store_dep',[departementcontroller::class,'store']);

//FONCTIONNAIRE
Route::get('template/create_f',[fonctionairecontroller::class,'create']);
Route::post('template/add_functionnaire',[fonctionairecontroller::class,'store']);
Route::get('template/create_loging_f',[fonctionairecontroller::class,'create_login_f']);
Route::post('template/add_login_f',[fonctionairecontroller::class,'add_login_f']);
Route::get('template/show_list_f',[fonctionairecontroller::class,'show_f']);
Route::get('template/for_prime',[fonctionairecontroller::class,'create_prime']);
Route::post('template/updat_prime',[fonctionairecontroller::class,'update_prime']);
Route::get('template/pagamento/{id}',[fonctionairecontroller::class,'show']);
Route::post('template/add_pagamento',[paymentcontroller::class,'add_payment']);
Route::get('template/edito_fun/{id}',[paymentcontroller::class,'edit']);
Route::post('template/update/{id}',[paymentcontroller::class,'update_fu']);
Route::get('template/list_cli',[fonctionairecontroller::class,'list_cli']);

//PAGAMENTO

Route::get('template/list_pagamento/{id}',[paymentcontroller::class,'list_pagamento']);

//HOTEL
Route::get('template/hotel_list',[fonctionairecontroller::class,'hotel']);
Route::get('template/func_cat/{id}',[fonctionairecontroller::class,'fun_cat']);

//RECEPCIONISTE
Route::get('template/espax_recep',[fonctionairecontroller::class,'recept_espace']);
Route::get('list_reser_cli/{id}',[reservationcontroller::class,'list_reser_cli']);

//COMMENTAIRE
Route::get('template/base',[temoignagecontroller::class,'create']);
Route::post('template/add_comment',[temoignagecontroller::class,'add_com']);

//PDF
Route::get('template/pdf',[fonctionairecontroller::class,'pdf1']);

//ADMIN

Route::get('template/destroy_sess_func',[fonctionairecontroller::class,'destroy_sess']);

