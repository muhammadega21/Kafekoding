<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        if (!Session::get('id')) {

            return redirect()->route('login')->with('tidak_login', 'login');
        }
        $data['hero'] = DB::table('tb_hero')->get();

        // dd($data['hero']);
        return view('pages.halaman_admin.kelola_hero.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.halaman_admin.kelola_hero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate(
            [
                'judul_hero' => 'required',
                'deskripsi_hero' => 'required',
                'link_hero' => 'required',
                'status_hero' => 'required',

            ],

            [
                'judul_hero.required' => 'Wajib diisi',
                'deskripsi_herorequired' => 'Wajib diisi',
                'link_hero.required' => 'Wajib diisi',
                'status_hero.required' => 'Wajib diisi',
            ]
        );


        if ($request->hasFile('gambar_hero')) {
            $path = 'images/gambar_hero/';
            $request->file('gambar_hero')->move($path, $request->file('gambar_hero')->getClientOriginalName());

            $gambar_hero = $path . $request->file('gambar_hero')->getClientOriginalName();
        } else {

            return back()->with('error', 'Gambar harus diisi');
        }

        $create = Hero::create([
            'id_hero' => Hero::GenerateID(),
            'judul_hero' => $request->judul_hero,
            'deskripsi_hero' => $request->deskripsi_hero,
            'link_hero' => $request->link_hero,
            'status_hero' => $request->status_hero,
            'gambar_hero' => $gambar_hero
        ]);


        if ($create) {
            return redirect()->route('hero.index')->with('toast_success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('hero.index')->with('toast_error', 'Data Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['dataById'] = DB::table('tb_hero')->where('id_hero', '=', $id)->first();

        return view('pages.halaman_admin.kelola_hero.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi = $request->validate(
            [
                'judul_hero' => 'required',
                'deskripsi_hero' => 'required',
                'link_hero' => 'required',
                'status_hero' => 'required',

            ],

            [
                'judul_hero.required' => 'Wajib diisi',
                'deskripsi_herorequired' => 'Wajib diisi',
                'link_hero.required' => 'Wajib diisi',
                'status_hero.required' => 'Wajib diisi',
            ]
        );

        $dataById = DB::table('tb_hero')->where('id_hero', '=', $id)->first();

        if ($request->hasFile('gambar_hero')) {
            $path = 'images/gambar_hero/';
            $request->file('gambar_hero')->move($path, $request->file('gambar_hero')->getClientOriginalName());

            $gambar_hero = $path . $request->file('gambar_hero')->getClientOriginalName();
        } else {
            $gambar_hero = $dataById->gambar_hero;
        }

        $update = hero::where('id_hero', '=', $id)->update([
            'id_hero' => Hero::GenerateID(),
            'judul_hero' => $request->judul_hero,
            'deskripsi_hero' => $request->deskripsi_hero,
            'link_hero' => $request->link_hero,
            'status_hero' => $request->status_hero,
            'gambar_hero' => $gambar_hero
        ]);


        if ($update) {
            return redirect()->route('hero.index')->with('success', 'Data Berhasil Di Update');
        } else {
            return redirect()->route('hero.index')->with('error', 'Data Gagal Di Update');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Hero::where('id_hero', '=', $id)->delete()) {
            return back()->with('toast_success', 'Data Berhasil');
        } else {
            return back()->with('toast_error', 'Data Gagal Ditambahkan');
        }
    }
}