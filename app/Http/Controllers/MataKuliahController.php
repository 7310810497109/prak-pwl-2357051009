<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;
use App\Models\Kelas;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data =[
            'title' => 'List Mata Kuliah',
            'mks'=> MataKuliah::all(),
        ];
        return view('list_mk', $data);
    }
    public function create()
    {
        return view ('create_mk',['title'=>'Create Mata Kuliah']);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_mk' => 'required|string',
            'sks'     => 'required|integer|min:1|max:3',
        ]);

        MataKuliah::create($request->only('nama_mk', 'sks'));

        return redirect()->to('/matakuliah')->with('success', 'Mata Kuliah created successfully');
    }
    public function edit($id){
        $mk = MataKuliah::findorFail($id);
        $kelas = Kelas::all();
        return view ('edit_mk', ['title'=>'Edit Mata Kuliah', 'mk'=>$mk, 'kelas'=>$kelas]);

    }
    public function update(Request $request, $id){
        $request->validate([
            'nama_mk' => 'required',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        $mk = MataKuliah::findorFail($id);
        $mk->update([
            'nama_mk' => $request->input('nama_mk'),
            'sks' => $request->input('sks'),
        ]);
        return redirect()->to('/matakuliah');
    }
    public function destroy($id){
        $mk = MataKuliah::findorFail($id);
        $mk->delete();
        return redirect()->to('/matakuliah')->with('success', 'Mata Kuliah deleted successfully');
    }
}
