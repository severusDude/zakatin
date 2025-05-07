<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Payment;
use App\Models\Person;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Payment::query()->with('person');

        if ($request->filled('search')) {
            $query->whereHas('person', function ($q) use ($request) {
                $q->where('name', 'ilike', '%' . $request->search . '%');
            });
        }

        $payments = $query->orderByDesc('status')->get();

        return view('payments.index', [
            'payments' => $payments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('payments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'person_id' => 'required',
            'period' => 'required',
            'type' => 'required',
            'amount' => 'required'
        ]);

        Payment::create($validated);

        return redirect()->route('payments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        // load current payment(person) and its family members
        $payment->load('person.familyMembers');

        return view('payments.show', [
            'payment' => $payment
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
