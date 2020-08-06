<?php

namespace App\Http\Controllers;
use App\Task;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{

    public function index()
    {

        $task=task::all();
        return view('home',['task'=>$task,'layout'=>'home']);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $task=new task();
        $task->title= $request->input('task');
        $task->date= $request->input('date');
        $task->user_id= Auth()->user()->id;
        $task->save();
        return redirect('/home');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $task=task::find($id);
        $task->delete();
        return redirect('/home')->with('success', 'Contact deleted!');
    }
}
