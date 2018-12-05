@extends('layouts.master_layout')

@section('page_title','Halaman Tambah Himpunan')

@section('title','Tambah Himpunan - Peminjaman Ruangan')

@section('content')
 <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                   
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" action="{{route('himpunan.store')}}" method="post">

                                        @csrf
                                        {{-- token untuk form laravel --}}
                                        <div class="form-group">
                                            <h3 class="col-md-12">Nama</h3>
                                            <div class="col-md-12">
                                                <input type="text" name="nama" placeholder="Contoh: Himpunan Mahasiswa FRI" class="form-control form-control-line" required>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                                <h3 class="col-md-12">Dosen Pembimbing</h3>
                                                <div class="col-md-12">
                                                    <select name="pembina_id" id="pembina_id" class="form-control">
                                                        @foreach($dosen as $item)
                                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
    
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                {{--  --}}
                                            <input type="submit" class="btn btn-success" type="submit" value="Tambah Himpunan">
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