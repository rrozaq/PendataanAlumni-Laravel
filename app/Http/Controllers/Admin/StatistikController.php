<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;

class StatistikController extends Controller
{
    public function tahun()
    {
        $thn2016 = Student::where('thn', 2016)->count();
        $thn2017 = Student::where('thn', 2017)->count();
        $thn2018 = Student::where('thn', 2018)->count();

        $jkpr = Student::where('jk', 'perempuan')->count();
        $jklk = Student::where('jk', 'laki-laki')->count();
        
        return view('dashboard.statistik.statistik_tahun', compact('thn2016', 'thn2017', 'thn2018', 'jklk', 'jkpr'));
    }
}
