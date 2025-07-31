<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

  //  return view('/admin/proprietes/index');
    return view('/admin/proprietes/index', [
        'proprietes' => \App\Models\propriete::all()
    ]);
   // return view('welcome');

});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::resource('propriete', \App\Http\Controllers\Admin\ProprieteControleur::class)->except(['show']);
});