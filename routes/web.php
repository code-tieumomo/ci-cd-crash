<?php

use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Route;

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
    Mail::to('code.tieumomo@gmail.com')->send(new OrderShipped());
    // Mail::to('minhthao9968@gmail.com')->send(new OrderShipped());
});
