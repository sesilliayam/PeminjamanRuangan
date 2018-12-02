<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
// Use App\Pengguna;
use App\Ruangan;

class ControllerRuangan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruangans = DB::table('Ruangans')->paginate(10);
        return view('contents.daftarruangan.daftarruangan', compact('ruangans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.daftarruangan.tambahruangan');
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
        // return $data;
        Ruangan::create([
            'nama' => $data['nama'],
            'deskripsi' => $data['deskripsi'],
        ]);

        return redirect()->route('ruangan.index');
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
    public function edit(Ruangan $ruangan)
    {
        //Ruangan di Compact = parameter
        //compact itu adalah array field dan valuenya
        return view('contents.daftarruangan.editruangan', compact('ruangan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
        
    // }

    //Request $request = menyimpan semua input yang menggunakan method post
    //Ruangan $ruangan --> Ruangan itu modelnya, $ruangan itu objeknya
    public function update(Request $request, Ruangan $ruangan)
    {
        $ruangan->update([
            'nama' => $request['nama'],
            'deskripsi' => $request['deskripsi']
        ]);
        return redirect()->route('ruangan.index')->with(['msg' => 'Berhasil Mengubah Informasi Ruangan']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $ruangan = Ruangan::where('id', $id)->first();

    //     $ruangan->delete();

    //     return back();
    // }

    //$ruangan jadi objeknya
    //Ruangan yang huruf besar itu modelnya
    public function destroy(Ruangan $ruangan)
    {
        $ruangan->delete();

        return back()->with(['msg' => 'Berhasil Menghapus']);
    }
}
