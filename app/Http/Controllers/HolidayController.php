<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holidays;

class HolidayController extends Controller
{
    public function index()
    {
        $holidays = Holidays::all();

        return view('holidays.index', ['holidays' => $holidays]);
    }

    public function create()
    {
        return view('holidays.create');
    }

    public function store(Request $request)
    {
        // Handle the logic to store a new holiday record
    }

    public function edit($id)
    {
        $holiday = Holidays::find($id);

        return view('holidays.edit', ['holiday' => $holiday]);
    }

    public function update(Request $request, $id)
    {
        // Handle the logic to update the holiday record
    }

    public function destroy($id)
    {
        // Handle the logic to delete the holiday record
    }
}
