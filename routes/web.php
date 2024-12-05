<?php

use App\Http\Controllers\InvoiceController;
use App\Livewire\Backup\ListBackup;
use App\Livewire\Dashboard\DashboardComponent;
use App\Livewire\Home\HomeComponent;
use App\Livewire\Permission\ListPermission;
use App\Livewire\Role\ListRole;
use App\Livewire\User\ListUser;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;
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
Route::get('/', HomeComponent::class);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/user/profile',[UserProfileController::class,'show'])->name('profile.show');
    Route::get('/dashboard', DashboardComponent::class)->name('dashboard');
    Route::get('/users', ListUser::class)->name('users');
    Route::get('/roles', ListRole::class)->name('roles');
    Route::get('/permissions', ListPermission::class)->name('permissions');
    Route::get('/backup', ListBackup::class)->name('backup');
});
