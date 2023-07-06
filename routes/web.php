<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonsController;



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

// Route::get('/', function () {
//     return view('index');
// });
// Display all Persons
Route::get('/',[PersonsController::class,'display']);
// Create a Person
Route::get('/add',[PersonsController::class,'showCreateForm']);
Route::post('/add',[PersonsController::class,'createPerson']);
Route::delete('/delete/{person}', [PersonsController::class, 'deletePerson'])->name('person.delete');

