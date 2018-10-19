<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;

class TaskController extends Controller
{

    public function listado() {
        $tasks = Task::all();
        return view('task')->with('task', $tasks);
    }

    public function createTask(Request $request) {
        /* Validation */
        $this->validate($request, [
            'task' => 'required|max:20',
            'date' => 'required',
            'empresa' => 'required|max:10'
        ]);
        /* Agregamos la task creada a mysql */
        $task = Task::create([
            'contenido' => $request->input('task'),
            'empresa' => $request->input('empresa'),
            'user_id' => '1'
        ]);
        return redirect('/task');
    }
}
