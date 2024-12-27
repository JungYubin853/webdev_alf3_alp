<?php

namespace App\Http\Controllers;

use App\Models\Court;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Routing\Controller;

class CourtController extends Controller
{
    public function index()
    {

        $setting = Setting::first();

        $openTime = strtotime($setting->open_time);
        $closeTime = strtotime($setting->close_time);
        $intervalParts = explode(':', $setting->intervalSlot);
        $interval = ($intervalParts[0] * 60);

        $timeSlots = [];
        while ($openTime < $closeTime) {
            $start = date('H:i', $openTime);
            $openTime += $interval * 60;
            $end = date('H:i', $openTime);

            if ($openTime <= $closeTime) {
                $timeSlots[] = "$start ~ $end";
            }
        }

        return view('home', [
            'title' => 'Court List',
            'timeSlots' => $timeSlots,
            'prices' => $setting->price,
            'allCourt' => Court::all()
        ]);
    }
}
