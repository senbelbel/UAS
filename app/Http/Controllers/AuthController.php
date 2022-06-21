<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function user()
    {
        $user = User::paginate(5);
        return view ('user',['user'=>$user]);
    }

    public function tambah()
    {
        return view ('tambah');
    }

    public function simpanuser(Request $request)
    {
        $user = User::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => bcrypt($request -> password)
        ]);
        return redirect('/user');
    }

    public function edituser($id)
    {
        $user = User::find($id);
        return view ('edituser',['user'=>$user]);
    }

    public function hapususer($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }

    public function login()
    {
        return view('login');
    }

    public function ceklogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('/mhs');
        }
        else
        {
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
