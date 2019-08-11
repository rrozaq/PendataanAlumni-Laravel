<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        $all = DB::table('students')->count();
        $jkpr = Student::where('jk', 'perempuan')->count();
        $jklk = Student::where('jk', 'laki-laki')->count();
        $prodi = DB::table('prodi')->count();

        return view('dashboard.home', compact('all', 'jkpr', 'jklk', 'prodi'));
    }

    public function kab($id)
    {
        $kab = DB::table('kabupaten')->where('id_provinsi', $id)->get();
        return json_encode($kab);
    }
}
