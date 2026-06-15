<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/up', function () {
    return response('OK', 200);
});

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

// Route for admin (Back-end) pannel
Route::any('/admin/index',[UserController::class,'index_admin']);
Route::any('/admin/dashboard',[UserController::class,'dashboard'])->middleware('login_chk');

Route::any('/admin/add-events',[UserController::class,'add_events'])->middleware('login_chk');
Route::any('/admin/view-events',[UserController::class,'view_events'])->middleware('login_chk');
Route::any('/admin/view-events/{id}',[UserController::class,'delete_events'])->middleware('login_chk');
Route::any('/admin/edit-events/{id}',[UserController::class,'edit_events'])->middleware('login_chk');
Route::post('/admin/edit-events/{id}',[UserController::class,'submit_edit_event'])->middleware('login_chk');

Route::any('/admin/add-client',[UserController::class,'add_client'])->middleware('login_chk');
Route::any('/admin/view-client',[UserController::class,'view_client'])->middleware('login_chk');
Route::any('/admin/view-client/{id}',[UserController::class,'delete_client'])->middleware('login_chk');
Route::any('/admin/edit-client/{id}',[UserController::class,'edit_client'])->middleware('login_chk');
Route::post('/admin/edit-client/{id}',[UserController::class,'submit_edit_client'])->middleware('login_chk');

Route::any('/admin/add-gallery',[UserController::class,'add_blog'])->middleware('login_chk');
Route::any('/admin/view-gallery',[UserController::class,'view_blog'])->middleware('login_chk');
Route::any('/admin/view-gallery/{id}',[UserController::class,'delete_blog'])->middleware('login_chk');
Route::any('/admin/edit-gallery/{id}',[UserController::class,'edit_blog'])->middleware('login_chk');
Route::post('/admin/edit-gallery/{id}',[UserController::class,'submit_edit_blog'])->middleware('login_chk');

Route::any('/admin/add-thought',[UserController::class,'add_thought'])->middleware('login_chk');
Route::any('/admin/view-thought',[UserController::class,'view_thought'])->middleware('login_chk');
Route::any('/admin/view-thought/{id}',[UserController::class,'delete_thought'])->middleware('login_chk');
Route::any('/admin/edit-thought/{id}',[UserController::class,'edit_thought'])->middleware('login_chk');
Route::post('/admin/edit-thought/{id}',[UserController::class,'submit_edit_thought'])->middleware('login_chk');


Route::any('/admin/add-photos',[UserController::class,'add_photos'])->middleware('login_chk');
Route::any('/admin/view-photos',[UserController::class,'view_photos'])->middleware('login_chk');
Route::any('/admin/view-photos/{id}',[UserController::class,'delete_photos'])->middleware('login_chk');
Route::any('/admin/edit-photos/{id}',[UserController::class,'edit_photos'])->middleware('login_chk');
Route::post('/admin/edit-photos/{id}',[UserController::class,'submit_edit_photos'])->middleware('login_chk');

Route::any('/admin/view-contacts',[UserController::class,'view_contacts'])->middleware('login_chk');

Route::any('/admin/log-out',[UserController::class,'logout_admin']);


// Route for fround-end pannel
Route::any('/',[UserController::class,'index']);
Route::redirect('/services', '/events');
Route::any('/events',[UserController::class,'events']);
Route::any('/clients',[UserController::class,'clients']);
Route::any('/about',[UserController::class,'about']);
Route::any('/gallery',[UserController::class,'blog']);

Route::any('/gallery-single',[UserController::class,'blog_single']);
Route::any('/gallery-single/{id}',[UserController::class,'blog_single_id']);
Route::post('/gallery-single',[UserController::class,'blog_single']);
Route::post('/gallery-single/{id}',[UserController::class,'blog_single_id']);

Route::get('/delete/{id}/{d_id}',[UserController::class,'blog_comment_dlt']);
Route::any('/work-3columns',[UserController::class,'photos']);
Route::any('/contact',[UserController::class,'contact']);