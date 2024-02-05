<?php

namespace App\Http\Controllers;

// model train
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('guest.train.index', compact('trains'));

        // dd($trains);
    }
}
