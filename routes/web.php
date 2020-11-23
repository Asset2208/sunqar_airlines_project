<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ContactsController;
use App\Http\Livewire\Airports;
use App\Http\Livewire\Cities;
use App\Http\Livewire\Posts;
use App\Http\Livewire\Contacts;
use App\Http\Livewire\Countries;
use App\Models\City;
use App\Models\Country;
use App\Models\Post;
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

Route::get('/additional-services', function() {
    return view('additional_services');
});

Route::get('/traveling-with-children', function() {
    return view('traveling-with-children');
});

Route::get('/ticket-purchase', function() {
    return view('ticket-purchase');
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

Route::get('admin/post', Posts::class);

Route::get('admin/country', Countries::class);

Route::get('contact-request', Contacts::class);

Route::get('/admin/cities', Cities::class);

Route::get('/admin/airports', Airports::class);

Route::get('generate-pdf', [PDFController::class, 'generatePDF']);

Route::get('/admin', [AdminController::class, 'index'])->name('madiyar.index');