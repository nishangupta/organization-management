<?php

namespace App\Http\Controllers\Admin;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function index(){
        return view('admin.task.index');
    }

    public function create(){
        return view('admin.task.create');
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required|min:3|max:200',
            'description'=>'nullable|min:3',
            // 'cover'=>'sometimes|image|max:5000',
            'privacy'=>'required'
        ]);

        Task::create([
            'title'=>$request->title,
            'description'=>$request->description,
            // 'cover'=>$request->cover,
            'privacy'=>$request->privacy ?? 'public',
            'status'=>'ongoing',
            'user_id'=>auth()->id(),
        ]);

        return redirect()->back();;
    }
}
