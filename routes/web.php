<?php

use Illuminate\Support\Facades\Route;
define('paginate',15);
Route::pattern('id','[0-9+]');

Route::group(['middleware'=>'Admin','prefix'=>'admin','namespace'=>'BackEnd'],function (){

    Route::get('home','HomePageAdminController')->name('dashboard.home');
    Route::get('all-doctors','DoctorController')->name('show-all-doctors');
    Route::get('add/new/doctor','DoctorController@addNewDoctorForm')->name('add-doctor-form');
    Route::post('add/new/doctor','DoctorController@addNewDoctor')->name('add-doctor');
    Route::get('delete/doctor/{id}','DoctorController@deleteDoctor')->name('delete-doctor');
    Route::get('edit/doctor/{id}','DoctorController@editDoctor')->name('edit-doctor');
    Route::post('update/doctor/{id}','DoctorController@updateDoctor')->name('update-doctor');
    Route::get('all-departments','DepartmentController')->name('show-all-departments');
    Route::get('delete/department/{id}','DepartmentController@deleteDepartment')->name('delete-department');
    Route::get('edit/department/{id}','DepartmentController@editDepartment')->name('edit-department');
    Route::post('update/department/{id}','DepartmentController@updateDepartment')->name('update-department');
    Route::get('add/new/department','DepartmentController@addNewDepartmentForm')->name('add-department-form');
    Route::post('add/new/department','DepartmentController@addNewDepartment')->name('add-department');



});











/*['register'=>false] by define this route you can ignore route register */
Auth::routes();

Route::group(['namespace'=>'FrontEnd'],function (){

    Route::get('/','HomePageController')->name('site.home');
});



