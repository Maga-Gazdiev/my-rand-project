<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $posts = new Teacher();
        $posts = $posts->all();
        return view('teachers.index', compact("posts")); 
    }

    public function create()
    {
        return view('teachers.create'); 
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:50'],
            'biog' => ['required', 'min:50'],
        ]);
            $save = new Teacher();

            $save->name = $request->input('name');
            $save->biog = $request->input('biog');
     
            $save->save();

            return redirect()->route('teacher.index');
    }
    public function show(Teacher $teacher, $id)
    {
        $posts = Teacher::findOrFail($id);
        return view('teachers.show', compact('posts'));
    }
}
