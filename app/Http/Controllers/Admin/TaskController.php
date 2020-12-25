<?php

namespace App\Http\Controllers\Admin;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class TaskController extends Controller
{
    public function index(){
        
        return view('admin.task.index')->with([
            'tasks'=>Task::all()
        ]);
    }

    public function create(){
        return view('admin.task.create');
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required|unique:tasks|min:3|max:200',
            'description'=>'nullable|min:3',
            'cover'=>'sometimes|image|max:5000',
            'privacy'=>'required'
        ]);

        $task = Task::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'privacy'=>$request->privacy ?? 'public',
            'status'=>'ongoing',
            'user_id'=>auth()->id(),
        ]);

        if($request->hasFile('cover')){
            $task->addMediaFromRequest('cover')->toMediaCollection('cover');
        }

        return redirect()->back();;
    }

    public function show(Task $task){
        $taskWithUser = $task->with('user')->get();
        dd($taskWithUser);
        //getting cover image
        $cover = $task->getFirstMediaUrl('cover');
        return view('admin.task.show')->with([
            'task'=>$taskWithUser,
            'cover'=>$cover
        ]);
    }

    public function destroy($task){
        $task->delete();
        
        return redirect()->route('task.index');
    }
}
