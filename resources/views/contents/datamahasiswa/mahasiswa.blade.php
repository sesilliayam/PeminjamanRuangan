@extends('layouts.master_layout')

@section('page_title','Halaman Daftar Mahasiswa')

@section('title','Daftar Mahasiswa - Peminjaman Ruangan')

@section('content')
<!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Daftar Mahasiswa</h4>
                                <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>NIM</th>
                                                <th>Nama</th>
                                                <th>No. HP</th>
                                                <th>Jurusan</th>
                                                <th>Himpunan</th>
                                                <th>Laboratorium</th>
                                                <th>Date Updated</th>
                                                <th>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- index bernilai a dimana a itu dimulai dari 0 -->
                                            @foreach($mahasiswas as $index => $a)
                                            <tr>
                                                <!-- karena dimulai dari 0 -->
                                                <td>{{($index++)+1}}</td>
                                                <td>{{$a->nim}}</td>
                                                <td>{{$a->nama}}</td>
                                                <td>{{$a->user_id}}</td>
                                                <td>{{$a->jurusan}}</td>
                                                <td>{{$a->himpunan}}</td>
                                                <td>{{$a->laboratorium_id}}</td>
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
                                        <a href="{{route('mahasiswa.create')}}"><button class="btn btn-success">Tambah Mahasiswa</button></a>
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