<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;
use DB;

class FrontController extends Controller
{
    public function home()
    {
        return view('front.home');
    }
    public function pencarian(Request $request)
    {
        $mhs0152 = Student::join('prodi', 'prodi.id', '=', 'students.id_prodi')
                ->select('students.*','prodi.nama_prodi')
                ->when($request->get('key'), function ($query) use ($request) {
                $query->where('npm', 'LIKE', "%$request->key%")
                      ->orWhere('nama_prodi', 'LIKE', "%$request->key%")
                      ->orWhere('nama_0152', 'LIKE', "%$request->key%")
                      ->orWhere('thn', 'LIKE', "%$request->key%");
                })->paginate(10);
            $mhs0152->appends($request->only('key'));
            if(!$mhs0152->isEmpty()) {
                return view('front.pencarian', ['mhs' => $mhs, 'q' => $request->key]);
            } else {
                return redirect('pencarian')->with('msg', 'Data tidak ditemukan, silahkan cari kata kunci lainnya :(');
            }
    }

    public function show($npm)
    {
        $mhs = DB::table('students')
        ->select('students.*', 'nama_provinsi', 'nama_kab', 'nama_prodi')
        ->join('provinsi', 'provinsi.id_provinsi', '=', 'students.id_provinsi')
        ->join('kabupaten', 'kabupaten.id_kab', '=', 'students.id_kab')
        ->join('prodi', 'prodi.id', '=', 'students.id_prodi')
        ->where('students.npm', '=', $npm)
        ->first();
        
        $kerja = DB::table('kerja')
        ->where('npm', '=', $npm)
        ->get();
        
        return view('front.profile', ['mhs' => $mhs, 'kerja' => $kerja]);
    }

    public function pengalamanKerja($id)
    {
        $mhs = DB::table('kerja')
        ->where('npm', '=', $id)
        ->get();
    }
}