@extends('layouts.master_layout')

@section('page_title','Edit Data Dosen')

@section('title','Edit Data Dosen - Peminjaman Ruangan')

@section('content')
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">

        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-block">
                    <!-- Alert -->
                    @if (session()->has('msg'))
                    <div class="alert alert-success">
                        {{ session()->get('msg') }}
                    </div>
                    @endif
                    
                    <form class="form-horizontal form-material" action="{{ route('dosen.update', $dosen->id) }}"  method="post">
                        @csrf
                        {{-- PENTING --}}
                        @method('put')
                        {{-- token untuk form laravel --}}
                        <div class="form-group">
                            <label class="col-md-12">NIK</label>
                            <div class="col-md-12">
                                <input type="text" name="nik" placeholder="Contoh: 123123"
                                       class="form-control form-control-line" value="{{ $dosen->nik }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Kode Dosen</label>
                            <div class="col-md-12">
                                <input type="text" name="kode_dosen" placeholder="Contoh: ETO"
                                       class="form-control form-control-line" value="{{ $dosen->kode_dosen }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Nama Dosen</label>
                            <div class="col-md-12">
                                <input type="text" name="nama" placeholder="Contoh: Edi Sutoyo"
                                       class="form-control form-control-line" value="{{ $dosen->nama }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Jurusan</label>
                            <div class="col-md-12">
                                <input type="text" name="jurusan" placeholder="Contoh: Sistem Informasi"
                                       class="form-control form-control-line" value="{{ $dosen->jurusan }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">User ID</label>
                            <div class="col-md-12">
                                {{-- id user tidak boleh diganti --}}
                                <input type="text" name="user_id" class="form-control" value="{{ $dosen->user_id }}" readonly>
                                {{-- <select name="user_id" id="user_id" class="form-control"> --}}
                                    {{-- @foreach($user as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach --}}
                                {{-- </select> --}}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                {{--  --}}
                                <input type="submit" class="btn btn-success" type="submit" value="Simpan Perubahan Dosen">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->

@endsection
