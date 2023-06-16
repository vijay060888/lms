<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolidayController;


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

/*Route::get('/holidays', function () {
    return view('holidays.index');
})->name('holidays.index');*/

Route::get('/holidays', [HolidayController::class, 'index'])->name('holidays.index');
/*Route::get('/holidays/create', 'HolidayController@create')->name('holidays.create');
Route::post('/holidays', 'HolidayController@store')->name('holidays.store');
Route::get('/holidays/{id}/edit', 'HolidayController@edit')->name('holidays.edit');
Route::put('/holidays/{id}', 'HolidayController@update')->name('holidays.update');
Route::delete('/holidays/{id}', 'HolidayController@destroy')->name('holidays.destroy');*/
