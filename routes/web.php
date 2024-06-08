<?php

use App\Livewire\CreateMahasiswa;
use App\Livewire\EditMahasiswa;
use App\Livewire\Mahasiswa\MhsCreate;
use App\Livewire\Mahasiswa\MhsList;
use App\Livewire\ShowMahasiswa;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', ShowMahasiswa::class);
Route::get('/create', CreateMahasiswa::class);
Route::get('/{mhs}/edit', EditMahasiswa::class);




