<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BestFriendController;

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

Route::get('/addAFriend', [BestFriendController::class, 'addABestFriendView']);

Route::post('/addAFriend', [BestFriendController::class, 'addABestFriend']);

Route::get('/allFriends', [BestFriendController::class, 'getAllBestFriends']);

Route::post('/updateAFriend', [BestFriendController::class, 'updateABestFriend']);

Route::get('/deleteAFriend/{id}', [BestFriendController::class, 'deleteABestFriend']);

Route::get('/firstTwoFriend', [BestFriendController::class, 'getFirstTwoBestFriends']);


