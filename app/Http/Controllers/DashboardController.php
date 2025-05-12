<?php

namespace App\Http\Controllers;

use App\Models\Distribution;
use App\Models\Payment;
use App\Models\Person;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $persons = Person::count();
        $muzakki = Payment::query()->whereHas('person', function ($q) {
            $q->where('family_id', null);
        })->count();
        $mustahiq = Person::recipient()->count();
        $payments = Payment::where('status', true)->count();
        $distributions = Payment::where('status', true)->count();
        $collectedMoney = Payment::where('type', 'uang')->sum('amount');
        $collectedRice = Payment::where('type', 'beras')->sum('amount');
        $distributed = [
            'uang' => Distribution::where('type', 'uang')->sum('amount'),
            'beras' => Distribution::where('type', 'beras')->sum('amount'),
        ];

        $statistic = compact(
            'persons',
            'muzakki',
            'mustahiq',
            'payments',
            'distributions',
            'collectedMoney',
            'collectedRice',
            'distributed'
        );

        // dd($statistic);

        return view('dashboard', [
            'statistic' => $statistic
        ]);
    }

    public function download(Request $request)
    {
        if ($request->filled('format')) {
            if ($request->format == 'pdf') {
                dd('pdf');
            } else {
                dd('word');
            }

            return redirect()->route('dashboard');
        }
    }
}
