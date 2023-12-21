<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\VerifyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Auth::routes();

Route::get('verify/{verify_key}', [VerifyController::class, 'verify'])->name('verify');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'middleware' => ['auth', 'admin']
], function () {
    Route::get('/admin', function () {
        return view('Admin.beranda');
    });

    Route::get('/admin/room', [RoomController::class, 'index']);
    Route::post('/admin/room', [RoomController::class, 'create']);
    Route::post('/admin/room/{id}', [RoomController::class, 'update']);
    Route::get('/admin/room/{id}', [RoomController::class, 'getOne']);
    Route::delete('/admin/room/{id}', [RoomController::class, 'delete']);

    Route::post('/admin/reservation/{id}', [ReservationController::class, 'update']);
    Route::get('/admin/reservation/{id}', [ReservationController::class, 'getOne']);
    Route::delete('/admin/reservation/{id}', [ReservationController::class, 'delete']);

    Route::get('/admin/user', [ProfileController::class, 'alluser']);
    Route::delete('/admin/user/{id}', [ProfileController::class, 'delete']);


    Route::get('/admin/order', [MenuController::class, 'index']);
    Route::post('/admin/order', [MenuController::class, 'create']);
});

Route::get('/rooms', [RoomController::class, 'indexGuest']);
Route::get('/restaurant', [MenuController::class, 'indexGuest']);

Route::group([
    'middleware' => ['auth']
], function () {
    Route::post('/rooms', [ReservationController::class, 'create']);
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/profile/edit', [ProfileController::class, 'indexEdit']);
    Route::post('/profile/edit', [ProfileController::class, 'update']);
});

Route::get('editMenu/{menuId}', function ($menuId) {
    return view('Admin/editMenu', ['menuId' => $menuId]); //  Pass the menu ID to the view
})->name('editMenu');

Route::get('editOrder/{orderId}', function ($orderId) {
    return view('Admin/editOrder', ['orderId' => $orderId]); //  Pass the menu ID to the view
})->name('editOrder');


Route::get('/menu_management', function () {
    return view('Admin/menuManagement'); // This corresponds to the blade file created earlier
})->name('menu_management');


Route::get('/Home', function () {
    return view('About/home');
});

Route::get('/about', function () {
    return view('About/about');
});

Route::get('/restaurant', function () {
    return view('About/restaurant');
});

Route::get('/Order', function () {
    return view('Admin/order');
});

Route::get('/User', function () {
    return view('Admin/user');
});

Route::get('/EditBookAdmin/:id', function () {
    return view('Admin/editBooking');
});
