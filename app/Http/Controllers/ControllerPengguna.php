<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
Use App\Pengguna;

class ControllerPengguna extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('contents.daftaruser.users');
        $users = DB::table('Users')->paginate(10);
        return view('contents.daftaruser.users', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.daftaruser.tambahuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        $item = new Pengguna($data);
        $item->save();
        //return response()->json($data);
        return back()->with(['alert'=>'success', 'msg'=>'Data Berhasil di Disimpan']);    
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
        $data = Pengguna::findOrFail($id);
        return view('contents.edituser', compact(['data']));
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
        $data = Pengguna::findOrFail($id);
        $data->fill($request->except(['_token']))->save();
        return back()->with(['alert'=>'success', 'msg'=>'Data Berhasil di DiUbah']);
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

    //ditambahin sendiri
    public function panggildatauser()
    {
        $users = DB::table('Penggunas')->paginate(10);
        return view('contents.daftaruser.users', ['users' => $users]);
    }

    public function tambahuser(){
        return view('contents.daftaruser.tambahuser');
    }
}
