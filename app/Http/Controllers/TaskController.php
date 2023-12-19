<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Employee;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('id')->get();

        return view('task.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        $employees = Employee::pluck('name', 'id'); // Adjust column names as needed
        return view('task.create', ['employees' => $employees]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'employee_id' => 'required|exists:employees,id',
        ], [
            'title.required' => 'The title field is required.',
            'description.required' => 'The description field is required.',
            'employee_id.required' => 'Please select an employee.',
            'employee_id.exists' => 'Invalid employee selected.',
        ]);

        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'employee_id' => $request->employee_id,
        ]);

        return redirect('/tasks')->with('message', 'A new task has been added');
    }

    public function edit(Task $task)
{
    return view('task.edit', compact('task'));
}

public function update(Request $request, Task $task)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
    ]);

    $task->update($request->all());

    return redirect('/tasks')->with('message', "$task->title has been updated.");
}

public function delete(Task $task)
{
    $task->delete();

    return redirect('/tasks')->with('message', "$task->title has been deleted successfully");
}



}