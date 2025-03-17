<?php

use Illuminate\Http\Request;

use App\Http\Controllers\UserController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\CandidatureController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// USERS

Route::get('users', [UserController::class, 'index']); // Liste des utilisateurs
Route::get('users/{id}', [UserController::class, 'show']); // Afficher un utilisateur
Route::post('users', [UserController::class, 'store']); // Créer un utilisateur
Route::put('users/{id}', [UserController::class, 'update']); // Mettre à jour un utilisateur
Route::delete('users/{id}', [UserController::class, 'destroy']); // Supprimer un utilisateur

//FORMATIONS
Route::get('formations', [FormationController::class, 'index']); // Liste des formations
Route::get('formations/{id}', [FormationController::class, 'show']); // Afficher une formation
Route::post('formations', [FormationController::class, 'store']); // Créer une formation
Route::put('formations/{id}', [FormationController::class, 'update']); // Mettre à jour une formation
Route::delete('formations/{id}', [FormationController::class, 'destroy']); // Supprimer une formation

//CANDICAT
Route::get('candidats', [CandidatController::class, 'index']); // Liste des candidats
Route::get('candidats/{id}', [CandidatController::class, 'show']); // Afficher un candidat
Route::post('candidats', [CandidatController::class, 'store']); // Créer un candidat
Route::put('candidats/{id}', [CandidatController::class, 'update']); // Mettre à jour un candidat
Route::delete('candidats/{id}', [CandidatController::class, 'destroy']); // Supprimer un candidat

//CANDIDANTURE
Route::get('candidatures', [CandidatureController::class, 'index']); // Liste des candidatures
Route::get('candidatures/{id}', [CandidatureController::class, 'show']); // Afficher une candidature
Route::post('candidatures', [CandidatureController::class, 'store']); // Créer une candidature
Route::put('candidatures/{id}', [CandidatureController::class, 'update']); // Mettre à jour une candidature
Route::delete('candidatures/{id}', [CandidatureController::class, 'destroy']); // Supprimer une candidature