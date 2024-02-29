<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    //
    public function register()
    {
        $data['user'] = DB::table('users')->get();
        return view('Pages.Halaman_admin.auth.register', $data);
    }


    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'nama_users' => 'required',
            'email' => 'required|email|unique:Users,email',
            'password' => 'required',
            'gambar_users' => 'required'
        ])->validate();

        if ($request->file('gambar_users')) {
            $file = $request->file('gambar_users');
            $nama_file = $file->getClientOriginalName();
            $tujuan_upload = 'images/gambar_users/';
            $file->move($tujuan_upload, $nama_file);
        }

        $createData = User::create([
            'id_users' => User::GenerateID(),
            'nama_users' => $request->nama_users,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gambar_users' => $tujuan_upload . $nama_file
        ]);

        if ($createData) {
            return redirect()->route('login')->with('toast_success', 'Selamat Anda Berhasil!!');
        }


        return redirect()->route('register')->with('toast_error', 'Anda Tidak Bisa Login');
    }

    public function login()
    {

        return view('pages.halaman_admin.auth.login');
    }
    public function loginProcces(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ])->validate();

        if (Auth::attempt(['email' => $validasi['email'], 'password' => $validasi['password']])) {

            $request->session()->regenerate();

            // membuat session
            Session(['id' => auth()->user()->id_users]);
            Session(['email' => auth()->user()->email]);
            Session(['password' => auth()->user()->password]);
            // Session(['gambar_user' => auth()->user()->gambar_user]);
            Session(['nama_users' => auth()->user()->nama_users]);
            $request->session()->put('gambar_users', auth()->user()->gambar_users);

            return redirect()->intended('/dashboard')->with('toast_success', 'Selamat Datang ' . auth()->user()->nama_users);
        }
        return  redirect()->intended('/login')->with('toast_error', 'Data anda tidak ada pada sistem kami ');
    }

    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('toast_success', 'Berhasil Logout !!');
    }
}
