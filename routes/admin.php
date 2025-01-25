<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::middleware('auth')->group(function () {
  Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
  Route::post('/admin-createMaker', [AdminController::class, 'createMaker'])->name('admin.maker');
  Route::post('/admin-createModel', [AdminController::class, 'createModel'])->name('admin.model');
  Route::post('/admin-createType', [AdminController::class, 'createType'])->name('admin.type');
  Route::post('/admin-fuel', [AdminController::class, 'createFuel'])->name('admin.fuel');
  Route::get('/maker-list', [AdminController::class, 'listMaker'])->name('admin.listMaker');
  Route::get('/edit-maker/{maker}', [AdminController::class, 'editMaker'])->name('admin.editMaker');
  Route::put('/edit-maker/{maker}', [AdminController::class, 'updateMaker']);
  Route::delete('/delete-maker/{maker}', [AdminController::class, 'deleteMaker'])
  ->name('admin.deleteMaker');
  Route::get('/model-list', [AdminController::class, 'listModel'])->name('admin.modelList');
  Route::get('/edit-model/{models}', [AdminController::class, 'editModel'])->name('admin.editModel');
  Route::put('/edit-model/{models}', [AdminController::class, 'updateModel']);
  Route::delete('/delete-model/{models}', [AdminController::class, 'deleteModel'])
  ->name('admin.deleteModel');
  Route::get('/list-type', [AdminController::class, 'listType'])->name('admin.listType');
  Route::get('/edit-type/{type}', [AdminController::class, 'editType'])->name('admin.editType');
  Route::put('/edit-type/{type}', [AdminController::class, 'updateType']);
  Route::delete('/delete-type/{type}', [AdminController::class, 'deleteType'])->name('admin.deleteType');
  Route::get('/list-fuel', [AdminController::class, 'listFuel'])->name('admin.listFuel');
  Route::get('/edit-fuel/{fuel}', [AdminController::class, 'editFuel'])->name('admin.editFuel');
  Route::put('/edit-fuel/{fuel}', [AdminController::class, 'updateFuel']);
  Route::delete('/delete-fuel/{fuel}', [AdminController::class, 'deleteFuel'])->name('admin.deleteFuel');

});
