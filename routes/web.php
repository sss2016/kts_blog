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


Route::group(['namespace' => 'Admin','prefix'=>'admin'], function(){
    // 控制器在 "App\Http\Controllers\Admin" 命名空间下
	Route::get('/', function () {
    	return view('admin.index');
	});
	Route::get('/main', function () {
    	return view('admin.main');
	});
	Route::get('/datalist', function () {
    	return view('admin.datalist');
	});
	Route::get('/publish', function () {
    	return view('admin.publish');
	});
	Route::post('/submit',"ArticleController@writeData");
	
});
Route::get('/NotFont',function(){
	return view('Front.404');
});
Route::group(['namespace' => 'Front'], function(){
    // 控制器在 "App\Http\Controllers\Front" 命名空间下
	Route::get('/', "IndexController@indexShow");
	Route::get('/detail/{article_id?}',"IndexController@detailShow");
	Route::post('/loadData',"IndexController@loadData");
	Route::post('/sendComment',"IndexController@sendComment");
	

});