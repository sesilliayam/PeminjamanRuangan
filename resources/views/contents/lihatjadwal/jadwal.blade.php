@extends('layouts.master_layout')

@section('page_title','Halaman Jadwal')

@section('title','Jadwal - Peminjaman Ruangan')

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
                                <th>ID Pemesan</th>
                                <th>No. HP</th>
                                <th>ID Ruangan</th>
                                <th>Tanggal</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
                                <th>Tujuan</th>
                                <th>Organisasi Terkait</th>
                                {{-- <th>Status</th> --}}
                            </tr>
                            </thead>
                            <tbody>
                            <!-- index bernilai a dimana a itu dimulai dari 0 -->
                            @foreach($data as $index => $a)
                                <tr>
                                    <!-- karena dimulai dari 0 -->
                                    <td>{{($index++)+1}}</td>
                                    <td>{{$a->id_pemesan}}</td>
                                    <td>{{$a->no_hp}}</td>
                                    <td>{{$a->id_ruangan}}</td>
                                    <td>{{$a->tanggal}}</td>
                                    <td>{{$a->jam_mulai}}</td>
                                    <td>{{$a->jam_selesai}}</td>
                                    <td>{{$a->tujuan}}</td>
                                    <td>{{$a->organisasi_terkait}}</td>
                                    {{-- <td>{{$a->status}}</td> --}}
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
                            <a href="tambahuser"><button class="btn btn-success">Tambah Jadwal</button></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
@endsection