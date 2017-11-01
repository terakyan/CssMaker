<?php
/**
 * Copyright (c) 2017. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * Morbi non lorem porttitor neque feugiat blandit. Ut vitae ipsum eget quam lacinia accumsan.
 * Etiam sed turpis ac ipsum condimentum fringilla. Maecenas magna.
 * Proin dapibus sapien vel ante. Aliquam erat volutpat. Pellentesque sagittis ligula eget metus.
 * Vestibulum commodo. Ut rhoncus gravida arcu.
 */

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



//Routes
Route::get('/', 'IndexConroller@getIndex');
Route::get('/css-maker', 'IndexConroller@getCssMaker');
//Route::get('/new-post', 'IndexConroller@getNewPost');
//Route::post('/new-post', 'IndexConroller@postNewPost');
//Route::get('/settings', 'IndexConroller@getSettings');
//Route::group(['prefix'=>'form-bulder'],function (){
//    Route::get('/', 'IndexConroller@getFormBulder');
//    Route::post('/form-fields', 'IndexConroller@postFormFieldsSettings');
//});
//Route::post('/settings', 'IndexConroller@postSettings');
//Route::post('/render-unit', 'IndexConroller@unitRenderWithFields');