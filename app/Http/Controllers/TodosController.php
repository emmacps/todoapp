<?php

namespace App\Http\Controllers;

use App\Todo;

use Illuminate\Http\Request;

class TodosController extends Controller{
    //load index

    // fetch all data and idplay them index page
    public function index(){

      $todos = Todo::all();
      return view('todos.index')->with('todos', $todos);
    }

    // show each todo
    public function show($todoId){

      $todo = Todo::find($todoId);
      return view('todos.show')->with('todo', $todo);
    }

    // create todo
    public function create(){

      return view('todos.create');
    }

    // store data from form
    public function store(){

      $this->validate(request(), [
        'name' => 'required',
        'description' => 'required'
      ]);

        $data = request()->all();
        $todo = new Todo();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;

        $todo->save();
        session()->flash('success', 'Todo Created Successfully');

        return redirect('/todos');
    }

    // edit todo
    public function edit($todoId){

      $todo = Todo::find($todoId);
      return view('todos.edit')->with('todo',$todo);
    }

    public function update($todoId){
      $this->validate(request(), [
        'name' => 'required',
        'description' => 'required'
      ]);

        $data = request()->all();
        $todo = Todo::find($todoId);

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;

        $todo->save();
          session()->flash('success', 'Todo Updated Successfully');


        return redirect('/todos');
    }

    public function destroy($todoId){

      $todo = Todo::find($todoId);
      $todo->delete();
        session()->flash('success', 'Todo deleted Successfully');

        return redirect('/todos');
    }

    public function complete($todoId){

      $todo = Todo::find($todoId);
      
      $todo->completed = true;
      $todo->save();

      session()->flash('success', 'Todo completed Successfully');

      return redirect('/todos');
    }
}
