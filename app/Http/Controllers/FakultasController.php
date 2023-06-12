<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allfakultas = Fakultas::all();
        return view('admin.fakultas.index',[
            'allfakultas' =>$allfakultas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.fakultas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'name'=>'required'
        ]);
        $fakultas = new Fakultas();
        $fakultas->name = $request->name;
        $fakultas->save();
        return redirect()->route('fakultas.index')->with('success','Fakultas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $fakultas = Fakultas::find($id);
        return view('admin.fakultas.show',[
            'fakultas' => $fakultas
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fakultas = Fakultas::find($id);
        // dd($fakultas);
        return view('admin.fakultas.edit',[
            'fakultas' => $fakultas
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fakultas = Fakultas::find($id);
        $fakultas->name = $request->name;
        $fakultas->save();
        return redirect()->route('fakultas.index')->with('success','Fakultas berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $fakultas = Fakultas::find($id);
        // dd($id);
        $fakultas->delete();
        return redirect()->route('fakultas.index')->with('success','Fakultas berhasil dihapus');
    }
}