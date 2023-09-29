<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

Route::get('/hello', function () {
    return response('Hello', 404)->header('Content-Type', 'text/plain');
});

Route::get('/posts/{id}', function ($id) {
    return response(('Post' . $id));
})->where('id', 12);

Route::get('/search', function (Request $request) {
    dd($request);
});
*/

Route::get('/listings', function () {
    return view('listings', [
        "listings" => Listing::all()
    ]);
});

Route::get('/listing/{id}', function ($id) {
    return view('listing', [
        "listing" => Listing::show($id)
    ]);
});



require __DIR__ . '/auth.php';
