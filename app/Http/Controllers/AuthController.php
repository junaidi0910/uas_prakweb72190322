<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function user()
    {
        $user = User::paginate(5);
        return view('user.user', ['user' => $user]);
    }

    public function formuliruser()
    {
        return view ('user.formuliruser');
    }

    public function simpanuser(Request $request){

        $user = User::create([
            'nik_user' => $request->nik_user,
            'nama_user' => $request->nama_user,
            'no_hp' => $request->no_hp,
            'password' => md5($request -> password)
        ]);
        return redirect ("/user")->with('alert', 'Data User Berhasil Disimpan!');
}

    public function login()
    {
        return view ('user.login');
    }

    public function ceklogin(Request $request)
    {
        if (!Auth::attempt(['nik_user' => $request->nik_user, 'password' => $request-> password]))
        {
            return redirect('/user');
        }
        else
        {
            return redirect('/dosen');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function edituser($id)
    {
        $user = User::find($id);
        return view ('user.edituser', ['user' => $user]);
    }

    public function updateuser($id, Request $request)
    {
        $password = explode(',', $request->password);
        $user = User::find($id);
        $user -> nik_user = $request->nik_user;
        $user -> nama_user = $request->nama_user;
        $user -> no_hp = $request->no_hp;
        $user -> password = $password;
        $user->save();
        return redirect ("/user")->with('alert', 'Data User Berhasil Diubah!');
    }

    public function hapususer($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('alert', 'Data User Berhasil Dihapus!');
        }

}
