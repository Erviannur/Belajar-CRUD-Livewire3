<?php

use App\Livewire\Article;
use App\Livewire\Counter;
use App\Livewire\LifecycleHooks;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Livewire\User\UserComponent;

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
    return view('welcome');
});

// Route::get('/counter', Counter::class);

// Route::get('/tutorial', function () {
//     return view('tutorial');
// });

// Route::get('/users', function () {
//     return view('livewire.users.index');
// })->name('users.home');

// Route::get('/user/{id}', [UserController::class, 'show'])->name('users.details');
// Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('users.edit');

// Route::get('article/{name}', Article::class)->name('article');

// Route::get('/lifecycle-hooks', function () {
//     return view('livewire.lifecycle-hooks');
// });


Route::get('/user', UserComponent::class)->name('user');