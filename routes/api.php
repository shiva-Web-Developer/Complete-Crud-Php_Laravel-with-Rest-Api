<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("data",[DummyController::class,"getdata"]); //get data
Route::post("postdata",[DummyController::class,"postdata"]);  //post data
Route::get("fetchdata",[DummyController::class,"fetchdata"]); //get all  data from the db
Route::get("idfetchdata/{id}",[DummyController::class,"idfetchdata"]); //get data by specfic id from the db
Route::put("updatedata",[DummyController::class,"updatedata"]);  //updatedata data
Route::delete("deletedata/{ddid}",[DummyController::class,"deletedata"]);  //delete  data
