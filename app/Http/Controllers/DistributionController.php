<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Distribution;
use Illuminate\Http\Request;

class DistributionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Distribution::query()->with('person');

        if ($request->filled('search')) {
            $query->whereHas('person', function ($q) use ($request) {
                $q->where('name', 'ilike', '%' . $request->search . '%');
            });
        }

        $distributions = $query->orderByDesc('updated_at')->get();

        return view('distributions.index', [
            'distributions' => $distributions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $persons = Person::all();

        return view('distributions.create', [
            'persons' => $persons
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'person_id' => 'required',
            'year' => 'required',
            'type' => 'required',
            'amount' => 'required',
        ]);

        $validated['status'] = true;

        Distribution::create($validated);

        return redirect()->route('distributions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Distribution $distribution)
    {
        return view('distributions.show', ['distribution' => $distribution]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Distribution $distribution)
    {
        return view('distributions.edit', ['distribution' => $distribution]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Distribution $distribution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Distribution $distribution)
    {
        //
    }
}
