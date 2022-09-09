<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\ETit;
use Illuminate\Support\Facades\DB;
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
    // DB::connection()->getPdo();
    // try {
    // DB::connection()->getPdo();
    // dump('Database connected: ' . \DB::connection()->getDatabaseName());
    return view('welcome');
});


Route::get('/detail/{book}', [BookController::class, 'show'])->name('detail');

Route::get('test', function () {
    $data = ETit::with('etit')->where('TitId', 186299)->get();
    $c = $data->auts;
    return $c;
});
