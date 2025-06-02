<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\patch;

Route::get('/', function () {
    return view('curso');
});


Route::view('/', 'curso')->name('home');
Route::view('contacto', 'contacto')->name('contact');

/*Route::get('blog',[PostController::class, 'index'])->name('post.index');

Route::get('/blog/create',[PostController::class, 'create'])->name('post.create');

Route::post('blog', [PostController::class, 'store'])->name(name: 'post.store');

Route::get('/blog/{post}', [PostController::class, 'show'] )->name('post.show');

Route::get('/blog/{post}/edit', [PostController::class, 'edit'] )->name('post.edit');

Route::patch('/blog/{post}', [PostController::class, 'update'] )->name('post.update');
Route::delete('/blog/{post}',[PostController::class,'destroy'])->name('post.destroy'); */

Route::resource('blog', PostController::class,[
    'names' => 'post',
    'parameters' => [
        'blog' => 'post',
    ]
]);

Route::view('nosotros', 'nosotros')->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'password.confirm'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
