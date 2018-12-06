@extends('layouts.master_layout')

@section('page_title','Halaman Tambah Jadwal')

@section('title','Tambah Jadwal - Peminjaman Ruangan')

@section('content')
 <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                   
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" action="{{ route('mahasiswa.store') }}" method="post">
                                    @csrf

                                    <div class="form-group">
                                        <label class="col-md-12">Nama Pemesan</label>
                                        <div class="col-md-12">
                                            <select name="id_pemesan" id="id_pemesan" class="form-control">
                                                @foreach($user as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                

                                    <div class="form-group">
                                        <label class="col-md-12">No. HP</label>
                                        <div class="col-md-12">
                                            <input name="no_hp" type="text" placeholder="Contoh: 082216649000" class="form-control form-control-line">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Nama Ruangan</label>
                                        <div class="col-md-12">
                                            <select name="id_ruangan" id="id_ruangan" class="form-control">
                                                @foreach($ruangan as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="col-md-12" class="col-md-12">Tanggal</label>
                                        <div class="col-md-12">
                                            <input name="nama" type="text" placeholder="Contoh: Budi Santoso" class="form-control form-control-line"  id="teksholder" name="example-email" id="example-email">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-12">Jurusan </label>
                                        <div class="col-sm-12">
                                            <select name="jurusan" class="form-control form-control-line">
                                                <option value="Sistem Informasi">Sistem Informasi</option>
                                                <option value="Teknik Industri">Teknik Industri</option>
                                            </select>
                                        </div>
                                    </div>

                                    

                                    <div class="form-group">
                                            <label class="col-md-12">Kepengurusan Himpunan</label>
                                            <div class="col-md-12">
                                                <select name="himpunan_id" id="himpunan_id" class="form-control">
                                                    @foreach($himpunan as $item)
                                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                                <label class="col-md-12">Laboratorium</label>
                                                <div class="col-md-12">
                                                    <select name="laboratorium_id" id="laboratorium_id" class="form-control">
                                                        @foreach($laboratorium as $item)
                                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                </div>
                                    
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit">Simpan Mahasiswa</button>
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