@extends('layouts.master_layout')

@section('page_title','Tambah Daftar Laboratorium')

@section('title','Tambah Lab - Peminjaman Ruangan')

@section('content')
 <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                   
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                            <form class="form-horizontal form-material" action="{{route('mahasiswa.store')}}" method="post">
                                    @csrf
                                    {{-- token untuk form laravel --}}
                                    <div class="form-group">
                                        <h3 class="col-md-12">NIM</h3>
                                        <div class="col-md-12">
                                            <input type="text" name="nim" placeholder="Contoh: 1202160000" class="form-control form-control-line" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                            <h3 class="col-md-12">Nama</h3>
                                            <div class="col-md-12">
                                                <input type="text" name="nama" placeholder="Contoh: Budi Santoso" class="form-control form-control-line" required>
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
                                            <h3 class="col-md-12">Jurusan</h3>
                                            <div class="col-md-12">
                                                <input type="text" name="user_id" placeholder="Contoh: 1202160000" class="form-control form-control-line" required>
                                            </div>
                                    </div>

                                    <div class="form-group">
                                            <h3 class="col-md-12">Himpunan</h3>
                                            <div class="col-md-12">
                                                    <select name="himpunan" id="user_id" class="form-control">
                                                        <option value="1">HMSI</option>
                                                        <option value="2">HMTI</option>
                                                    </select>
                                                </div>
                                    </div>

                                    <div class="form-group">
                                            <h3 class="col-md-12">Laboratorium</h3>
                                            <div class="col-md-12">
                                                <input type="text" name="laboratorium_id" placeholder="Contoh: 1202160000" class="form-control form-control-line" required>
                                            </div>
                                    </div>
                                    
                                    

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            {{--  --}}
                                        <input type="submit" class="btn btn-success" type="submit" value="Tambah Laboratorium">
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