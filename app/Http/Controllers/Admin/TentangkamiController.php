<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tentangkami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class TentangkamiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Session::get('id')) {

            return redirect()->route('login')->with('tidak_login', 'login');
        }
        $data['tentangkami'] = DB::table('tb_tentangkami')->get();

        // dd($data['tentangkami']);
        return view('pages.halaman_admin.kelola_tentangkami.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.halaman_admin.kelola_tentangkami.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validasi = $request->validate([
            'deskripsi_tentangkami' => 'required',
            'status_tentangkami' => 'required',
        ], [
            'deskripsi_tentangkami.required' => 'Deskripsi harus diisi',
            'status_tentangkami.required' => 'Wajib diisi',
        ]);

        $gambarPaths = [];

        for ($i = 1; $i <= 4; $i++) {
            $gambarFieldName = 'gambar' . $i . '_tentangkami';
            if ($request->hasFile($gambarFieldName)) {
                $path = 'images/' . $gambarFieldName . '/';
                $fileName = $request->file($gambarFieldName)->getClientOriginalName();
                $request->file($gambarFieldName)->move($path, $fileName);
                $gambarPaths[$gambarFieldName] = $path . $fileName;
            } else {
                return back()->with('error', 'Gambar harus diisi');
            }
        }

        $create = Tentangkami::create([
            'id_tentangkami' => Tentangkami::GenerateID(),
            'deskripsi_tentangkami' => $request->deskripsi_tentangkami,
            'gambar1_tentangkami' => $gambarPaths['gambar1_tentangkami'],
            'gambar2_tentangkami' => $gambarPaths['gambar2_tentangkami'],
            'gambar3_tentangkami' => $gambarPaths['gambar3_tentangkami'],
            'gambar4_tentangkami' => $gambarPaths['gambar4_tentangkami'],
            'status_tentangkami' => $request->status_tentangkami,
        ]);

        if ($create) {
            return redirect()->route('tentangkami.index')->with('toast_success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('tentangkami.index')->with('toast_error', 'Data Gagal Ditambahkan');
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
        $data['dataById'] = DB::table('tb_tentangkami')->where('id_tentangkami', '=', $id)->first();

        return view('pages.halaman_admin.kelola_tentangkami.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'deskripsi_tentangkami' => 'required',
        ], [
            'deskripsi_tentangkami.required' => 'Deskripsi harus diisi',
        ]);

        $dataById = Tentangkami::find($id);

        if (!$dataById) {
            return back()->with('error', 'Data tidak ditemukan');
        }

        $gambarPaths = [];

        for ($i = 1; $i <= 4; $i++) {
            $gambarFieldName = 'gambar' . $i . '_tentangkami';
            if ($request->hasFile($gambarFieldName)) {
                $path = 'images/' . $gambarFieldName . '/';
                $fileName = $request->file($gambarFieldName)->getClientOriginalName();
                $request->file($gambarFieldName)->move($path, $fileName);
                $gambarPaths[$gambarFieldName] = $path . $fileName;
            } else {
                return back()->with('error', 'Gambar harus diisi');
            }
        }

        $update = $dataById->update([
            'deskripsi_tentangkami' => $request->deskripsi_tentangkami,
            'gambar1_tentangkami' => $gambarPaths['gambar1_tentangkami'] ?? $dataById->gambar1_tentangkami,
            'gambar2_tentangkami' => $gambarPaths['gambar2_tentangkami'] ?? $dataById->gambar2_tentangkami,
            'gambar3_tentangkami' => $gambarPaths['gambar3_tentangkami'] ?? $dataById->gambar3_tentangkami,
            'gambar4_tentangkami' => $gambarPaths['gambar4_tentangkami'] ?? $dataById->gambar4_tentangkami,
        ]);

        if ($update) {
            return redirect()->route('tentangkami.index')->with('success', 'Data berhasil diperbarui');
        } else {
            return redirect()->route('tentangkami.index')->with('error', 'Data gagal diperbarui');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Tentangkami::where('id_tentangkami', '=', $id)->delete()) {
            return back()->with('toast_success', 'Data Berhasil');
        } else {
            return back()->with('toast_error', 'Data Gagal Ditambahkan');
        }
    }
}
