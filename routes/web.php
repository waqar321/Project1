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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('test', "HomeController@index");

		Route::match(['get', 'post'],'client', 'client_controller@login');
		Route::match(['get', 'post'],'home', 'client_controller@homePage');
		Route::match(['get', 'post'],'register_client', 'client_controller@register');
		Route::match(['get', 'post'],'Add_new_form', 'client_controller@Add_new_form');
		

		Route::match(['get', 'post'],'logouting', 'HomeController@Logoutpage');
		Route::match(['get', 'post'],'admin', 'adminContorller@login');
		Route::match(['get', 'post'],'admin/settings', 'adminContorller@settings');
		Route::match(['get', 'post'],'admin/update-pwd', 'adminContorller@UpdatePassword');
		Route::get('logout', 'adminContorller@logout');	

		//customer
		Route::match(['get', 'post'],'admin/View-Records', 'adminContorller@View_Records');
		Route::match(['get', 'post'],'admin/edit-customer-Records/{id}', 'adminContorller@edit_customer_Records');
		Route::match(['get', 'post'],'admin/delete-customer-Records/{id}', 'adminContorller@delete_customer_Records');
		Route::match(['get', 'post'],'admin/View-full-Records/{id}', 'adminContorller@View_full_Records');
		Route::match(['get', 'post'],'admin/Search-Records', 'adminContorller@Search_Records');
		Route::match(['get', 'post'],'admin/view-search-Records', 'adminContorller@Search_Records');


Route::group(['middleware'=>['auth']], function(){

		// Route::match(['get', 'post'],'admin', 'HomeController@login');
		Route::match(['get', 'post'],'Chayell_homepage', 'HomeController@Chayell_homepage');
		// Route::match(['get', 'post'],'Add_new_form', 'HomeController@Add_new_form');
		Route::match(['get', 'post'],'HomePage', 'HomeController@HomePage');
		Route::match(['get', 'post'],'login_work', 'HomeController@login');
		Route::get('admin/dashboard', 'adminContorller@dashboard');
		
		// Route::get('/home', 'HomeController@index')->name('home');

});	


// Route::match(['get', 'post'],'PassRest', 'HomeController@PassReset');





Auth::routes();

