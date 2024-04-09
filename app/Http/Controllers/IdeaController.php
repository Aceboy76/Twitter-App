<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    //


    public function store()
    {

        $validated = request()->validate([
            'idea_content' => 'required|min:1|max:240'
        ]);

        Idea::create($validated);


        return redirect()->route('dashboard.index')->with('success', 'Idea created Successfully');
    }

    public function destroy(Idea $id)
    {
        $id->delete();
        return redirect()->route('dashboard.index')->with('success', 'Idea deleted Successfully');
    }

    public function show(Idea $idea)
    {
        return view('layouts.single-idea', compact('idea'));
    }

    public function edit(Idea $idea)
    {
        $editing = true;
        return view('layouts.single-idea', compact('idea', 'editing'));
    }

    public function update(Idea $idea)
    {
        $validated = request()->validate([
            'idea_content' => 'required|min:1|max:240'
        ]);

        $idea->update($validated);

        return redirect()->route('ideas.show', $idea->id)->with('success', 'Idea updated Successfully');
    }
}
