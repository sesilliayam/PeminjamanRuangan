@extends('layouts.master_layout')

@section('page_title','Tambah Kelas')

@section('title','Tambah Kelas - Peminjaman Ruangan')

@section('content')
 <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                   
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                            <form class="form-horizontal form-material" action="{{route('kelas.store')}}" method="post">
                                    @csrf
                                    {{-- token untuk form laravel --}}
                                    <div class="form-group">
                                        <h3 class="col-md-12">Nama</h3>
                                        <div class="col-md-12">
                                            <input type="text" name="nama" placeholder="Contoh: SI-40-01" class="form-control form-control-line" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                            <h3 class="col-md-12">Dosen Wali</h3>
                                            <div class="col-md-12">
                                                <select name="id_dosenwali" id="id_dosenwali" class="form-control">
                                                    @foreach($dosen as $item)
                                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            {{--  --}}
                                        <input type="submit" class="btn btn-success" type="submit" value="Tambah Kelas">
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