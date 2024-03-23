<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Tasks::all();
        return $tasks;
    }



    public function store(Request $request)
    {
        $task = new Tasks();
        $task->task = $request->task;
        $task->save();
    }


    public function update(Request $request, string $id)
    {
        $task = Tasks::findOrFail($id);
        $task->task = $request->task;
        $task->isCompleted = $request->isCompleted;
        $task->save();

        return $task;
    }


    public function destroy(string $id)
    {
        $task = Tasks::findOrFail($id);
        $task->delete();

        return response()->json(null, 204);
    }
}
