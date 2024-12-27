<?php

namespace App\Http\Controllers;

use App\Models\BookedCourt;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BookedCourtController extends Controller
{
    public function index()
    {
        return view('bookedCourt', [
            'title' => 'BookedCourt List',
            'allBookedCourt' => BookedCourt::with('Court', 'Booking')->get()
        ]);
    }
}
