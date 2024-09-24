<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);
        Task::create($request->all());
        return redirect()->back();
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // Update task: bisa update title atau status is_completed
    public function update(Request $request, Task $task)
    {
        // Jika ada input 'title', maka update title task
        if ($request->has('title')) {
            $request->validate([
                'title' => 'required'
            ]);
            $task->update([
                'title' => $request->input('title')
            ]);
        }

        // Jika ada input untuk status completed, toggle statusnya
        if ($request->has('is_completed')) {
            $task->update([
                'is_completed' => !$task->is_completed
            ]);
        }

        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->back();
    }
}
