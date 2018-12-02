@extends('layouts.master_layout')

@section('page_title','Halaman Daftar User')

@section('title','Daftar User - Peminjaman Ruangan')

@section('content')
<!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Daftar User</h4>
                                <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Date Created</th>
                                                {{-- <th>Password</th> --}}
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- index bernilai a dimana a itu dimulai dari 0 -->
                                            @foreach($users as $index => $a)
                                            <tr>
                                                <!-- karena dimulai dari 0 -->
                                                <td>{{($index++)+1}}</td>
                                                <td>{{$a->name}}</td>
                                                <td>{{$a->email}}</td>
                                                <td>{{$a->created_at}}</td>
                                                {{-- <td>{{$a->password}}</td> --}}
                                                <td>
                                                    <!-- BUTTON EDIT-->
                                                        <div class="btn-group">
                        			                        <a href="#" class="btn btn-info btn-xs tip" title="Add New"><i class="fa fa-pencil"></i></a> 
                                                            <a href="#" class="btn btn-danger btn-xs tip" title="Add New"><i class="fa fa-trash-o"></i></a>
                        		                        </div>
                                            
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="form-group">
                                        <div class="col-sm-12">
                                            {{-- users.create --> users itu nama routnya yang ada di route list --}}
                                        <a href="{{route('users.create')}}"><button class="btn btn-success">Tambah User</button></a>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
<!-- End PAge Content -->
@endsection