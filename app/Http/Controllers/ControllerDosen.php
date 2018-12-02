<?php

namespace App\Http\Controllers;

use App\Dosen;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
Use App\Pengguna;
use Illuminate\Http\Request;


class ControllerDosen extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosens = DB::table('Dosens')->paginate(10);
        return view('contents.datadosen.dosen', ['dosens' => $dosens]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mengembalikan view
        $user = User::where('role', '<>', 'admin')->get();
        return view('contents.datadosen.tambahdosen', compact('user'));
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

        Dosen::create($data);

        return redirect()->route('dosen.index')->with(['msg' => 'Berhasil Menambahkan Dosen']);
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
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return back()->with(['msg' => 'Berhasil Menghapus Dosen']);
    }
}
