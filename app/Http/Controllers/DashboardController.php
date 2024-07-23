<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getDashboardData(Request $request)
    {
        $data = \App\Models\Article::where('articles', $request->user()->id)->get();
        return response()->json($data);
    }
}
