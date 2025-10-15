<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }
    public function create(){
        $kelasModel =  new Kelas();
        $kelas = $kelasModel->getKelas();
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];
        return view('create_user', $data);
    }
    public function index(){
        $users = UserModel::with('kelas')->get();
        $title ='test';
        return view('list_user', compact('users','title'));

    }
    public function store(Request $request){
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'nim' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);
        return redirect()->to('/user');
    }
    public function getUser(){
        return $this->join('kelas','kelas.id','=','user.kelas_id')
                    ->select('user.*','kelas.nama_kelas as nama_kelas')
                    ->get();
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $kelas = Kelas::all();
        return view('edit.user', compact('user', 'kelas'));
    }

    public function update(Request $request, $id)
    {
        $user->update([
    'nama' => $request->nama,
    'nim' => $request->nim,
    'kelas_id' => $request->kelas_id,
]);

        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('user.list')->with('success', 'Data user berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user.list')->with('success', 'Data user berhasil dihapus!');
    }
}