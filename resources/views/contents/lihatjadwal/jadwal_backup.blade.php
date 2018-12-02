@extends('layouts.master_layout')

@section('page_title','Halaman Jadwal')

@section('title','Jadwal - Peminjaman Ruangan')
@push('css')
    <link rel="stylesheet" href="{{ asset('plugins/scheduler/css/jquery-ui.css') }}"/>
    <link rel="stylesheet" href="{{ asset('plugins/scheduler/css/style.css') }}">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
@endpush

@section('content')
    <div class="col-md-12">
        <div id="schedule"></div>
    </div>
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

@push('js')
    <script src="{{ asset('plugins/scheduler/js/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('plugins/scheduler/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('plugins/scheduler/js/jq.schedule.js') }}"></script>

    <script type="text/javascript">

        $("#schedule").timeSchedule({
            startTime: "08:00", // schedule start time(HH:ii)
            endTime: "16:00",   // schedule end time(HH:ii)
            widthTime:60 * 10,  // cell timestamp example 10 minutes
            timeLineY:70,       // height(px)
            verticalScrollbar:20,   // scrollbar (px)
            dataWidth:150,		// data width
            timeLineBorder:1,   // border(top and bottom)
            debug:"#debug",     // debug string output elements
            rows : {'1':{title:'Ruang Diskusi 1<br>(Maks : &plusmn; 4 Orang)<br><a style="font-weight:bold;cursor:pointer;color:#000" href="javascript:void(0)" onclick="gallery(\'1\')">Lihat Galeri</a>',schedule:[{start:'08:00',end:'10:00',text:'Request',data:{ id : 15560}}]},'2':{title:'Ruang Diskusi 2<br>(Maks : &plusmn; 4 Orang)<br><a style="font-weight:bold;cursor:pointer;color:#000" href="javascript:void(0)" onclick="gallery(\'2\')">Lihat Galeri</a>',schedule:[{start:'13:30',end:'15:30',text:'Request',data:{ id : 15561}}]},'3':{title:'Ruang Diskusi 3<br>(Maks : &plusmn; 4 Orang)<br><a style="font-weight:bold;cursor:pointer;color:#000" href="javascript:void(0)" onclick="gallery(\'3\')">Lihat Galeri</a>',schedule:[]},'4':{title:'Ruang Diskusi 4<br>(Maks : &plusmn; 4 Orang)<br><a style="font-weight:bold;cursor:pointer;color:#000" href="javascript:void(0)" onclick="gallery(\'4\')">Lihat Galeri</a>',schedule:[]},'5':{title:'Ruang Diskusi 5<br>(Maks : &plusmn; 5 Orang)<br><a style="font-weight:bold;cursor:pointer;color:#000" href="javascript:void(0)" onclick="gallery(\'5\')">Lihat Galeri</a>',schedule:[]},'6':{title:'Ruang Diskusi 8<br>(Maks : &plusmn; 7 Orang)<br><a style="font-weight:bold;cursor:pointer;color:#000" href="javascript:void(0)" onclick="gallery(\'8\')">Lihat Galeri</a>',schedule:[]},'7':{title:'Ruang Diskusi 6<br>(Maks : &plusmn; 8 Orang)<br><a style="font-weight:bold;cursor:pointer;color:#000" href="javascript:void(0)" onclick="gallery(\'6\')">Lihat Galeri</a>',schedule:[{start:'13:00',end:'14:30',text:'Request',data:{ id : 15565}}]},'8':{title:'Ruang Diskusi 7<br>(Maks : &plusmn; 8 Orang)<br><a style="font-weight:bold;cursor:pointer;color:#000" href="javascript:void(0)" onclick="gallery(\'7\')">Lihat Galeri</a>',schedule:[{start:'13:00',end:'14:30',text:'Request',data:{ id : 15563}}]},'9':{title:'Ruang Diskusi 10<br>(Maks : &plusmn; 10 Orang)<br><a style="font-weight:bold;cursor:pointer;color:#000" href="javascript:void(0)" onclick="gallery(\'10\')">Lihat Galeri</a>',schedule:[]},'10':{title:'Ruang Diskusi 9<br>(Maks : &plusmn; 10 Orang)<br><a style="font-weight:bold;cursor:pointer;color:#000" href="javascript:void(0)" onclick="gallery(\'9\')">Lihat Galeri</a>',schedule:[{start:'08:30',end:'10:30',text:'Request',data:{ id : 15562}}]},'11':{title:'Mini Theater<br>(Maks : &plusmn; 20 Orang)<br><a style="font-weight:bold;cursor:pointer;color:#000" href="javascript:void(0)" onclick="gallery(\'15\')">Lihat Galeri</a>',schedule:[{start:'09:30',end:'11:30',text:'Request',data:{ id : 15559}}]},'12':{title:'Open Discussion Room<br>(Maks : &plusmn; 20 Orang)<br><a style="font-weight:bold;cursor:pointer;color:#000" href="javascript:void(0)" onclick="gallery(\'14\')">Lihat Galeri</a>',schedule:[{start:'13:00',end:'15:00',text:'Request',data:{ id : 15546}},{start:'09:00',end:'11:00',text:'Request',data:{ id : 15564}}]},'13':{title:'Ruang Diskusi 13<br>(Maks : &plusmn; 20 Orang)<br><a style="font-weight:bold;cursor:pointer;color:#000" href="javascript:void(0)" onclick="gallery(\'13\')">Lihat Galeri</a>',schedule:[]}},
            // change: function(node,data){
            // console.log(data.data.id);
            // },
            init_data: function(node,data){
            },
            click: function(node,data){
                $.ajax({
                    url : 'index.php/booking/detail',
                    type: "POST",
                    data: {
                        id : data.data.id
                    },
                    dataType: "JSON",
                    beforeSend : function() {
                        showLoading();
                    },
                    complete : function() {
                        hideLoading();
                    },
                    success: function(data){
                        $('#modal_calendar .modal-title').html('<i class="fa fa-calendar"></i>&nbsp;&nbsp;'+data.header);
                        $('#modal_calendar .modal-body').html(data.desc);
                        $('#modal_calendar').modal({keyboard: false, backdrop: 'static'});
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        //info_alert('warning','system error');
                    }
                });
            },
            // append: function(node,data){
            // },
            // time_click: function(time,data){
            // console.log(data.data.id);
            // },
        });
    </script>
@endpush
