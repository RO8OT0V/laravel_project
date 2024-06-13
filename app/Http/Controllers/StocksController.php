<?php

// StocksController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class StocksController extends Controller
{
    public function index(Request $request)
    {
        $dateFrom = $request->input('dateFrom');
        $page = $request->input('page', 1);
        $limit = $request->input('limit', 500);

        $stocks = Stock::where('date', $dateFrom)
            ->paginate($limit, '*', 'page', $page);

        return response()->json($stocks);
    }
}
