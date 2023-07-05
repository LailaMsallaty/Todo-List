<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo; // trait
class todosControllers extends Controller
{
    public function index()
    {
       $todos = Todo::all();
        return view('todos.index',['todos'=> $todos]);
      // return view('todos')->with('todos',$todos);
      // return view('todos',compact('todos'));

    }
    public function show(Todo $todo){

     // $todo = Todo::find($todo);
      return view('todos.show')->with('todo',$todo);
    }
    public function create(){

      return view('todos.create');

    }
    public function store(Request $request){

      //dd(request()->all());
      // dd($request); // dependency injection 
      //  return $request->all();
      // return $request->input('todoTitle');   for return value of todoTitle
      
    /*  $request -> validate([

        'todoTitle' => 'required|min:5',
        'todoDescription' => 'required'

      ]);
    */
    $this ->validate($request ,[

      'todoTitle' => 'required|min:5',
      'todoDescription' => 'required'

    ]);
      $todo = new Todo();

      $todo->title = $request->todoTitle; // or  $request->input('todoTitle');
      $todo->description = $request->todoDescription;
      $todo -> save();

      $request->session()->flash('success','Todo Created Successfully');
      return redirect('/todos');
    }
    public function edit(Todo $todo){


     // $todo = Todo::find($todo);
      return view('todos.edit')->with('todo',$todo);

    }
    public function update(Request $request,Todo $todo){

      $this ->validate($request ,[

        'todoTitle' => 'required|min:5',
        'todoDescription' => 'required'
  
      ]);
     // $todo = Todo::find($todo);
      $todo->title = $request->get('todoTitle');
      $todo->description = $request->get('todoDescription');
      $todo -> save();

      $request->session()->flash('success','Todo Updated Successfully');

      return redirect('/todos');

    }
    public function destroy(Todo $todo){

     // $todo = Todo::find($todo);
      $todo->delete();
      session()->flash('success','Todo Deleted Successfully');
      return redirect('/todos');

    }
    public function complete(Todo $todo){

      $todo->completed = true;
      $todo->save();

      session()->flash('success','Todo Completed Successfully');
      
      return redirect('/todos');
    }
}
