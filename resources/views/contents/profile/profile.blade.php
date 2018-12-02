@extends('layouts.master_layout')

@section('page_title','Halaman Profile')

@section('title','Profile - Peminjaman Ruangan')

@section('content')
 <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                   
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-12">NIM</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Nama</label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line"  id="teksholder" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">No. HP</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Ex : 085111222333444" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    
                                        <div class="form-group">
                                        <label class="col-sm-12">Jurusan </label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line">
                                                <option>Sistem Informasi</option>
                                                <option>Teknik Industri</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-12">Kepengurusan Himpunan</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line">
                                                <option>-</option>
                                                <option>HMSI</option>
                                                <option>HMTI</option>
                                            </select>
                                        </div>
                                    </div>

                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Update Profile</button>
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