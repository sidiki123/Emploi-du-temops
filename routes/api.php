<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('dating', 'DatingControlleur');

Route::apiResource('etudiant', 'EtudiantController');

Route::apiResource('horaire', 'HoraireControlleur');

Route::apiResource('matiere', 'MatiereControlleur');

Route::apiResource('niveau', 'NiveauControlleur');

Route::apiResource('professeur', 'ProfesseurControlleur');

Route::apiResource('emploitime', 'emploitimeController');
Route::middleware('auth:api')->group(function() {
    

});
