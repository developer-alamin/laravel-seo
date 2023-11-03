<?php
use App\Http\Controllers\frontend\aboutController;
use App\Http\Controllers\frontend\blogController;
use App\Http\Controllers\frontend\contactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\loginController;
use App\Http\Controllers\frontend\potfulioController;
use App\Http\Controllers\frontend\testController;
use Illuminate\Support\Facades\Route;

Route::get("/cacth/", function () {
	try {
		Artisan::call('optimize');
		return "Suceess";
	} catch (\Exception $e) {
		return $e;
	}

})->name("cacth");

Route::get("/making/{pathN}/{NewF}", function ($pathN, $NewF) {
	try {
		Artisan::call("make:" . $pathN . ' frontend/' . $NewF);
		return "{$NewF} making Success";

	} catch (\Exception $e) {
		return $e;
	}

});

Route::group(["prefix" => "/"], function () {
	Route::get("/", [HomeController::class, "Webhome"])->name("Web.home");
	Route::get("/about", [aboutController::class, "WebAbout"])->name("Web.About");
	Route::get("/blog", [blogController::class, "WebBlog"])->name("Web.Blog");
	Route::get("/potfulio", [potfulioController::class, "WebPotfulio"])->name("Web.Potfulio");
	Route::get("/contact", [contactController::class, "WebContact"])->name("Web.Contact");

	Route::get("/login", [loginController::class, "WebLogin"])->name("Web.Login");

	Route::get("test", [testController::class, "test"]);

});