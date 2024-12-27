<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BookingController extends Controller
{
    public function index()
    {
        return view('booking', [
            'title' => 'Booking List',
            'allBooking' => Booking::with('court', 'user')->get()
        ]);
    }
}
