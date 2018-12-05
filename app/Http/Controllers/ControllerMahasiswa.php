<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

//model yang dipakai
Use App\Mahasiswa;
Use App\User;
Use App\Himpunan;
Use App\Kelas;
Use App\Laboratorium;

use Illuminate\Http\Request;


class ControllerMahasiswa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show
        // $mahasiswas = DB::table('mahasiswas')->paginate(10);
        $mahasiswas = Mahasiswa::paginate(5);
        return view('contents.datamahasiswa.mahasiswa', compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::where('role', '<>', 'admin')->get();
        $himpunan = Himpunan::all();
        $laboratorium = Laboratorium::all();
        $kelas = Kelas::all();
        return view('contents.datamahasiswa.tambahmahasiswa', compact('user','himpunan','laboratorium','kelas'));
        // return view('contents.datamahasiswa.tambahmahasiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Mahasiswa::create($data);
        return redirect()->route('mahasiswa.index')->with(['msg' => 'Berhasil Menambahkan Data Mahasiswa']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
