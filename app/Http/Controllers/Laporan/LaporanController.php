<?php

namespace App\Http\Controllers\Laporan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use PDF;

class LaporanController extends Controller
{
    
    public function cetakPdf()
    {
    	$students = DB::table('students')->limit(5)->get();
 
	    $pdf = PDF::loadview('dashboard.laporan_alumni', ['alumni' => $students]);
	    return $pdf->download('laporan-pegawai-pdf');
    }
}
