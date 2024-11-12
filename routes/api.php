<?php

use App\Http\Controllers\Api\TableDataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/get_products', [TableDataController::class, 'getProducts']);