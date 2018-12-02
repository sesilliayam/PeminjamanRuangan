@extends('layouts.master_layout')

@section('page_title','Tambah Mahasiswa')

@section('title','Mahasiswa - Peminjaman Ruangan')

@section('content')
 <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                   
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                            <form class="form-horizontal form-material" action="{{route('mahasiswa.store')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-12">NIM</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Cth: 1202164129" class="form-control form-control-line" name="niim" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Nama</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Cth: Budi Santoso" class="form-control form-control-line"  id="teksholder" name="nama" id="example-email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">User ID</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Cth 1" class="form-control form-control-line" name="user_id" required>
                                        </div>
                                    </div>
                                    
                                        <div class="form-group">
                                        <label class="col-sm-12">Jurusan </label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="jurusan" required>
                                                <option value="Sistem Informasi">Sistem Informasi</option>
                                                <option value="Teknik Industri">Teknik Industri</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-12">Kepengurusan Himpunan</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="himpunan" required>
                                                <option value="0">-</option>
                                                <option value="HMSI">HMSI</option>
                                                <option value="HMTI">HMTI</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                            <label class="col-sm-12">Keanggotaan Laboratorium</label>
                                            <div class="col-sm-12">
                                                <select class="form-control form-control-line" name="laboratorium_id" required>
                                                    <option value="0">-</option>
                                                    <option value="1">Daspro</option>
                                                    <option value="2">Sisjar</option>
                                                    <option value="3">ERP</option>
                                                    <option value="4">BPAD</option>
                                                    <option value="6">EAD</option>
                                                    <option value="7">ITGRC</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="submit" class="btn btn-success" value="Tambah Mahasiswa">
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