<?php

use App\Livewire\Backup\ListBackup;
use App\Livewire\Customer\ListCustomer;
use App\Livewire\Dashboard\DashboardComponent;
use App\Livewire\Department\ListDepartment;
use App\Livewire\Home\HomeComponent;
use App\Livewire\Permission\ListPermission;
use App\Livewire\Role\ListRole;
use App\Livewire\Shop\ListShop;
use App\Livewire\ShopOutsideDamietta\ListShopOutsideDamietta;
use App\Livewire\ShopDamiettaOnly\ListShopDamiettaOnly;
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

Route::middleware(['guest'])->group(function () {
    Route::get('/', HomeComponent::class);
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/user/profile', [UserProfileController::class, 'show'])->name('profile.show');
    Route::get('/backup', ListBackup::class)->name('backup');
    Route::get('/dashboard', DashboardComponent::class)->name('dashboard');
    Route::get('/users', ListUser::class)->name('users');
    Route::get('/roles', ListRole::class)->name('roles');
    Route::get('/permissions', ListPermission::class)->name('permissions');
    Route::get('/departments', ListDepartment::class)->name('departments');
    Route::get('/shops-outside-damietta', ListShopOutsideDamietta::class)->name('shops.outside.damietta');
    Route::get('/shops-damietta-only', ListShopDamiettaOnly::class)->name('shops.damietta.only');
    Route::get('/customers', ListCustomer::class)->name('customers');
    Route::get('/shops', ListShop::class)->name('shops');
});
