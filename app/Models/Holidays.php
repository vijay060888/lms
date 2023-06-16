<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holidays extends Model
{
    use HasFactory;
    public function holidayList()
    {
        $holidays = Holidays::all();

        return view('holidays', ['holidays' => $holidays]);
    }
}


