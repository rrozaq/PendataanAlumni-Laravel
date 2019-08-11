<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ route('dash.home') }}"><i class="fa fa-home"></i> Home </a></li>
                  <li><a><i class="fa fa-table"></i> Data Alumni <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('dash.alumni')}}">Lihat Data Alumni</a></li>
                      <li><a href="{{route('dash.alumni.create')}}">Tambah Data Alumni</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ route('dash.statistik.tahun') }}"><i class="fa fa-bar-chart-o"></i> Statistik Alumni </a></li>
                  <li><a><i class="fa fa-clone"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('cetak.laporan.alumni') }}">Laporan / Tahun</a></li>
                      <li><a href="#">Laporan / Prodi <span class="label label-success pull-right">Coming Soon</span></a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Pengaturan</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Admin <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">Data Admin</a></li>
                      <li><a href="e_commerce.html">Tambah Admin</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> {{ __('Keluar') }}</a></li>
                  </ul>
              </div>

            </div>