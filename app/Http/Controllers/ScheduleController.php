<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function welcome(Request $request)
    {
        $schedule = new Schedule();
        return view('schedule.index', compact("schedule"));
    }

    public function index(Request $request)
    {
        $schedule = new Schedule();
        return view('schedule.index', compact("schedule"));
    }

    public function create()
    {
        $schedule = new Schedule();
        return view('schedule.create', compact("schedule"));
    }


    public function show(string $id)
    {
        
    }
    public function store(Request $request)
    {
        $schedule = new Schedule();
        $request->validate([
            'name' => 'bail|required|max:1'
        ]);
        $schedule->fill($request->all());
        $schedule->save();

        return redirect()->route('schedule.index');
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
