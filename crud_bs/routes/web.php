<?php
// routes/web.php

use App\Http\Controllers\VeiculoController;

Route::resource('veiculos', VeiculoController::class);


Route::get('/', [VeiculoController::class, 'index']);

