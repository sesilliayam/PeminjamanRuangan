<?php

namespace App\Http\Controllers;

use App\CleaningService;
use Illuminate\Http\Request;

class CSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cs = CleaningService::get();
        return view('contents.datacs.daftarcs', compact('cs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CleaningService  $cleaningService
     * @return \Illuminate\Http\Response
     */
    public function show(CleaningService $cleaningService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CleaningService  $cleaningService
     * @return \Illuminate\Http\Response
     */
    public function edit(CleaningService $cleaningService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CleaningService  $cleaningService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CleaningService $cleaningService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CleaningService  $cleaningService
     * @return \Illuminate\Http\Response
     */
    public function destroy(CleaningService $cleaningService)
    {
        $cleaningService->delete();
    }
}
