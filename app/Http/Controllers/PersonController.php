<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Category;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Person::query()->with('category')->withCount('familyMembers as family_member_count');

        if ($request->filled('search')) {
            $query->where('name', 'ilike', '%' . $request->search . '%');
        }

        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        $persons = $query->get();

        return view('persons.index', [
            'persons' => $persons,
            'categories' => Category::all(),
            'request' => $request->only(['search', 'category'])
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        // dd('here');

        $person->load('category')->load('familyMembers')->load('familyHead');

        return view('persons.show', ['person' => $person]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        // dd($person);

        $person->load('category')->load('familyMembers')->load('familyHead');

        return view('persons.edit', ['person' => $person, 'categories' => Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person $person)
    {
        // dd($request->all());

        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'category_id' => 'required',
        ]);

        $person->fill($validated);
        $person->save();

        return redirect()->route('persons.show', ['person' => $person]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        $person->delete();

        return redirect()->route('persons.index');
    }
}
