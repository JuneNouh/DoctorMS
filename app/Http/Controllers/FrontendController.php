<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Appointment;

class FrontendController extends Controller
{
    public function index()
    {
        date_default_timezone_set('Europe/Stockholm');
        $doctors = Appointment::where('date', date('Y-m-d'))->get();
        return view('welcome', compact('doctors'));
    }
}
