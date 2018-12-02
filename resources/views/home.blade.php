@extends('layouts.master_layout')

@section('page_title','Dashboard')

@section('title','Dashboard - Peminjaman Ruangan')

@section('content')
<p>Ini bodynya si Dashboard</p>
@endsection

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
     </div>
@endif