@extends('layouts.master_layout')

@section('page_title','Daftar Mahasiswa')

@section('title','Daftar Mahasiswa - Peminjaman Ruangan')

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

                    
                    <h4 class="card-title">Tambah Mahasiswa</h4>
                    <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>User ID</th>
                                <th>Jurusan</th>
                                <th>Kelas</th>
                                <th>Himpunan</th>
                                <th>Laboratorium</th>
                                <th>Action</th>
                                </td>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- index bernilai a dimana a itu dimulai dari 0 -->
                            @foreach($mahasiswas as $index => $a)
                                <tr>
                                    <!-- karena dimulai dari 0 -->
                                    {{-- <td>{{($index++)+1}}</td> --}}
                                    <td>{{$a->id}}</td>
                                    <td>{{$a->nim}}</td>
                                    <td>{{$a->nama}}</td>                                    
                                    <td>{{$a->user_id}}</td>                                    
                                    <td>{{$a->jurusan}}</td>
                                    <td>{{$a->kelas->nama}}</td>
                                    <td>{{$a->himpunan->nama}}</td>
                                    <td>{{$a->laboratorium->nama}}</td>
                                    <td>
                                        <!-- BUTTON EDIT-->
                                        <div class="btn-group">
                                            <form action="{{ route('mahasiswa.destroy', $a->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{route('mahasiswa.edit', $a->id)}}" class="btn btn-info btn-xs tip" title="Edit"><i
                                                        class="fa fa-pencil"></i></a>
                                                <button type="submit" class="btn btn-danger btn-xs tip" title="Delete"><i
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
                            <a class="btn btn-success" href="{{route('mahasiswa.create')}}">Tambah Mahasiswa</a>
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
