<?php

// IncomesController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;

class IncomesController extends Controller
{
    public function index(Request $request)
    {
        $dateFrom = $request->input('dateFrom');
        $dateTo = $request->input('dateTo');
        $page = $request->input('page', 1);
        $limit = $request->input('limit', 500);

        $incomes = Income::whereBetween('date', [$dateFrom, $dateTo])
            ->paginate($limit, '*', 'page', $page);

        return response()->json($incomes);
    }
}