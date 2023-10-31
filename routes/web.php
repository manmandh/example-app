<?php
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
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

//Single Listing
Route::get('/listings/{id}', function($id){
    return view('listing',[
        'listing' => Listing::find($id)
    ]);
});

Route::get('/programing', function () {
    return ['C++', 'Java', 'Javascript', 'PHP'];
});

Route::get('/hello', function () {
    return  response('<h1>Hello world</h1>', 200)
    ->header('Content-Type', 'text/plain')
    ->header('foo', 'bar');
});

Route::get('/post/{id}', function($id){
    //ddd($id);
    return response('Post' . $id);
})->where('id', '[0-9]+');

