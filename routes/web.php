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

// Display all Persons
Route::get('/',[PersonsController::class,'display']);
// Create a Person
Route::get('/add',[PersonsController::class,'showCreateForm']);
Route::post('/add',[PersonsController::class,'createPerson']);
// delete a person
Route::delete('/delete/{person}', [PersonsController::class, 'deletePerson']);
// update a person
Route::get('/edit/{person}', [PersonsController::class, 'displayPerson']);
Route::put('/update/{person}', [PersonsController::class, 'personUpdate']);

