<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioControllerr;

Route::get('/', [PortfolioControllerr::class, 'index']);