<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class PatientlistController extends Controller
{
    public function index(Request $request)
    {
        date_default_timezone_set('Asia/Manila');
        if($request->date) {
            $bookings = Booking::latest()->where('date',$request->date)->get();
            return view('admin.patientlist.index', compact('bookings'));
        }
        $bookings = Booking::latest()->where('date', date('Y-m-d'))->get();
        return view('admin.patientlist.index', compact('bookings'));
    }

    public function toggleStatus($id)
    {
        $booking = Booking::find($id);
        $booking->status =! $booking->status;
        $booking->save();
        return redirect()->back();
    }
}
