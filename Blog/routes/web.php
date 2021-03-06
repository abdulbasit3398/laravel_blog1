<?php


//User Routes

Route::group(['namespace' => 'User'],function(){

	Route::get('/','HomeController@index');
	Route::get('post/{post}','PostController@post')->name('post');
	Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
	Route::get('post/category/{category}','HomeController@category')->name('category');
});

//Admin Routes

Route::group(['namespace' => 'Admin'],function(){

	Route::get('admin/home','HomeController@index')->name('admin.home');

	//Users Routes
	Route::resource('admin/user','UserController');

	//Roles Routes
	Route::resource('admin/role','RoleController');

	//Post Routes
	Route::resource('admin/post','PostController');

	//Tag routes
	Route::resource('admin/tag','TagController');

	//Category routes
	Route::resource('admin/category','CategoryController');

	//Admin Auth routes
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login','Auth\LoginController@login');
	Route::post('admin.logout', 'Auth\LoginController@logout')->name('admin.logout');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
