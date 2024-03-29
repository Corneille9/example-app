<?php

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
    return view('welcome');
})->name("home");


Route::group(['middleware' => 'guest'],function (){
    Route::get("/login", [\App\Http\Controllers\Auth\LoginController::class, "index"])->name("login");
    Route::post("/login", [\App\Http\Controllers\Auth\LoginController::class, "authenticate"])->name("login.authenticate");

    Route::get("/register", [\App\Http\Controllers\Auth\RegisterController::class, "index"])->name("register");
    Route::post("/register", [\App\Http\Controllers\Auth\RegisterController::class, "store"])->name("register.store");
});

Route::get("/email/verify", [\App\Http\Controllers\Auth\EmailVerificationController::class, "index"])
    ->middleware(['auth', "not.verified"])
    ->name("verification.notice");

Route::get('/email/verify/{id}/{hash}', [\App\Http\Controllers\Auth\EmailVerificationController::class, 'verify'])
    ->middleware(['auth', 'signed'])
    ->name('verification.verify');

Route::prefix("admin")->group(function (){
    Route::get("/", function (){
        return redirect()->route("dashboard");
    })->name("admin.login");

    Route::get("dashboard/", [\App\Http\Controllers\DashboardController::class, "index"])->name("dashboard");

    Route::group(['prefix' => 'products', "middleware" => ["auth", "verified"]],function (){
        Route::get("/", function () {})->prefix("products.index");
        Route::get("/create", function () {})->prefix("products.create");
        Route::get("/edit", function () {})->name("products.edit");
        Route::get("/delete", function () {})->name("products.delete");
        Route::get("/show", function () {})->name("products.show");
    });

});
