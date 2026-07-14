<?php

namespace App\Http\Controllers;

use App\Models\Synth;
use Illuminate\Http\Request;

class SynthController extends Controller
{
    public function index()
    {
        $synths = Synth::all();
        return view('synths.index', compact('synths'));
    }

    public function create()
    {
        return view('synths.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'brand' => 'nullable|string',
        ]);

        Synth::create($data);

        return redirect()
            ->route('synths.index')
            ->with('success', 'Synth created.');
    }

    public function show(Synth $synth)
    {
        return view('synths.show', compact('synth'));
    }

    public function edit(Synth $synth)
    {
        return view('synths.edit', compact('synth'));
    }

    public function update(Request $request, Synth $synth)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'brand' => 'nullable|string',
        ]);

        $synth->update($data);

        return redirect()
            ->route('synths.index')
            ->with('success', 'Synth updated.');
    }

    public function destroy(Synth $synth)
    {
        $synth->delete();

        return redirect()
            ->route('synths.index')
            ->with('success', 'Synth deleted.');
    }
}
