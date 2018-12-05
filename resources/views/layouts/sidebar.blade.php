<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                {{-- <li>
                    <a href="{{route('home')}}" class="waves-effect"><i class="fa fa-clock-o m-r-10"
                                                                        aria-hidden="true"></i>Dashboard</a>
                </li> --}}
                <li>
                    <a href="/profile" class="waves-effect"><i class="fa fa-user m-r-10" aria-hidden="true"></i>Profile</a>
                </li>

                <li>
                    <a href="{{route('jadwal.index')}}" class="waves-effect"><i class="fa fa-table m-r-10"
                                                                                aria-hidden="true"></i>Lihat Jadwal</a>
                </li>

                {{-- <li>
                    <a href="{{route('jadwal.index')}}" class="waves-effect"><i class="fa fa-history m-r-10" aria-hidden="true"></i>Histori
                        Peminjaman</a>
                </li> --}}

                <li>
                    <a href="{{route('ruangan.index')}}" class="waves-effect"><i class="fa fa-home m-r-10"
                                                                                 aria-hidden="true"></i>Daftar
                        Ruangan</a>
                </li>

                <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                        <em class="fa fa-database">&nbsp;</em> Master Data <span data-toggle="collapse"
                                                                                 href="#sub-item-1"
                                                                                 class="icon pull-right"><em
                                class="fa fa-plus"></em></span>
                    </a>
                    <ul class="children collapse" id="sub-item-1">
                        {{-- <li><a class="" href="{{route('admin.index')}}">
                                <span class="fa fa-user-o">&nbsp;</span> Data Admin
                            </a>
                        </li> --}}

                        <li>
                            <a href="{{route('users.index')}}" class="waves-effect"><i class="fa fa-users m-r-10"
                                     aria-hidden="true"></i>Daftar User</a>
                        </li>

                        <li><a class="" href="mahasiswa">
                                <span class="fa fa-user-circle">&nbsp;</span> Data Mahasiswa
                            </a>
                        </li>

                        <li>
                            <a class="" href="dosen">
                                <span class="fa fa-user-circle-o">&nbsp;</span> Data Dosen
                            </a>
                        </li>

                        <li>
                            <a class="" href="#">
                                <span class="fa fa-male">&nbsp;</span> Data Cleaning Service
                            </a>
                        </li>

                        <li>
                            <a class="" href="{{route('kelas.index')}}">
                                <span class="fa fa-fort-awesome">&nbsp;</span> Daftar Kelas
                            </a>
                        </li>

                        <li>
                        <a href="{{route('lab.index')}}" class="waves-effect"><i class="fa fa-bookmark-o m-r-10" aria-hidden="true"></i>Daftar
                                Laboratorium</a>
                        </li>

                        <li>
                        <a href="{{route('himpunan.index')}}" class="waves-effect"><i class="fa fa-bookmark m-r-10" aria-hidden="true"></i>Daftar
                                Himpunan</a>
                        </li>
                        <!-- <li><a class="" href="#">
                            <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
                        </a></li> -->
                    </ul>
                {{-- <li><a class="waves-effect" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <em class="fa fa-power-off">&nbsp;</em> Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li> --}}
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
