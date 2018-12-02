<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
//semacam import di Java, karena tabel Dosen ini perlu model Dosen dan User
// Use App\Pengguna;
use App\Dosen;
use App\User;
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
        //mengambalikan view yang role nya selain admin
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
    public function edit(Dosen $dosen)
    {
        // $user = User::where('role', '<>', 'admin')->get();
        return view('contents.datadosen.editdosen', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Dosen $dosen){
        $dosen->update([
            'nik' => $request['nik'],
            'kode_dosen' => $request['kode_dosen'],
            'nama' => $request['nama'],
            'jurusan' => $request['jurusan'],
            'user_id' => $request['user_id']
        ]);
        return redirect()->route('dosen.index')->with(['msg' => 'Berhasil Mengubah Informasi Ruangan']);
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
