@extends('layouts.header')
@section('title', 'Pencarian')

@section('content')
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>DATA ALUMNI</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">

                          <!-- Current avatar -->
                          <?php $thn = substr($mhs->npm,0,2); ?>
                          <?php $replace = str_replace('.', '_', $mhs->npm); ?>
                          
                          @if (Session::has('getLogin'))
                            <img class="img-responsive avatar-view" src="http://www.amikom.ac.id/public/fotomhs/20{{$thn}}/{{$replace}}.jpg" alt="Avatar" title="Change the avatar">
                          @else
                            <img class="blur" src="http://www.amikom.ac.id/public/fotomhs/20{{$thn}}/{{$replace}}.jpg" alt="Avatar" title="Change the avatar">
                          @endif
                        
                        </div>
                      </div>
                      <h3>{{ $mhs->nama_0152 }}</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> {{ $mhs->alamat_asal }}
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> {{ $mhs->email }}
                        </li>

                      </ul>
                      <br />

                      
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#judul_ta" id="judul-ta" role="tab" data-toggle="tab" aria-expanded="true">Judul TA</a>
                          </li>
                          <li role="presentation" class=""><a href="#pengalaman_kerja" role="tab" id="pengalaman-kerja" data-toggle="tab" aria-expanded="false">Pengalaman Kerja</a>
                          </li>
                          <li role="presentation" class=""><a href="#data_profile" role="tab" id="data-profile" data-toggle="tab" aria-expanded="false">Profile</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          
                          <div role="tabpanel" class="tab-pane fade active in" id="judul_ta" aria-labelledby="judul-ta">
                            <!-- start recent activity -->
                            <ul class="messages">
                              <li>
                                <div class="message_wrapper">
                                  <h4 class="heading">Judul</h4>
                                  <blockquote class="message">Deskripsi.</blockquote>
                                  <br />
                                  
                                </div>
                              </li>
                            </ul>
                            <!-- end recent activity -->
                          </div>

                          <div role="tabpanel" class="tab-pane fade" id="pengalaman_kerja" aria-labelledby="pengalaman-kerja">
                            <!-- start user projects -->
                            <table class="data table table-striped no-margin">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Nama Pekerjaan</th>
                                  <th>Perusahaan</th>
                                </tr>
                              </thead>
                              <tbody>

                              <?php $no = 0; ?>

                              @foreach($kerja as $data)
                              <?php $no++ ;?>
                                <tr>
                                  <td>{{ $no }}</td>
                                  <td>{{ $data->nama_pekerjaan }}</td>
                                  <td>{{ $data->perusahaan }}</td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <!-- end user projects -->
                          </div>

                          <?php
                            $nohp = substr($mhs->hp, 0, -4) . 'XXXX';
                          ?>

                          @if (Session::has('getLogin'))
                          <div role="tabpanel" class="tab-pane fade" id="data_profile" aria-labelledby="data-profile">
                            <!-- start user projects -->
                            <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Nama:</th>
                                  <td>{{ $mhs->nama_0152 }}</td>
                                </tr>
                                <tr>
                                  <th>Nim:</th>
                                  <td>{{  $mhs->npm }}</td>
                                </tr>
                                <tr>
                                  <th>Jurusan:</th>
                                  <td>{{ $mhs->nama_prodi }}</td>
                                </tr>
                                <tr>
                                  <th>Jenis Kelamin:</th>
                                  <td>{{  $mhs->jk }}</td>
                                </tr>
                                <tr>
                                  <th>Tanggal Lahir:</th>
                                  <td>{{  $mhs->tgl_lahir }}</td>
                                </tr>
                                <tr>
                                  <th>Alamat Asal:</th>
                                  <td>{{  $mhs->alamat_asal }}</td>
                                </tr>
                                <tr>
                                  <th>No HP:</th>
                                  <td>{{  $nohp }}</td>
                                </tr>
                                <tr>
                                  <th>Email:</th>
                                  <td>{{  $mhs->email }}</td>
                                </tr>
                                <tr>
                                  <th>Tempat Lahir:</th>
                                  <td>{{  $mhs->tempat_lahir }}</td>
                                </tr>
                                <tr>
                                  <th>Agama:</th>
                                  <td>{{  $mhs->agama }}</td>
                                </tr>
                                <tr>
                                  <th>Provinsi:</th>
                                  <td>{{  $mhs->nama_provinsi }}</td>
                                </tr>
                                <tr>
                                  <th>Kabupaten:</th>
                                  <td>{{  $mhs->nama_kab }}</td>
                                </tr>
                                <tr>
                                  <th>Negara:</th>
                                  <td>Indonesia</td>
                                </tr>

                              </tbody>
                            </table>
                          </div>
                          @else
                          <div role="tabpanel" class="tab-pane fade" id="data_profile" aria-labelledby="data-profile">
                            <!-- start user projects -->
                            <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Nama:</th>
                                  <td>{{ $mhs->nama_0152 }}</td>
                                </tr>
                                <tr>
                                  <th>Nim:</th>
                                  <td>{{  $mhs->npm }}</td>
                                </tr>
                                <tr>
                                  <th>Jurusan:</th>
                                  <td>{{ $mhs->nama_prodi }}</td>
                                </tr>
                                <tr>
                                  <th>Jenis Kelamin:</th>
                                  <td>{{  $mhs->jk }}</td>
                                </tr>
                                <tr>
                                  <th>......</th>
                                  <td>......</td>
                                </tr>
                              </tbody>
                              </table>
                              
                              <div class="jumbotron">
                                  <h3><center>Anda harus <a style="color: blue;" href="#" data-toggle="modal" data-target=".bs-example-modal-lg">Login</a> dahulu untuk bisa akses semua informasi.</center></h3>
                              </div>
                          </div>
                          @endif
                            <!-- end user projects -->

                          </div>
                          </div>
        <!-- /page content -->

       
    </div>

    <!-- jQuery -->
    <script src="{{ asset('template/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('template/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('template/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('template/vendors/nprogress/nprogress.js') }}"></script>
    <!-- morris.js -->
    <script src="{{ asset('template/vendors/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('template/vendors/morris.js/morris.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('template/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('template/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('template/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('template/build/js/custom.min.js') }}"></script>
    <script src="{{ asset('js/input-masked.js') }}"></script>

		<script>
            // Membuat inputan Masking di form input absen manual dan gagal absen
        	$(document).ready(function($){
        		$('#npm').mask("99.99.9999", {placeholder:"__.__.____"});
        	});

        </script>

  </body>
</html>

@endsection