<?php

use Illuminate\Support\Facades\Route;
use database\migrations;
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
    return view('welcome');
});
Route::get('/insert',function(){
DB::insert("insert into student(name,date_of_birth,GPA,advisor) values(?,?,?,?)",['Alikhan','2002-10-30','3.02','Kurmangazy Konratbayev']);
});
Route::get('/delete',function(){
	DB::delete("delete from student where id = ?",[1]);
});
Route::get('/update',function(){
	DB::update("update student SET name=?, date_of_birth=?,GPA=?,advisor=? where id=2",['Arman','2002-01-01','2.52','Arman Armanovich']);
});
