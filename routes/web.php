<?php

use App\Http\Controllers\Member\IndexController;
use App\Http\Controllers\Member\CreateController;
use App\Http\Controllers\Member\EditController;
use App\Http\Controllers\Member\ActivateController;
use App\Http\Controllers\Member\SuspendController;
use App\Http\Controllers\Member\DeleteController;
use App\Http\Controllers\Member\MemberListController;
use App\Http\Controllers\Member\ProfileController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth'])->group(function () {

    Route::get('/members', [IndexController::class, 'index'])->name('member.index');
    Route::get('/members/{id}/profile', [ProfileController::class, 'profile'])->name('member.profile');

    Route::middleware(['role:admin'])->group(function () {
        Route::get('/members/create', [CreateController::class, 'create'])->name('member.create');
        Route::post('/members', [CreateController::class, 'store'])->name('member.store');
        Route::get('/members/{id}/edit', [EditController::class, 'edit'])->name('member.edit');
        Route::put('/members/{id}', [EditController::class, 'update'])->name('member.update');
        Route::get('/members/{id}/activate', [ActivateController::class, 'activate'])->name('member.activate');
        Route::get('/members/{id}/suspend', [SuspendController::class, 'suspend'])->name('member.suspend');
        Route::delete('/members/{id}', [DeleteController::class, 'destry'])->name('member.destry');
    });
});

    // Route::get('/members/{id}/profile', function ($id) {
    //     $data['row'] = \App\Models\User::findOrFail($id);
    //     return view('default.member.profile', compact('data'));
    // })->name('member.profile');

    Route::get('/members/list', [MemberListController::class, 'index'])->name('member.list');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
