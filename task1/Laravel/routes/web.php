<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\task;
use App\Http\Controllers\task1;

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
// Route::get ('example',function(){
// return view('example');
// });
//  Route::get('example','examplecontroller@example_fun');  //bath+contorllername@the name of function insider controller
 Route::get('/example',examplecontroller::class . '@example_fun');





//  Route::get('/tasklogin',[task::class,'tasklogin']
// );
//  Route::get('/taskhome',[task::class,'taskhome']
// );
Route::post('/taskhome.blade.php', task1::class . '@index');
Route::get('/tasklogin',function() {
    return view('tasklogin');
});

