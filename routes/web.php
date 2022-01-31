<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\about;
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
route::get('fun', [about::class,'show']);
	// Route::get('user1/{nam}', function($name){
	     
	//      return view('sid.user',['name'=>$name]);
	// })->wherealpha('nam');
// Route::view('user','sid.user',['name'=>'ram sir']);
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('about', function(){
	return  "hello mere dil";
});
route::view('about ','user');
route::redirect('about','user');
Route::get('po/{u_id}', function($id='soma'){
	return "your id"."        :". $id;
})->whereNumber('id');  


route::redirect  ('yaha','waha');
route::redirect  ('yaha1','waha2',301);

route::fallback(function()
{
	return "<h1>Abe Kya Search kr Rha h Dekh k kr</h1></marquee>";
});

