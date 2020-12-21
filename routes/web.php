<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RoleManagementController;

Route::get('/', [LandingPageController::class, 'index'])->name('landingPage.index');

Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::get('/admin/dashboard',[DashboardController::class,'index'])->name('dashboard.index');

Route::group(['prefix'=>'/admin/role'],function(){
  Route::get('/',[RoleManagementController::class,'index'])->name('roleManagement.index');
  Route::get('{role}/edit',[RoleManagementController::class,'edit'])->name('roleManagement.edit');
  Route::put('{role}/update',[RoleManagementController::class,'update'])->name('roleManagement.update');

  //removing permission from a role
  Route::get('{role}/permission/{permission}/revoke',
      [RoleManagementController::class,'revokePermission'])->name('roleManagement.revokePermission');
});


Route::group(['prefix'=>'/admin'],function(){

  Route::resource('/task',TaskController::class);

});