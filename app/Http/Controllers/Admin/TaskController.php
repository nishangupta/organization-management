<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
            'task'=>'required|min:3|max:200',
        ]);
        return $request->all();
    }
}
