<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableDataController extends Controller
{
    public function getData()
    {
        // Returning a sample JSON response
        return response()->json([
            'message' => 'Hello from the API!',
            'status' => 'success',
        ]);
    }
}