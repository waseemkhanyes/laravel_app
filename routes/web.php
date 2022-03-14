<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Tasks;
use App\Http\Livewire\Storyblock;
use App\Http\Livewire\InProgress;
use App\Http\Livewire\TaskList;
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
    return redirect('/task');
})->middleware(['auth','role']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('/task');
})->name('dashboard');

Route::get('/task', Tasks::class)->middleware(['auth','role']);
Route::get('/task-list', TaskList::class)->middleware(['auth']);
Route::get('/in_progress/{id}', InProgress::class)->middleware(['auth']);
// Route::get('/storyblock', Storyblock::class)->middleware(['auth']);
Route::get('/storyblok/{slug?}', Storyblock::class);

// Route::get('/form', function () {
//     dd()
// });
// Route::get('/storyblok/{slug?}', function ($slug = 'home') {
//     dd($slug);
    
//  });