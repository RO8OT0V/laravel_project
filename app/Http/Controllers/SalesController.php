<?php

// SalesController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;

class SalesController extends Controller
{
    public function index(Request $request)
    {
        $dateFrom = $request->input('dateFrom');
        $dateTo = $request->input('dateTo');
        $page = $request->input('page', 1);
        $limit = $request->input('limit', 500);

        $sales = Sale::whereBetween('date', [$dateFrom, $dateTo])
            ->paginate($limit, '*', 'page', $page);

        return response()->json($sales);
    }
}
