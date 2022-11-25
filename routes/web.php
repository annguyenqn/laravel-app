<?php

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

Route::get('/', function () {
    return view('Home'); 
});
// Route::get('/users', function () {
//     return ('this is user page'); 
// });
// Route::get('/foods', function () {
//     return ['an','hung','tan']; 
// });
// Route::get('/aboutMe', function () {
//     return response()->json([
//         'name' => 'nguyen do the an',
//         'email' => 'theesan2k1@gmail.com'
//     ]);
// });
// Route::get('/something', function () {
//     return redirect('/foods');
// });