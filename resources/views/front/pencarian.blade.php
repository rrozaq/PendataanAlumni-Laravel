@extends('layouts.header')
@section('title', 'Pencarian')

@section('content')
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <form action="pencarian" method="get">
                  <div class="input-group">
                    <input type="text" name="key" class="form-control" placeholder="Cari Alumni...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Cari!</button>
                    </span>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
            <div class="col-md-12 col-sm-8 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">

                  @if(session('msg'))
                    <div class="alert alert-success">
                      {{ session('msg') }}
                    </div>
                  @else

                    <h2>Hasil Pencarian : "<b>{{ $q }}</b>"</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">No.</th>
                          <th style="width: 20%">NIM</th>
                          <th>Nama</th>
                          <th>Jurusan</th>
                          </tr>
                      </thead>
                      <tbody>

                    <?php $no = 0; ?>

                    @foreach($mhs as $data)
                    <?php $no++ ;?>
                        <tr>
                            <td>{{ $no }}</td>
                        <td>
                            <a>{{ $data->npm }}</a>
                        </td>
                        <td>
                            {{ $data->nama_0152 }}</a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-success btn-xs">{{ $data->nama_prodi }}</button>
                        </td>
                        <td>
                            <a href="{{route('profile', ['npm'=>$data->npm])}}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                        </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <br/>
                  Halaman : {{ $mhs->currentPage() }} <br/>
                  Jumlah Data : {{ $mhs->total() }} <br/>
                  Data Per Halaman : {{ $mhs->perPage() }} <br/>
                
                  {{ $mhs->links() }}
 
                  </div>
                </div>

              @endif

              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        

    <!-- jQuery -->
    <script src="{{ asset('template/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('template/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('template/vendors/nprogress/nprogress.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('template/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    
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