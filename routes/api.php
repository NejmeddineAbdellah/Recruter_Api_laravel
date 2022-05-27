<?php

use App\Http\Controllers\Api\AnnoncecandidatController;
use App\Http\Controllers\Api\AnnonceController;
use App\Http\Controllers\Api\CandidatController;
use App\Http\Controllers\Api\DemandeController;
use App\Http\Controllers\Api\SecteurController;
use App\Http\Controllers\Api\RecruteurController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::resource('secteur',SecteurController::class);
Route::resource('recruteur',RecruteurController::class);
Route::resource('annonce',AnnonceController::class);
Route::resource('candidat',CandidatController::class);
Route::resource('annoncecandidat',AnnoncecandidatController::class);
Route::resource('demande',DemandeController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
