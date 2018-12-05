<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
// Use App\Pengguna;

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
        // $users = DB::table('users')->paginate(10);
        $users = User::paginate(5);
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
        User::create($data);
        //return response()->json($data);
        return redirect()->route('users.index')->with(['alert'=>'success', 'msg'=>'Data Berhasil di Disimpan']);
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
    public function edit(User $user)
    {
        // return $user;
        return view('contents.daftaruser.edituser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'role' => $request['role'],
            'status' => $request['status'],
            'password' => $request['password'],
        ]);

        return redirect()->route('users.index')->with(['msg' => 'Berhasil Mengubah Informasi Pengguna']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return back()->with(['msg' => 'Berhasil Menghapus User']);
    }

    // //ditambahin sendiri
    // public function panggildatauser()
    // {
    //     $users = DB::table('Penggunas')->paginate(10);
    //     return view('contents.daftaruser.users', ['users' => $users]);
    // }

    // public function tambahuser(){
    //     return view('contents.daftaruser.tambahuser');
    // }
}
