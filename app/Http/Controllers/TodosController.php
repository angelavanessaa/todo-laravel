<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index() {
        return view('todos.index')->with('todos', Todo::all());
    }

    public function show(Todo $todo) {
        return view('todos.show')->with('todo', $todo);
    }

    public function create() {
        return view('todos.create');
    }

    public function store() {
        $this->validate(request(),[
            'name' => 'required',
            'description' => 'required'
        ]);

        $data = request()->all();

        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];

        $todo->save();
        
        session()->flash('success', 'Todo created successfully!');

        return redirect('/');
    }

    public function update(Todo $todo) {
        return view('todos.update')->with('todo', $todo);
    }

    public function submitUpdate($todoId) {
        $this->validate(request(),[
            'name' => 'required',
            'description' => 'required'
        ]);

        $data = request()->all();

        $todo = Todo::find($todoId);

        $todo->name = $data['name'];
        $todo->description = $data['description'];

        $todo->save();

        return redirect()->action(
            'TodosController@show', ['id' => $todoId]
        );
    }

    public function delete(Todo $todo) { 
        $todo->delete();

        return redirect('/');
    }

}
