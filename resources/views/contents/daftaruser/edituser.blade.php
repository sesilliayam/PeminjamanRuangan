@extends('layouts.master_layout')

@section('page_title','Tambah User')

@section('title','Tambah User - Peminjaman Ruangan')

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
                                        <label class="col-md-12">Username</label>
                                        <div class="col-md-12">
                                            <input type="text" name="username" placeholder="Johnathan Doe" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" name="password" placeholder="*****" class="form-control form-control-line"  id="teksholder" name="example-email" id="example-email">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Confirm Password</label>
                                        <div class="col-md-12">
                                            <input type="password" placeholder="*****" class="form-control form-control-line"  id="teksholder" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                        <a href="{{ route('tambahuser.store') }}"><button class="btn btn-success" type="submit">Tambah User</button></a>
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