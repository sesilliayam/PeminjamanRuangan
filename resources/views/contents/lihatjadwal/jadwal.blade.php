@extends('layouts.master_layout')

@section('page_title','Halaman Jadwal')

@section('title','Jadwal - Peminjaman Ruangan')
@push('css')
    <link rel="stylesheet" href="{{ asset('plugins/scheduler/css/style.css') }}">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
@endpush

@section('content')
    <div id="schedule"></div>

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
                                <th>Status</th>
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
                                    <td>{{$a->status}}</td>
                                    {{-- <td>{{$a->status}}</td> --}}
                                    <td>
                                        <!-- BUTTON EDIT-->
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-info btn-xs tip" title="Add New"><i
                                                    class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger btn-xs tip" title="Add New"><i
                                                    class="fa fa-trash-o"></i></a>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <a href="tambahuser">
                                <button class="btn btn-success">Tambah Jadwal</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
@endsection
{{-- 
@push('js')
    <script src="{{ asset('plugins/scheduler/js/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('plugins/scheduler/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('plugins/scheduler/js/jq.schedule.js') }}"></script>

    <script type="text/javascript">

        $("#schedule").timeSchedule({
            startTime: "08:00", // schedule start time(HH:ii)
            endTime: "16:00",   // schedule end time(HH:ii)
            widthTime: 60 * 10,  // cell timestamp example 10 minutes
            timeLineY: 70,       // height(px)
            verticalScrollbar: 20,   // scrollbar (px)
            dataWidth: 150,		// data width
            timeLineBorder: 1,   // border(top and bottom)
            debug: "#debug",     // debug string output elements
            change: false,
            rows: {
                '1': {
                    title: 'KU2.01.02',
                    schedule: [
                        {
                            start: '09:00',
                            end: '12:00',
                            text: 'Waiting Approval',
                            data: {}
                        },
                        {
                            start: '11:00',
                            end: '14:00',
                            text: 'Approved',
                            data: {}
                        }
                    ]
                },
            },
            // change: function(node,data){
            // console.log(data.data.id);
            // },
            init_data: function (node, data) {
            },
            click: function (node, data) {
                $.ajax({
                    url: 'index.php/booking/detail',
                    type: "POST",
                    data: {
                        id: data.data.id
                    },
                    dataType: "JSON",
                    beforeSend: function () {
                    },
                    complete: function () {
                    },
                    success: function (data) {
                        $('#modal_calendar .modal-title').html('<i class="fa fa-calendar"></i>&nbsp;&nbsp;' + data.header);
                        $('#modal_calendar .modal-body').html(data.desc);
                        $('#modal_calendar').modal({keyboard: false, backdrop: 'static'});
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        //info_alert('warning','system error');
                    }
                });
            },
            append: function(node,data){
            },
            time_click: function(time,data){
            console.log(data.data.id);
            },
        });
    </script>
@endpush --}}
