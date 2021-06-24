<?php

use App\Jobs\CompanyCreated;
use Illuminate\Support\Facades\Route;

Route::get('/teste', function () {
    CompanyCreated::dispatch('testestestes@email.com');

    return response()->json(['message' => 'success']);
});

Route::get('/', function () {
    return response()->json(['message' => 'success']);
});
