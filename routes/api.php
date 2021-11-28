<?php

use App\Http\Controllers\API\PeoplePlanetController;
use App\Http\Controllers\API\PeoplesController;
use App\Http\Controllers\API\PeopleStarshipController;
use App\Http\Controllers\API\PlanetController;
use App\Http\Controllers\API\StarshipController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// ENDPOINTS PEOPLES
Route::get('/people', [PeoplesController::class, 'getPeoples']);
Route::get('/people/{id}', [PeoplesController::class, 'peopleUnique']);
Route::post('/people', [PeoplesController::class, 'createPeople']);
Route::put('/people', [PeoplesController::class, 'updatePeople']);
Route::delete('/people/{id}', [PeoplesController::class, 'deletePeople']);

// ENDPOINTS PLANETS
Route::get('/planet', [PlanetController::class, 'getPlanets']);
Route::get('/planet/{id}', [PlanetController::class, 'planetUnique']);
Route::post('/planet', [PlanetController::class, 'createPlanet']);
Route::put('/planet', [PlanetController::class, 'updatePlanet']);
Route::delete('/planet/{id}', [PlanetController::class, 'deletePlanet']);

// ENDPOINTS STARSHIPS
Route::get('/starship', [StarshipController::class, 'getStarships']);
Route::get('/starship/{id}', [StarshipController::class, 'starshipUnique']);
Route::post('/starship', [StarshipController::class, 'createStarship']);
Route::put('/starship', [StarshipController::class, 'updateStarship']);
Route::delete('/planet/{id}', [StarshipController::class, 'deleteStarship']);

// ENDPOINTS PEOPLE PLANET
Route::get('/people-planet', [PeoplePlanetController::class, 'getPeoplesPlanets']);
Route::post('/people-planet', [PeoplePlanetController::class, 'createPeoplePlanet']);

// ENDPOINTS PEOPLE STARSHIP
Route::get('/people-starship', [PeopleStarshipController::class, 'getPeoplesStarships']);
Route::post('/people-starship', [PeopleStarshipController::class, 'createPeopleStarships']);