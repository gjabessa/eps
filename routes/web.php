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
use App\Message;

Route::post('/', 'HomeController@create');
Route::post('/backgrounds','HomeController@backgrounds');
Route::post('/backgrounds2','HomeController@backgrounds2');
Route::get('/post/{id}/delete','HomeController@delete');
Route::resource('post','HomeController');
Route::get('/', function () {
    $messages = Message::paginate(10);
    return view('welcome', [
        'messages'=>$messages
    ]);
    
});
Route::get('/detail/{id}', function ($id) {
    $message = Message::find($id);
    return view('detail', [
        'message'=>$message
    ]);
    
});
Route::get('/about', function () {
    $messages = Message::all();
    return view('about', [
        'messages'=>$messages
    ]);
    
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/gallery', function () {
    $messages = Message::paginate(5);
    return view('gallery',[
        'messages'=>$messages
    ]);
});
Auth::routes();


Route::get('/message', 'HomeController@message');

Route::get('/home', 'HomeController@index')->name('home');
