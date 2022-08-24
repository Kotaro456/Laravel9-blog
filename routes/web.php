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

Route::get('/', [BlogController::class, 'index'])->middleware(['auth'])->name('blog.index');

Route::get('/blog/detail/{id}', [BlogController::class, 'detail'])->middleware(['auth'])->name('blog.detail');

Route::get('/admin/blog/new', function () {
    return view('admin.blog.new');
})->middleware(['auth'])->name('admin.blog.new');
Route::post('/admin/blog/create', [BlogController::class, 'create'])->middleware(['auth'])->name('admin.blog.create');

Route::get('/admin/blog/edit/{id}',  [BlogController::class, 'edit'])->middleware(['auth'])->name('admin.blog.edit');
Route::post('/admin/blog/update/{id}', [BlogController::class, 'update'])->middleware(['auth'])->name('admin.blog.update');

Route::get('/admin/blog/delete/{id}', [BlogController::class, 'destroy'])->middleware(['auth'])->name('admin.blog.delete');


Route::get('/admin/index',[BlogController::class, 'admin_index'])->middleware(['auth'])->name('admin.index');


require __DIR__.'/auth.php';
