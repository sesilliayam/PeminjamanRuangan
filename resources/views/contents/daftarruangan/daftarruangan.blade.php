@extends('layouts.master_layout')

@section('page_title','Halaman Daftar Ruangan')

@section('title','Daftar Ruangan - Peminjaman Ruangan')

@section('content')
<!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <!-- Alert -->
                                @if (session()->has('msg'))
                                    <div class="alert alert-success">
                                        {{ session()->get('msg') }}
                                    </div>
                                @endif
            
                                <h4 class="card-title">Daftar Ruangan</h4>
                                <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Deskripsi</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- index bernilai a dimana a itu dimulai dari 0 -->
                                            @foreach($ruangans as $index => $a)
                                            <tr>
                                                <!-- karena dimulai dari 0 -->
                                                {{-- <td>{{($index++)+1}}</td> --}}
                                                <td>{{$a->id}}</td>
                                                <td>{{$a->nama}}</td>
                                                <td>{{$a->deskripsi}}</td>
                                                <td>
                                                    <!-- BUTTON EDIT-->
                                                    {{-- $a->id itu dimasukkin parameter --}}
                                                        <form action="{{ route('ruangan.destroy',$a->id) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <div class="btn-group">
                                                            <a href="{{ route('ruangan.edit', $a->id) }}" class="btn btn-info btn-xs tip" title="Add New"><i class="fa fa-pencil"></i></a> 
                                                            <button type="submit" class="btn btn-danger btn-xs tip" title="Add New"><i class="fa fa-trash-o"></i></button>
                                                        </div>
                                                        </form>
                                                       
                                            
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="form-group">
                                        <div class="col-sm-12">
                                        <a href="{{route('ruangan.create')}}" class="btn btn-success">Tambah Ruangan</a>
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