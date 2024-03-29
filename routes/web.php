<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;
use Faker\Provider\Image;

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
});
Route::get('upload', [FileUploadController::class,'fileUpload'])->name('file.upload');
Route::post('upload', [FileUploadController::class,'fileUploadPost'])->name('file.upload.post');

Route::get('storage/{filename}', function ($filename)
{
    return Image::make(storage_path('public/' . $filename))->response();
});