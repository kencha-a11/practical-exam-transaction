<?php

use App\Http\Controllers\UseraccountController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('index');
});

route::get('/account',[UseraccountController::class, 'index'])->name('index');

route::get('/account/create',[UseraccountController::class, 'create'])->name('create');

Route::post('/account/creation/store', [UseraccountController::class, 'store'])->name('store');

route::get('/account/view/{id}',[UseraccountController::class, 'show'])->name('show');

route::get('/account/view/{id}/edit',[UseraccountController::class, 'edit'])->name('edit');

route::put('/account/view/{id}/edit/update',[UseraccountController::class, 'update'])->name('update');

route::delete('/account/view/{id}/edit/delete',[UseraccountController::class, 'destroy'])->name('delete');

