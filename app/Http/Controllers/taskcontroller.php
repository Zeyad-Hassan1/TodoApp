<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class taskcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = task::latest()->get();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|string'
        ]);
        task::create($validated);

        return redirect()->route('tasks.index')->with('success', 'Task added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, task $task)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|string'
        ]);

        $task->update($validated);

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
    public function complete(task $task){
        $task->update(['completed' => true]);
        return redirect()->route('tasks.index')->with('success' , 'task completed successfully');
    }
    public function undo(task $task)
{
    $task->update(['completed' => false]);

    return redirect()->back()->with('success', 'Task reverted successfully!');
}
}
