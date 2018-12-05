@extends('layouts.master_layout')

@section('page_title','Tambah Cleaning Service')

@section('title','Tambah CS - Peminjaman Ruangan')

@section('content')
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">

        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-block">
                    <form class="form-horizontal form-material" action="{{ route('cs.store') }}" method="post">
                        @csrf
                        {{-- token untuk form laravel --}}
                        <div class="form-group">
                            <label class="col-md-12">NIK</label>
                            <div class="col-md-12">
                                <input type="text" name="nip" placeholder="Contoh: 123123"
                                       class="form-control form-control-line">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Nama Pegawai</label>
                            <div class="col-md-12">
                                <input type="text" name="nama" placeholder="Contoh: Edi Sutoyo"
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
