@extends('layouts.master_layout')

@section('page_title','Tambah Ruangan')

@section('title','Tambah Ruangan - Peminjaman Ruangan')

@section('content')
 <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                   
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" action="{{ route('ruangan.store') }}" method="post">
                                    @csrf
                                    {{-- token untuk form laravel --}}
                                    <div class="form-group">
                                        <h3 class="col-md-12">Nama</h3>
                                        <div class="col-md-12">
                                            <input type="text" name="nama" placeholder="Contoh: KU2.02.02 (B202B)" class="form-control form-control-line" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h3 for="example-email" class="col-md-12">Deskripsi</h3>
                                        <div class="col-md-12">
                                            <input type="text" name="deskripsi" placeholder="Keterangan ruangan" class="form-control form-control-line"  id="teksholder" name="example-email" id="example-email" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            {{--  --}}
                                        <input type="submit" class="btn btn-success" type="submit" value="Tambah Ruangan">
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