<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Jenjang;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allprodi = Prodi::all();
        return view('admin.prodi.index',[
            'allprodi' =>$allprodi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultas = Fakultas::all();
        $jenjang = Jenjang::all();
        return view('admin.prodi.create',[
            'fakultas' => $fakultas,
            'jenjangs' => $jenjang
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'jenjang_id' => 'required',
            'fakultas_id' => 'required',
            'kode' => 'required',
        ]);
        $prodi = new Prodi();
        $prodi->name = $request->name;
        $prodi->jenjang_id = $request->jenjang_id;
        $prodi->fakultas_id = $request->fakultas_id;
        $prodi->kode = $request->kode;
        $prodi->save();
        return redirect()->route('prodi.index')->with('success','Prodi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $prodi = Prodi::find($id);
        return view('admin.prodi.show',[
            'prodi' => $prodi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $prodi = Prodi::find($id);
        // dd($prodi);
        $fakultas = Fakultas::all();
        $jenjang = Jenjang::all();
        return view('admin.prodi.edit',[
            'prodi' => $prodi,
            'fakultas' => $fakultas,
            'jenjangs' => $jenjang
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $prodi = Prodi::find($id);

        //make method for update prodi
        $request->validate([
            'name' => 'required',
            'jenjang_id' => 'required',
            'fakultas_id' => 'required',
            'kode' => 'required',
        ]);
        $prodi->name = $request->name;
        $prodi->jenjang_id = $request->jenjang_id;
        $prodi->fakultas_id = $request->fakultas_id;
        $prodi->kode = $request->kode;

        $prodi->save();

        return redirect()->route('prodi.index')->with('success','Prodi berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $prodi = Prodi::find($id);
        $prodi->delete();
        return redirect()->route('prodi.index')->with('success','Prodi berhasil dihapus');
    }
}