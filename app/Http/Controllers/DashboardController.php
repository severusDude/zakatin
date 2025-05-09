<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Person;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $persons = Person::count();
        $muzakki = Person::payer()->count();
        $mustahiq = Person::recipient()->count();
        $payments = Payment::where('status', true)->count();
        $distributions = Payment::where('status', true)->count();

        $statistic = compact('persons', 'muzakki', 'mustahiq', 'payments', 'distributions');

        return view('dashboard', [
            'statistic' => $statistic
        ]);
    }
}
