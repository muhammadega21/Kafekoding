<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['heroCount'] = DB::table('tb_hero')->where('status_hero', 'aktif')->count();
        $data['tentangkamiCount'] = DB::table('tb_tentangkami')->where('status_tentangkami', 'aktif')->count();
        $data['showcaseCount'] = DB::table('tb_showcase')->count();
        $data['kelasCount'] = DB::table('tb_kelaskafekoding')->count();


        $data['hero'] = DB::table('tb_hero')->where('status_hero', 'aktif')->first();
        $data['tentangkami'] = DB::table('tb_tentangkami')->where('status_tentangkami', 'aktif')->first();
        $data['showcase'] = DB::table('tb_showcase')->get();
        $data['kelas'] = DB::table('tb_kelaskafekoding')->get();

        // dd($data['hero']);
        return view('Layouts_LandingPage.layout', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}