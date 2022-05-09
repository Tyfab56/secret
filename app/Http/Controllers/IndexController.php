<?php

namespace app\Http\Controllers;

use App\Models\Spots;

class IndexController extends Controller
{
    public function index()
    {
        // Chargement des 5 derniers spots
        $lastspots = Spots::where([['actif', '=', 1]])
            ->orderBy('created_at', 'DESC')
            ->skip(0)
            ->take(8)
            ->get();

        return view('frontend/index', compact('lastspots'));
    }

   
}
