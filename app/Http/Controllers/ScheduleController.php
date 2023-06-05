<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(Request $request)
    {
        $schedule = new Schedule();
        $schedule = $schedule->all();
        return view('schedule.index', compact("schedule"));
    }

    public function create()
    {
        $schedule = new Schedule();
        return view('schedule.create', compact("schedule"));
    }


    public function show(string $id)
    {
        $schedule = Schedule::findOrFail($id);
        return view('schedule.sea', compact('schedule'));
    }

    public function store(Request $request)
    {
        $schedule = new Schedule();
        $request->validate([
            'name' => 'required|max:10'
        ]);

        $schedule->fill($request->all());
        $schedule->save();

        return redirect()->route('schedule.index');
    }
}
