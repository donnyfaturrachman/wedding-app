<?php

use App\Http\Controllers\RsvpController;
use App\Models\Rsvps;
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
    $dataRsvp = Rsvps::orderByDesc('id')->get();
    return view('index', ['dataRsvp' => $dataRsvp]);
});

/* AJAX */
Route::group(['prefix' => 'ajax'], function () {
    Route::get('/list', [RsvpController::class, 'list'])->name('ajax.list');
    Route::post('/store', [RsvpController::class, 'store'])->name('ajax.store');
});

Route::get('/daftarhadir', function () {
    dd('test');
});
