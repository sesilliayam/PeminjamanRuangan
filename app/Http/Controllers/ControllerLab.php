<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use App\Dosen;
use App\Laboratorium;

class ControllerLab extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratoria = Laboratorium::paginate(5);
        return view('contents.lab.daftarlab', compact('laboratoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mengembalikan view
        $dosen = Dosen::all();
        return view('contents.lab.tambahlab', compact('dosen'));
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
        Laboratorium::create($data);
        return redirect()->route('lab.index')->with(['msg' => 'Berhasil Menambahkan Data Lab']);
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
    public function edit(Laboratorium $lab)
    {
        $dosen = Dosen::all();
        return view('contents.lab.editlab', compact('lab', 'dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laboratorium $lab)
    {
        $lab->update([
            'nama' => $request['nama'],
            'dosen_id' => $request['dosen_id']
        ]);
        return redirect()->route('lab.index')->with(['msg' => 'Berhasil Mengubah Informasi Lab']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laboratorium $lab)
    {
        $lab->delete();
        return back()->with(['msg' => 'Berhasil Menghapus Lab']);
    }
}
