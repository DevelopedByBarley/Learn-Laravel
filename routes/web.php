<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listings;

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

//index -> Show all listings -> Done
//show -> Show single listing -> Done
//create -> Show form to create new listing -> Done
//store -> Storw new Listing

Route::get('/', [ListingController::class, "index"]);

Route::get('/listing/{listing}', [ListingController::class, 'show']);

Route::get('/listings/create', [ListingController::class, 'create']);

