<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/salam', function () {
    return response()->json([
        'success' => true,
        'message' => 'Halo! API Laravel 13 Ahmad Mubasysyir berhasil berjalan dengan baik.',
        'data' => [
            'status_server' => 'Aktif',
            'framework' => 'Laravel 13'
        ]
    ], 200);
});
