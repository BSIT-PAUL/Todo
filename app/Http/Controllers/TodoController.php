<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
      public function index()
    {
        $todo = Todo::all();
        return view('todo.index', compact('todo'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Todo::create($request->only(['name']));

        return redirect()->route('todo.index')->with('success', 'Todo added successfully!');
    }

    public function edit(Todo $todo)
    {
        return view('todo.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $todo->update($request->only(['name', 'description']));

        return redirect()->route('todo.index')->with('success', 'Todo updated successfully!');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todo.index')->with('success', 'Todo deleted successfully!');
    }
}
