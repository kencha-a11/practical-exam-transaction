<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('index');
});

route::get('/account',[TransactionController::class, 'index'])->name('index');

route::get('/account/create',[TransactionController::class, 'create'])->name('create');

Route::post('/account/creation/store', [TransactionController::class, 'store'])->name('store');

route::get('/account/view/{id}',[TransactionController::class, 'show'])->name('show');

route::get('/account/view/{id}/edit',[TransactionController::class, 'edit'])->name('edit');

route::put('/account/view/{id}/edit/update',[TransactionController::class, 'update'])->name('update');

route::delete('/account/view/{id}/edit/delete',[TransactionController::class, 'destroy'])->name('delete');

