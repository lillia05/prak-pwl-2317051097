<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }
    
    public function index(){
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser()
        ];
        return view('list_user', $data);
    }

    public function create(){
        $kelasModel = new Kelas();
        $Kelas = $kelasModel->getKelas();
        $data=[
            'title' => 'Create User',
            'kelas' => $Kelas
        ];
        return view('user_create', $data);
    }    

    public function store(Request $request){
        $validated = $request->validate([
            'nama' => ['required','string'],
            'nim' => ['nullable','string'],
            'kelas_id' => ['required','exists:kelas,id'],
        ]);

        $this->userModel->create($validated);

        return redirect()->to('/user');
    }

    public function destroy($id)
    {
        $user = $this->userModel->findOrFail($id);
        $user->delete();
        return redirect()->to('/user')->with('success', 'User berhasil dihapus');
    }

    public function edit($id)
    {
        $user = $this->userModel->findOrFail($id);
        $kelas = $this->kelasModel->getKelas();
        return view('user_edit', [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $kelas
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = $this->userModel->findOrFail($id);
        $user->update([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'kelas_id' => $request->input('kelas_id'),
        ]);
        return redirect()->to('/user')->with('success', 'User berhasil diupdate');
    }
}