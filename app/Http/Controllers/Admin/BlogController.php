<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Session::get('id')) {

            return redirect()->route('login')->with('tidak_login', 'login');
        }
        $data['blog'] = DB::table('tb_blog')->get();

        // dd($data['blog']);
        return view('pages.halaman_admin.kelola_blog.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.halaman_admin.kelola_blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  dd($request->all());
        $validasi = $request->validate(
            [

                'judul_blog' => 'required',
                'author_blog' => 'required',
                'deskripsi_blog' => 'required',
                'link_blog' => 'required',


            ],

            [

                'judul_blog.required' => 'Wajib diisi',
                'author_blog.required' => 'Wajib diisi',
                'deskripsi_blog.required' => 'Wajib diisi',
                'link_blog.required' => 'Wajib diisi',
            ]
        );


        if ($request->hasFile('gambar_blog')) {
            $path = 'images/gambar_blog/';
            $request->file('gambar_blog')->move($path, $request->file('gambar_blog')->getClientOriginalName());

            $gambar_blog = $path . $request->file('gambar_blog')->getClientOriginalName();
        } else {

            return back()->with('error', 'Gambar harus diisi');
        }

        $create = Blog::create([
            'id_blog' => Blog::GenerateID(),
            'judul_blog' => $request->judul_blog,
            'author_blog' => $request->author_blog,
            'deskripsi_blog' => $request->deskripsi_blog,
            'link_blog' => $request->link_blog,
            'gambar_blog' => $gambar_blog
        ]);


        if ($create) {
            return redirect()->route('blog.index')->with('toast_success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('blog.index')->with('toast_error', 'Data Gagal Ditambahkan');
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
        $data['dataById'] = DB::table('tb_blog')->where('id_blog', '=', $id)->first();

        return view('pages.halaman_admin.kelola_blog.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $validasi = $request->validate(
            [

                'judul_blog' => 'required',
                'author_blog' => 'required',
                'deskripsi_blog' => 'required',
                'link_blog' => 'required',

            ],

            [

                'judul_blog.required' => 'Wajib diisi',
                'author_blog.required' => 'Wajib diisi',
                'deskripsi_blog.required' => 'Wajib diisi',
                'link_blog.required' => 'Wajib diisi',
            ]
        );

        $dataById = DB::table('tb_blog')->where('id_blog', '=', $id)->first();

        if ($request->hasFile('gambar_blog')) {
            $path = 'images/gambar_blog/';
            $request->file('gambar_blog')->move($path, $request->file('gambar_blog')->getClientOriginalName());

            $gambar_blog = $path . $request->file('gambar_blog')->getClientOriginalName();
        } else {
            $gambar_blog = $dataById->gambar_blog;
        }

        $update = blog::where('id_blog', '=', $id)->update([
            'id_blog' => Blog::GenerateID(),
            'judul_blog' => $request->judul_blog,
            'author_blog' => $request->author_blog,
            'deskripsi_blog' => $request->deskripsi_blog,
            'link_blog' => $request->link_blog,
            'gambar_blog' => $gambar_blog
        ]);


        if ($update) {
            return redirect()->route('blog.index')->with('success', 'Data Berhasil Di Update');
        } else {
            return redirect()->route('blog.index')->with('error', 'Data Gagal Di Update');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Blog::where('id_blog', '=', $id)->delete()) {
            return back()->with('toast_success', 'Data Berhasil');
        } else {
            return back()->with('toast_error', 'Data Gagal Ditambahkan');
        }
    }
}