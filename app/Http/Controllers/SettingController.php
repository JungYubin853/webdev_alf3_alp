<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SettingController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Setting',
            'allSetting' => Setting::all()
        ]);
    }
}
