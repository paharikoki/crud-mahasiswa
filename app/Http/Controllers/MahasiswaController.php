<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Jenjang;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all mahasiswa with data prodi, fakultas, jenjang
        //get all mahasiswa with pagination
        $mahasiswa = Mahasiswa::with('prodi', 'prodi.fakultas', 'prodi.jenjang')->paginate(10);
        // $mahasiswa = Mahasiswa::get();
        return view('admin.mahasiswa.index', [
            'allmahasiswa'=>$mahasiswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mahasiswa.create', [
            'allprodi'=>Prodi::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Generate NIM
        $getnim = Mahasiswa::where('prodi_id', $request->prodi_id)->latest('id')->value('nim');
        if ($getnim != null) {
                $getnim = substr($getnim, -6);
                $nextNim = str_pad($getnim + 1, 6, '0', STR_PAD_LEFT);
            } else {
                $nextNim = '000001';
            }
        $nextNim = $getnim ? str_pad((intval($getnim) + 1), 6, '0', STR_PAD_LEFT) :'000001';
        $getcodeprodi = Prodi::where('id', $request->prodi_id)->value('kode');

        $nim = substr(date('Y'), -2) . $getcodeprodi . $nextNim;
        $email = $nim . '@student.unmer.ac.id';

        $user = new User();
        $user->name = $request->name;
        $user->email = $email;
        $user->password = bcrypt('unmer2022');
        $user->save();
        //Generate Email

        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = $nim;
        $mahasiswa->prodi_id = $request->prodi_id;
        $mahasiswa->user_id = $user->id;
        $mahasiswa->jenis_kelamin = $request->jk;
        $mahasiswa->save();

        return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa Berhasil Ditambahkan');

        // dd($user, $mahasiswa);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('admin.mahasiswa.show', [
            'mahasiswa'=>$mahasiswa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $fakultas = Fakultas::all();
        $prodi = Prodi::all();
        $jenjang = Jenjang::all();
        return view('admin.mahasiswa.edit', [
            'mahasiswa'=>$mahasiswa,
            'fakultas'=>$fakultas,
            'allprodi'=>$prodi,
            'jenjang'=>$jenjang
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'jk'=>'required',
            'prodi_id'=>'required',
            'nim'=>'required'
        ]);
        $user = User::find($mahasiswa->user_id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password != null) {
            $mahasiswa->user->password = bcrypt($request->password);
        }
        $user->save();

        $mahasiswa->nim = $request->nim;
        $mahasiswa->prodi_id = $request->prodi_id;
        $mahasiswa->user_id = $user->id;
        $mahasiswa->no_hp = $request->no_hp;
        $mahasiswa->jenis_kelamin = $request->jk;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->status = $request->status;
        $mahasiswa->save();

        return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa Berhasil Dihapus');
    }
    public function generateNim(Request $request)
    {
        $prodi_id = $request->input('prodi_id');
        // $lastData = Mahasiswa::where('prodi_id', $prodi_id)->latest('id')->value('nim');
        $lastData = DB::table('mahasiswa')
                ->where('prodi_id', $prodi_id)
                ->max('nim');
        $nextNim = $lastData ? str_pad((intval($lastData) + 1), 6, '0', STR_PAD_LEFT) :'000001';
        // if (!empty($lastData)) {
        //     $nextNim = str_pad($lastData + 1, 6, '0', STR_PAD_LEFT);
        // } else {
        //     $nextNim = '000001';
        // }
        // $nextNim = str_pad((intval($lastData) + 1), 6, '0', STR_PAD_LEFT);
        return response()->json(['lastNIM' => $nextNim]);
        // return view('admin.mahasiswa.create', ['nextNim' => $nextNim]);
    }
}