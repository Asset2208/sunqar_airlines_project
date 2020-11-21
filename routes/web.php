<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ContactsController;
use App\Http\Livewire\Posts;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/about/', function() {
    return view('about');
});

Route::get('/information/', function() {
    return view('information');
});

Route::get('/myregister/', function() {
    return view('my_register');
});

Route::get('/mylogin/', function() {
    return view('my_login');
});

Route::get('/contacts/', function() {
    return view('contacts');
});

Route::post('/contacts', [ContactsController::class, 'index'])->name('contact.index');

Route::get('/avia/list/', function() {
    return view('avia_list');
});

Route::get('/admin', function() {
    return view('admin.admin');
});

Route::get('post', Posts::class);

Route::get('generate-pdf', [PDFController::class, 'generatePDF']);

Route::get('/madiyar', [AdminController::class, 'index'])->name('madiyar.index');