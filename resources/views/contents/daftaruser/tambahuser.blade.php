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
                                <form class="form-horizontal form-material" action="{{ route('users.store') }}" method="post">
                                    @csrf
                                    {{-- token untuk form laravel --}}
                                    <div class="form-group">
                                        <label class="col-md-12">Nama</label>
                                        <div class="col-md-12">
                                            <input type="text" name="name" placeholder="Johnathan Doe" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="text" name="email" placeholder="jonathan@gmail.com" class="form-control form-control-line">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Role</label>
                                        <div class="col-md-12">
                                            <select name="role" id="role" class="form-control" required>
                                                <option value="admin">Admin</option>
                                                <option value="user">User</option>
                                            </select>
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
                                            {{--  --}}
                                        <button class="btn btn-success" type="submit">Tambah User</button>
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
