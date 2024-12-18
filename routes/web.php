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

// use App\Http\Controllers\Auth\LoginController;
// Route::post('login', 'Auth\LoginController@login')->name('login.post');
// Route::group(['middleware' => 'auth'], function(){
     
//     Route::get('logout', 'Auth\LoginController@logout')->name('logout');
// });

use App\Http\Controllers\User\RecipesController;
Route::controller(RecipesController::class)->prefix('user')->name('user.')->middleware('auth')->group(function() {
    Route::get('recipes/create', 'add')->name('recipes.add');
    Route::post('recipes/create', 'create')->name('recipes.create');
    Route::get('recipes/edit/{id}', 'edit')->name('recipes.edit');
    Route::post('recipes/edit', 'update')->name('recipes.update');
    Route::get('recipes', 'index')->name('recipes.index');
    Route::get('recipes/delete', 'delete')->name('recipes.delete');
});

use App\Http\Controllers\User\ProfileController;
Route::controller(ProfileController::class)->middleware('auth')->group(function() {
    Route::get('profile', 'profile')->name('profile');
    Route::get('user/profile/edit','edit')->name('user.profile.edit');
    Route::post('user/profile/edit', 'update')->name('user.profile.update');
});
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\RecipeController as PublicRecipeController;
Route::get('/', [PublicRecipeController::class, 'front'])->name('recipe.front');
Route::get('/recipe', [PublicRecipeController::class, 'index'])->name('recipe.index');
Route::get('/recipes/{id}', [PublicRecipeController::class, 'show'])->name('recipe.show');

Route::get('logout', function ()
{
auth()->logout();
Session()->flush();

return Redirect::to('/');


})->name('logout');