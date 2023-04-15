<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $schedule = new Schedule();
        $name = $request->name;
        return view('schedule.sea', compact("schedule", "name"));
    }

    public function create()
    {  
    }

    public function show(string $id)
    {  
    }
    public function store(Request $request)
    {
    }

    public function edit(Schedule $schedule)
    {
    }

    public function update(Request $request, Schedule $schedule)
    {
    }

    public function destroy(Schedule $schedule)
    {
    }
}
