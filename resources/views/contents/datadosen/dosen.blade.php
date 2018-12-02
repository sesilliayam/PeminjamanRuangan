@extends('layouts.master_layout')

@section('page_title','Halaman Daftar Dosen')

@section('title','Daftar Dosen - Peminjaman Ruangan')

@section('content')
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- column -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    @if(session()->has('msg'))
                        <div class="alert alert-success">
                            {{ session()->get('msg') }}
                        </div>
                    @endif
                    <h4 class="card-title">Daftar Dosen</h4>
                    <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>NIK</th>
                                <th>Kode Dosen</th>
                                <th>Nama</th>
                                <th>Jurusan</th>
                                <th>Date Created</th>
                                <th>Action
                                </td>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- index bernilai a dimana a itu dimulai dari 0 -->
                            @foreach($dosens as $index => $a)
                                <tr>
                                    <!-- karena dimulai dari 0 -->
                                    <td>{{($index++)+1}}</td>
                                    <td>{{$a->nik}}</td>
                                    <td>{{$a->kode_dosen}}</td>
                                    <td>{{$a->nama}}</td>
                                    <td>{{$a->jurusan}}</td>
                                    <td>{{$a->created_at}}</td>
                                    <td>
                                        <!-- BUTTON EDIT-->
                                        <div class="btn-group">
                                            <form action="{{ route('dosen.destroy', $a->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="#" class="btn btn-info btn-xs tip" title="Add New"><i
                                                        class="fa fa-pencil"></i></a>
                                                <button type="submit" class="btn btn-danger btn-xs tip" title="Add New"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </form>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <a class="btn btn-success" href="{{route('dosen.create')}}">Tambah Dosen</a>
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
