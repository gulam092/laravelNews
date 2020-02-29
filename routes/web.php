<?php
Route::get('/','FrontPanel@index');
Route::get('/category/{cid}/{cn?}','FrontPanel@category');
Route::get('/details-news/{nid}','FrontPanel@detailsPage');
Route::get('/contact','FrontPanel@Contactus');
Route::get('/about','FrontPanel@Aboutus');
Route::get('/lifestyle','FrontPanel@MyLifestyle');
Route::get('/features','FrontPanel@featuresNews');
Route::get('/fashion','FrontPanel@fashionblog');
Route::get('/photography','FrontPanel@photographyblog');
Route::post('/FrontPanel/addcontact/','FrontPanel@addcontactMessage');
Route::get('/comment/{id}','FrontPanel@comment');
Route::post('/commentsubmitted','FrontPanel@commentsubmitted');

Route::get('/commentsection','FrontPanel@commentsection');
Route::get('/search','FrontPanel@search');
Route::get('/books','FrontPanel@books');
Route::get('/addcart',"FrontPanel@addcart");
Route::get('/getcartdetails',"FrontPanel@getcartdetails");
Route::get('/cartdetails','FrontPanel@cartdetails');

Route::get('/decrease_cart_item/{item_id}/{quantity}',"FrontPanel@Decrease_Item_In_Cart");

Route::get('/Increase_cart_item/{item_id}/{quantity}',"FrontPanel@Increase_Item_In_Cart");
Route::get('/delcart/{id}','FrontPanel@delcart');

Route::get('/admin','AdminPanel@login');
Route::post('/admin/postlogin',"AdminPanel@postlogin");
Route::get('/admin/dashboard','AdminPanel@dashboard');

Route::get('/admin/category','AdminPanel@category');
Route::get('/admin/delcat/{did}/{dimg}','AdminPanel@deletecategory');
Route::get('/admin/editcat/{catid}','AdminPanel@editcategory');
Route::get('/admin/addCategory',"AdminPanel@addcategory");
Route::post('/admin/postaddcategory',"AdminPanel@postaddcategory");
Route::post('/admin/postupdatecategory','AdminPanel@postupdatecategory');

Route::get('/admin/news','AdminPanel@news');
Route::get('/admin/addNews','AdminPanel@addNews');
Route::get('/admin/delnews/{nId}','AdminPanel@deletenews');
Route::post('/admin/postaddnews','AdminPanel@postaddnews');
Route::get('/admin/editnews/{id}/{cid}','AdminPanel@editnews');
Route::post('/admin/postupdatenews','AdminPanel@postupdatenews');

Route::get('/admin/books','AdminPanel@books');
Route::get('/admin/addbooks','AdminPanel@addbooks');
Route::post('/admin/postaddbook','AdminPanel@postaddbook');
Route::get('/admin/delbook/{bid}/{bimg}','AdminPanel@deletebook');
Route::get('/admin/editbook/{id}','AdminPanel@editbook');
Route::post('/admin/postupdatebook','AdminPanel@postupdatebook');

Route::get('/admin/contact','AdminPanel@contact');
Route::get('/admin/deletecontact/{id}','AdminPanel@deletecontact');

Route::get('/admin/logout','AdminPanel@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
