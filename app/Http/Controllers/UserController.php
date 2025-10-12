<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;
    public function __construct()
    {
        $this -> userModel = new UserModel();
        $this -> kelasModel = new kelas();
        
    }

    public function store(Request $request){
        $this ->userModel ->create([
            'nama' => $request -> input('nama'),
            'NPM' => $request -> input('npm'),
            'kelas_id' => $request -> input('kelas_id'),
        ]);
        return redirect() -> to('/user');
    }

    public function create(){
        $kelasModel = new kelas();
        $kelas = $kelasModel->getkelas();
        $data =[
            'title' => 'Create User',
            'kelas' => $kelas,

        ];
        return view('create_user', $data);
    }

    public function index(){
        $data = [
            'title' => 'List User',
            'users' => $this -> userModel -> getUser(),
        ];
        return view('list_user', $data);
    }

    public function edit($id){
        $user = UserModel::findOrFail($id);
        $kelas = Kelas::all();
        return view('edit_user', [
            'title' => 'Edit User', 
            'user' => $user,
            'kelas' => $kelas,
        ]);
        
    }

    public function update(Request $request, $id){
        $request -> validate([
            'nama' => 'required',
            'NPM' => 'required',
            'kelas_id' => 'required|integer|min:1|max:4',
        ]);
        
        $mk = UserModel::findOrFail($id);
        $mk->update([
            'nama' => $request->input('nama'), 
            'NPM' => $request->input('NPM'), 
            'kelas_id' => $request-> input('kelas_id'),
        ]);
        return redirect() -> to ('/user') -> with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $user = UserModel::findOrFail($id);
        $user->delete();

    return redirect()->to('/user')->with('success', 'Data berhasil dihapus');
    }
}
    