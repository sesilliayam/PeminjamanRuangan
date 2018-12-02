@extends('layouts.master_layout')

@section('page_title','Ubah Data User')

@section('title','Ubah Data User - Peminjaman Ruangan')

@section('content')
 <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                   
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" action="{{ route('users.update', $user->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    {{-- token untuk form laravel --}}
                                    <div class="form-group">
                                        <label class="col-md-12">Nama</label>
                                        <div class="col-md-12">
                                            <input type="text" name="name" placeholder="Johnathan Doe" class="form-control form-control-line" value="{{ $user->name }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="text" name="email" placeholder="jonathan@gmail.com" class="form-control form-control-line" value="{{ $user->email }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Role</label>
                                        <div class="col-md-12">
                                            <select name="role" id="role" class="form-control" value="{{$user->role}}" required>
                                                <option value="admin">Admin</option>
                                                <option value="user">User</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" name="password" placeholder="*****" class="form-control form-control-line"  id="teksholder" name="example-email" id="example-email" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Confirm Password</label>
                                        <div class="col-md-12">
                                            <input type="password" placeholder="*****" class="form-control form-control-line"  id="teksholder" name="example-email" id="example-email" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            {{--  --}}
                                            <input type="submit" class="btn btn-success" type="submit" value="Simpan Perubahan User">
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
