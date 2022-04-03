<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CommentController;
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
Route::get('/login', function () {
    return view('login');
});
Route::post("/login",[UserController::class,'login']);

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::get('/', function () {
    return view('home');
});
Route::view("/register",'register');
Route::view("/about",'about');
Route::post("/register",[UserController::class,'register']);

Route::view("/home",'home');

Route::resource('/courses',CourseController::class);

Route::get("/available",[CourseController::class,'available']);

Route::post("add_to_cart",[CourseController::class,'addToCart']);
Route::get("enrollment",[CourseController::class,'enrollment']);
Route::get("unenroll/{id}",[CourseController::class,'removeCart']);

Route::get("removeUser",[UserController::class,'removeUser']);

Route::get('/users',[UserController::class,'show']);

Route::get("/edit/{id}",[UserController::class, "edit"]);
Route::put("/update/{id}", [UserController::class, "update"]);

Route::resource('/comments',CommentController::class);