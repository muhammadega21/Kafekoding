<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Showcase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ShowcaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Session::get('id')) {

            return redirect()->route('login')->with('tidak_login', 'login');
        }
        $data['showcase'] = DB::table('tb_showcase')->get();

        // dd($data['showcase']);
        return view('pages.halaman_admin.kelola_showcase.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.halaman_admin.kelola_showcase.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate(
            [

                'deskripsi_showcase' => 'required',
                'bidang_showcase' => 'required',
                'link_showcase' => 'required',


            ],

            [

                'deskripsi_showcaserequired' => 'Wajib diisi',
                'link_showcase.required' => 'Wajib diisi',
                'bidang_showcase.required' => 'Wajib diisi',
            ]
        );


        if ($request->hasFile('gambar_showcase')) {
            $path = 'images/gambar_showcase/';
            $request->file('gambar_showcase')->move($path, $request->file('gambar_showcase')->getClientOriginalName());

            $gambar_showcase = $path . $request->file('gambar_showcase')->getClientOriginalName();
        } else {

            return back()->with('error', 'Gambar harus diisi');
        }

        $create = Showcase::create([
            'id_showcase' => Showcase::GenerateID(),
            'deskripsi_showcase' => $request->deskripsi_showcase,
            'link_showcase' => $request->link_showcase,
            'bidang_showcase' => $request->bidang_showcase,
            'gambar_showcase' => $gambar_showcase
        ]);


        if ($create) {
            return redirect()->route('showcase.index')->with('toast_success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('showcase.index')->with('toast_error', 'Data Gagal Ditambahkan');
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
        $data['dataById'] = DB::table('tb_showcase')->where('id_showcase', '=', $id)->first();

        return view('pages.halaman_admin.kelola_showcase.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $validasi = $request->validate(
            [

                'deskripsi_showcase' => 'required',
                'link_showcase' => 'required',
                'bidang_showcase' => 'required',

            ],

            [

                'deskripsi_showcase.required' => 'Wajib diisi',
                'link_showcase.required' => 'Wajib diisi',
                'bidang_showcase.required' => 'Wajib diisi',
            ]
        );

        $dataById = DB::table('tb_showcase')->where('id_showcase', '=', $id)->first();

        if ($request->hasFile('gambar_showcase')) {
            $path = 'images/gambar_showcase/';
            $request->file('gambar_showcase')->move($path, $request->file('gambar_showcase')->getClientOriginalName());

            $gambar_showcase = $path . $request->file('gambar_showcase')->getClientOriginalName();
        } else {
            $gambar_showcase = $dataById->gambar_showcase;
        }

        $update = Showcase::where('id_showcase', '=', $id)->update([
            'id_showcase' => Showcase::GenerateID(),
            'deskripsi_showcase' => $request->deskripsi_showcase,
            'link_showcase' => $request->link_showcase,
            'bidang_showcase' => $request->bidang_showcase,
            'gambar_showcase' => $gambar_showcase
        ]);


        if ($update) {
            return redirect()->route('showcase.index')->with('success', 'Data Berhasil Di Update');
        } else {
            return redirect()->route('showcase.index')->with('error', 'Data Gagal Di Update');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Showcase::where('id_showcase', '=', $id)->delete()) {
            return back()->with('toast_success', 'Data Berhasil');
        } else {
            return back()->with('toast_error', 'Data Gagal Ditambahkan');
        }
    }
}
