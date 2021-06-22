<?php

namespace App\Http\Controllers\Dashboard;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public $pesan_delete = ['success'=>'Berhasil Menghapus data'];
    public $pesan_create = ['success'=> 'Berhasil menambahkan data'];
    public $pesan_update = ['success' => 'Berhasil mengupdate data'];


    public function getUser()
    {
        $users = User::orderBy('name','asc')->get();
        return view('dashboard.users',compact(['users']));
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'email' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('admin123456'),
            'role' => 'a'
        ]);

        return back()->with($this->pesan_create);
    }

    public function updateUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user = User::find($request->user_id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return back()->with($this->pesan_update);
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with($this->pesan_delete);
    }
}
