<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class HighchartController extends Controller
{
    public function handleChart()
    {
        $userData = User::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('sia_nm_matkul', date('Y'))
                    ->groupBy(\DB::raw("sia_nm_matkul"))
                    ->pluck('count');
          
        return view('home', compact('userData'));
    }
}