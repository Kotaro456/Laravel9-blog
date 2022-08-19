<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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
    return view('blog.index');
})->middleware(['auth'])->name('blog.index');

Route::get('/blog/detail', function () {
    return view('blog.detail');
})->middleware(['auth'])->name('blog.detail');

Route::get('/admin/blog/new', function () {
    return view('admin.blog.new');
})->middleware(['auth'])->name('admin.blog.new');

Route::post('/admin/blog/create', [BlogController::class, 'create'])->middleware(['auth'])->name('admin.blog.create');


Route::get('/admin/index', function () {
    return view('admin.index');
})->middleware(['auth'])->name('admin.index');


require __DIR__.'/auth.php';
