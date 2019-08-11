<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditRequest;
use App\Http\Requests\AddRequest;
use Yajra\Datatables\Datatables;
use App\Student;
use DB;

class AlumniController extends Controller
{
    public function index()
    {
        return view('dashboard.alumni.alumni');
    }
    public function alumni()
    {
        $alumni = DB::table('students')->select('*');
        return dataTables()->of($alumni)
        ->addColumn('action', function($row){
            $button = '<center><a class="btn btn-primary" href="'.route('dash.alumni.edit',['npm' => $row->npm]).'">
            <i class="fa fa-edit"></i>&nbsp;Update</a>';
            $button .= '<form action="'.route('dash.alumni.delete', ['npm' => $row->npm]).'" method="POST">
                        <input type="hidden" name="_token" value="'.csrf_token().'">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i>&nbsp;Hapus</button></form></center>';
            return $button;
        })->make(true);
    }

    public function tambahAlumni()
    {
        $prodi = DB::table('prodi')->get();
        $prov = DB::table('provinsi')->get();

        return view('dashboard.alumni.tambah_alumni', ['prodi' => $prodi, 'prov' => $prov]);
    }

    public function store(AddRequest $request)
    {
        $validated = $request->validated();
        $npm = $validated['npm'];

        // Upload Foto
        $file = $request->file('foto');
        $nama = $npm.'.'.$file->getClientOriginalExtension();
        $file->storeAs('.', $nama, 'fotomhs');

        $student = Student::create($validated);

        return redirect(route('dash.alumni.create'))->with('status', $student->nama_0152. ' berhasil disimpan.');
    }

    public function edit($id)
    {
        $prodi = DB::table('prodi')->get();
        $prov = DB::table('provinsi')->get();

        $student = Student::where('npm', $id)->firstOrFail();
        
        return view('dashboard.alumni.alumni_edit', compact('student', 'prov', 'prodi'));
    }

    public function update(EditRequest $request, $id)
    {
        $validated = $request->validated();
        $student = Student::where('npm', $id)->update($validated);

        return redirect(route('dash.alumni'))->with('status', "Alumni berhasil diperbarui.");
    }

    public function destroy($id)
    {
        Student::where('npm', $id)
            ->delete();

        return redirect(route('dash.alumni'))->with('status', "Peserta berhasil dihapus.");
    }

}
