<?php

use Illuminate\Support\Facades\Route;

use Nahidul77\PermissionEditor\Http\Controllers\RoleController;

Route::resource('roles', RoleController::class);
