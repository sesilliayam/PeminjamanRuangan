@extends('layouts.master_layout')

@section('page_title','Tambah Dosen')

@section('title','Tambah Dosen - Peminjaman Ruangan')

@section('content')
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">

        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-block">
                    <form class="form-horizontal form-material" action="{{ route('dosen.store') }}" method="post">
                        @csrf
                        {{-- token untuk form laravel --}}
                        <div class="form-group">
                            <label class="col-md-12">NIK</label>
                            <div class="col-md-12">
                                <input type="text" name="nik" placeholder="Contoh: 123123"
                                       class="form-control form-control-line">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Kode Dosen</label>
                            <div class="col-md-12">
                                <input type="text" name="kode_dosen" placeholder="Contoh: ETO"
                                       class="form-control form-control-line">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Nama Dosen</label>
                            <div class="col-md-12">
                                <input type="text" name="nama" placeholder="Contoh: Edi Sutoyo"
                                       class="form-control form-control-line">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Jurusan</label>
                            <div class="col-md-12">
                                <input type="text" name="jurusan" placeholder="Contoh: Sistem Informasi"
                                       class="form-control form-control-line">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">User ID</label>
                            <div class="col-md-12">
                                <select name="user_id" id="user_id" class="form-control">
                                    @foreach($user as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                {{--  --}}
                                <button class="btn btn-success" type="submit">Tambah Dosen</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
@endsection
