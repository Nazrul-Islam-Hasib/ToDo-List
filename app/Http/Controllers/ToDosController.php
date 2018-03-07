<?php

namespace App\Http\Controllers;

use Session;
use App\ToDo;
use Illuminate\Http\Request;

class ToDosController extends Controller
{
    public function index(){

        //variable to get data from db,ToDo class & all() get all value
    	$todos = ToDo::all();

        // return the page named todos.blade.php.....with() is used to receive the data, here todos is the variable we will use in our view,$todos is the data
        
    	return view('todos')->with('todos', $todos);
    }

    public function store(Request $request){

        //create a new instance of the ToDo class 
    	$todo = new ToDo;

    	//var->table feild from db=parameter->frontend form name
    	$todo->todo = $request->todo;

    	//save the data in db
    	$todo->save();
        
        Session::flash('success', 'Your ToDo is created');
    	//redirect user to the page
    	return redirect()->back();
    }

    public function delete($id){
         
        //find the id pass by the front-end & save in a variable
        $todo = ToDo::find($id);

        //delete the data
        $todo->delete();

        Session::flash('success', 'Your ToDo is deleted');

        //redirect user to the page
        return redirect()->back();

    }

    public function update($id){
         
        
        $todo = ToDo::find($id);

        return view('update')->with('todo', $todo);

    }

    public function save(Request $request, $id){
         
        $todo = ToDo::find($id);

        //saving in the todo field in db by what we get from $request->todo
        $todo->todo = $request->todo;

        $todo->save();

        Session::flash('success', 'Your ToDo is updated');

        return redirect()->route('todosHome');
        

    }

    public function completed($id){
         
        
        $todo = ToDo::find($id);

        $todo->completed = 1;

        $todo->save();

        Session::flash('success', 'Your ToDo is mark as completed');

        return redirect()->back();

    }
}
