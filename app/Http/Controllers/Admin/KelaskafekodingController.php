<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelaskafekoding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class KelaskafekodingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Session::get('id')) {

            return redirect()->route('login')->with('tidak_login', 'login');
        }

        $data['kelaskafekoding'] = DB::table('tb_kelaskafekoding')->get();

        // dd($data['kelaskafekoding']);
        return view('pages.halaman_admin.kelola_kelaskafekoding.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.halaman_admin.kelola_kelaskafekoding.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate(
            [
                'kelas_kelaskafekoding' => 'required',
                'jam_awal_kelaskafekoding' => 'required',
                'jam_akhir_kelaskafekoding' => 'required',
                'ruangan_kelaskafekoding' => 'required',
                'link_kelaskafekoding' => 'required',


            ],

            [
                'kelas_kelaskafekoding.required' => 'Wajib diisi',
                'jam_awal_kelaskafekodingrequired' => 'Wajib diisi',
                'jam_akhir_kelaskafekodingrequired' => 'Wajib diisi',
                'ruangan_kelaskafekodingrequired' => 'Wajib diisi',
                'link_kelaskafekoding.required' => 'Wajib diisi',

            ]
        );


        if ($request->hasFile('gambar_kelaskafekoding')) {
            $path = 'images/gambar_kelaskafekoding/';
            $request->file('gambar_kelaskafekoding')->move($path, $request->file('gambar_kelaskafekoding')->getClientOriginalName());

            $gambar_kelaskafekoding = $path . $request->file('gambar_kelaskafekoding')->getClientOriginalName();
        } else {

            return back()->with('error', 'Gambar harus diisi');
        }

        $create = Kelaskafekoding::create([
            'id_kelaskafekoding' => Kelaskafekoding::GenerateID(),
            'jam_awal_kelaskafekoding' => $request->jam_awal_kelaskafekoding,
            'jam_akhir_kelaskafekoding' => $request->jam_akhir_kelaskafekoding,
            'ruangan_kelaskafekoding' => $request->ruangan_kelaskafekoding,
            'kelas_kelaskafekoding' => $request->kelas_kelaskafekoding,
            'link_kelaskafekoding' => $request->link_kelaskafekoding,
            'gambar_kelaskafekoding' => $gambar_kelaskafekoding
        ]);


        if ($create) {
            return redirect()->route('kelaskafekoding.index')->with('toast_success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('kelaskafekoding.index')->with('toast_error', 'Data Gagal Ditambahkan');
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
        $data['dataById'] = DB::table('tb_kelaskafekoding')->where('id_kelaskafekoding', '=', $id)->first();

        return view('pages.halaman_admin.kelola_kelaskafekoding.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi = $request->validate(
            [
                'kelas_kelaskafekoding' => 'required',
                'jam_awal_kelaskafekoding' => 'required',
                'jam_akhir_kelaskafekoding' => 'required',
                'ruangan_kelaskafekoding' => 'required',
                'link_kelaskafekoding' => 'required',

            ],

            [
                'kelas_kelaskafekoding.required' => 'Wajib diisi',
                'jam_awal_kelaskafekoding.required' => 'Wajib diisi',
                'jam_akhir_kelaskafekoding.required' => 'Wajib diisi',
                'ruangan_kelaskafekoding.required' => 'Wajib diisi',
                'link_kelaskafekoding.required' => 'Wajib diisi',

            ]
        );

        $dataById = DB::table('tb_kelaskafekoding')->where('id_kelaskafekoding', '=', $id)->first();

        if ($request->hasFile('gambar_kelaskafekoding')) {
            $path = 'images/gambar_kelaskafekoding/';
            $request->file('gambar_kelaskafekoding')->move($path, $request->file('gambar_kelaskafekoding')->getClientOriginalName());

            $gambar_kelaskafekoding = $path . $request->file('gambar_kelaskafekoding')->getClientOriginalName();
        } else {
            $gambar_kelaskafekoding = $dataById->gambar_kelaskafekoding;
        }

        $update = kelaskafekoding::where('id_kelaskafekoding', '=', $id)->update([
            'id_kelaskafekoding' => Kelaskafekoding::GenerateID(),
            'jam_awal_kelaskafekoding' => $request->jam_awal_kelaskafekoding,
            'jam_akhir_kelaskafekoding' => $request->jam_akhir_kelaskafekoding,
            'ruangan_kelaskafekoding' => $request->ruangan_kelaskafekoding,
            'kelas_kelaskafekoding' => $request->kelas_kelaskafekoding,
            'link_kelaskafekoding' => $request->link_kelaskafekoding,
            'gambar_kelaskafekoding' => $gambar_kelaskafekoding
        ]);


        if ($update) {
            return redirect()->route('kelaskafekoding.index')->with('success', 'Data Berhasil Di Update');
        } else {
            return redirect()->route('kelaskafekoding.index')->with('error', 'Data Gagal Di Update');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Kelaskafekoding::where('id_kelaskafekoding', '=', $id)->delete()) {
            return back()->with('toast_success', 'Data Berhasil');
        } else {
            return back()->with('toast_error', 'Data Gagal Ditambahkan');
        }
    }
}