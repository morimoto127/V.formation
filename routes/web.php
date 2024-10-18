<?php

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

use App\Http\Controllers\User\RecipesController;
Route::controller(RecipesController::class)->prefix('user')->group(function() {
    Route::get('recipes/create', 'add');
    Route::get('recipes/edit', 'edit');
    Route::get('recipes', 'index');
});

use App\Http\Controllers\User\ProfileController;
Route::get('user/profile/edit', [ProfileController::class, 'add']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\RecipeController as PublicRecipeController;
Route::get('/', [PublicRecipeController::class, 'front'])->name('recipe.front');