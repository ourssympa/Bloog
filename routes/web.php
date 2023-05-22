<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentairesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
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
    return redirect()->route("post.index");
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('categorie', CategorieController::class);
Route::post('/categorie/{id}/delete', [CategorieController::class,'destroy'])->name('categorie.delete');


Route::resource('post', PostController::class);
Route::post('/post/{id}/delete', [PostController::class,'destroy'])->name('post.delete');


Route::post("/commentaire",[CommentairesController::class,"store"])->name('commentaire.store')->middleware('auth');



Route::get('dashboard/',[DashboardController::class,'index'])->name('dashboard.index')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
