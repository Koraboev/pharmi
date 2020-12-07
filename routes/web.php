<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TuzilmaController;
use App\Http\Controllers\WelcomeController;
use App\Models\Blog;
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
Route::redirect('/', '/uz');

Route::group(['prefix' => '{language}'], function(){

  Route::get('/', function ($id) {
      $behi = Blog::All();
      return view('welcome', compact('behi', 'id'));
  })->name('olma');

  Route::resource('welcome', WelcomeController::Class);
  Route::get('tuzilma/{olam}', [TuzilmaController::Class, 'index'])->name('tuzilma');

  Route::get('kafedra/{olma}', function($id, $olma){
    return view('tuzilma.kafedra', compact('id', 'olma'));
  })->name('anjir');

});
