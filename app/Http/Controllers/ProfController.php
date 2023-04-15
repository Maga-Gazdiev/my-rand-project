<?php

namespace App\Http\Controllers;

use App\Models\prof;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfController extends Controller
{
    
    public function index()
    {
        $all = Auth::user();
        $email = Auth::user()->email;
        $email = substr($email, 0, 3) . str_repeat("*", 7) . substr($email, -6);
        return view('profile', compact("all", "email")); 
    }

    public function create()
    {
        
    }

  
    public function store(Request $request)
    {
        
    }

    public function show(prof $prof)
    {
        
    }

    public function edit(prof $prof)
    {
        
    }

    public function update(Request $request, prof $prof)
    {
        
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete;
        return redirect()->route('schedule.index');
    }
}
