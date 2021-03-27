<?php

namespace App\Http\Controllers;

use App\Todo ; 

use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){

        $todos=Todo::all(); 
        return view('todos.index' , compact('todos'));

    }


    public function show($id){

        $todo= Todo::find($id); 
        return view('todos.show' , compact('todo'));



    }

    public function create(){

        return view('todos.create');
    }
    
    public function store(Request $request) {

       $request->validate(['name'=> 'required', 'description'=>'required']);



        $data = new Todo(); 
        $data->name = request('name') ; 
        $data->description = request('description') ; 
        $data->completed = false ; 
        
        $data->save(); 
        session()->flash('success','Your Todo Has Created Successfully');
        return redirect(url('/')); 
     }
     
     

    public function edit($id) {
       
        $todo = Todo::find($id); 
        return view('todos.edit', compact('todo')); 
     }
 
     public function update(Request $request) {

        $request->validate(['name'=> 'required', 'description'=>'required']);
         
        $data = Todo::find(request('id'));

        $data->name = request('name') ; 
        $data->description = request('description') ;  
 
        $data->save(); 

        session()->flash('success','Your Todo Has Updated Successfully');
        
        return redirect(url('/')); 
      
     }

     
     
     public function delete($id) {
       
        $data =Todo::find($id);
        
        $data->delete();

        session()->flash('success','Your Todo Has Deleted Successfully');
        return redirect(url('/'));


     }

     public function complete($id) {
       
        $data =Todo::find($id);
        $data->completed=true ; 
        $data->save(); 

        session()->flash('success','Your Todo Has Completed Successfully');
        return redirect(url('/'));


     }





}
