@extends('layouts.master_layout')

@section('page_title','Halaman Daftar Admin')

@section('title','Daftar Admin - Peminjaman Ruangan')

@section('content')
<!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Daftar Admin</h4>
                                <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Deskripsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- index bernilai a dimana a itu dimulai dari 0 -->
                                            @foreach($admins as $index => $a)
                                            <tr>
                                                <!-- karena dimulai dari 0 -->
                                                <td>{{($index++)+1}}</td>
                                                <td>{{$a->nama}}</td>
                                                <td>{{$a->deskripsi}}</td>
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
                                        <a href="{{route('ruangan.create')}}" class="btn btn-success">Tambah Admin</a>
                                        </div>
                                    </div>


                                    <div class="pull-right">
                        		
                        	</div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
<!-- End PAge Content -->
@endsection