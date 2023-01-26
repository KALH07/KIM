<?php

use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonneController;


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

Route::get('/personnes/{id}',function ($id) {
    return "Nom: KALH TRAORE, ID :".$id;
});

Route::get('/peoples/{name?}',function ($name = "KALH") {
    return "Nom :".$name;
});

Route::prefix('/v1')->group(Function() {

    Route::get("/fruits", function(){
        return response()->json([
            'mangues','kiwi','citron'

        ]);

    });
    Route::get('/plats', function () {
        return response()->json([
            'hasError' => false,
            'message' => "Plat du jour",
            'data' => [
                [
                    'id' => 1,
                    'libelle' => 'Foutou'
                ],
                [
                    'id' => 2,
                    'libelle' => 'Placali'
                ]
            ]
        ]);
    });
    Route::get('/class',[TestController::class, 'index']);

    Route::get('/fruits',[TestController::class, 'index1']);

    Route::get('/plats',[TestController::class, 'index2']);

    Route::get('/grou',[PersonneController::class, 'index']);




});

