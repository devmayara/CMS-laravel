<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UploadController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/imageupload', function (Request $request) {
//     return [
//         'location' => 'https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png'
//     ];
// })->name('imageupload');

Route::post('/imageupload', [UploadController::class, 'imageupload'])->name('imageupload');
