@extends('dashboard.layouts.app')
@section('title', 'Tambah Alumni')

@section('content')
    <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
              @if (count($errors) > 0)
                <div class="alert alert-danger mt-3">
                  <ul class="m-0">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
            @endif
              
              @if (session('status'))
                <div class="alert alert-success">
                  {{ session('status') }}
                </div>
              @endif

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah Data Alumni</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="{{route('dash.alumni')}}" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                    {{ csrf_field() }}

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nim">Nomor Induk Mahasiswa <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-4">
                          <input type="text" id="npm" name="npm" required="required" class="form-control col-md-7 col-xs-12" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama" name="nama_0152" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-6" for="prodi">Prodi</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <select class="form-control" name="id_prodi" id="prodi" required>
                            <option value="">-- Pilih Prodi --</option>
                            @foreach ($prodi as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_prodi }}</option>
                            @endforeach
                          </select>
                        </div>
                        </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-6" for="agama">Agama</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <select class="form-control" name="agama" id="agama" required>
                            <option value="">-- Pilih Agama --</option>
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Budha">Budha</option>
                          </select>
                        </div>
                        </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="radio" name="jk" value="Laki-Laki" class="flat"> &nbsp; Laki-Laki &nbsp;
                              <input type="radio" name="jk" value="Perempuan" class="flat"> Perempuan
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="email" class="form-control col-md-7 col-xs-12" required="required" name="email" type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hp">No HP <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="hp" class="form-control col-md-7 col-xs-12" required="required" name="hp" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat_lahir">Tempat/Tgl lahir <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-5">
                          <input id="tempat_lahir" class="form-control col-md-7 col-xs-12" required="required" name="tempat_lahir" type="text">
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-5">
                          <input class="form-control col-md-7 col-xs-12" required="required" type="date" name="tgl_lahir"><span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat_asal">Alamat Asal <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-5">
                          <textarea id="alamat_asal" required="required" class="form-control" name="alamat_asal"></textarea>
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-6" for="prov">Provinsi</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <select class="form-control" name="id_provinsi" id="prov" required>
                            <option value="">-- Pilih Provinsi --</option>
                            @foreach ($prov as $data)
                                <option value="{{ $data->id_provinsi }}">{{ $data->nama_provinsi }}</option>
                            @endforeach
                            </select>
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kab">Kabupaten <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="id_kab" class="form-control" disabled required>
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slta_asal">Asal SMA/SMK Sederajat <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-5">
                        <input id="slta_asal" class="form-control col-md-7 col-xs-12" required="required" type="text" name="slta_asal">
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-6" for="thn">Tahun Angkatan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="thn" id="thn" required>
                            <option value="">-- Pilih Tahun --</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                          </select>
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-6">Upload Foto</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" class="form-control" name="foto">
                        </div>
                        </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <input type="submit" class="btn btn-success" value="Submit"/>
						              <button class="btn btn-primary" type="reset">Reset</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
            </div>


@endsection

@push('scripts')
<script src="{{ asset('template/vendors/dropzone/dist/min/dropzone.min.js') }}"></script>

<script src="http://localhost:8000/js/input-masked.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $("select[name=id_provinsi]").change(function(){
            $.get("http://localhost:8000"+"/kab/"+$(this).val(), function(data, status){
              var json = $.parseJSON(data);
                var res = "<option value=''>-- Pilih --</option>";

                $.each(json, function(key,value){
                    res += "<option value='" + value['id_kab'] + "'>" + value['nama_kab'] + "</option>";
                })

                $("select[name=id_kab]").html(res);
                $("select[name=id_kab]").removeAttr("disabled");
            });
        });

        // membuat inputan masking
        $(document).ready(function($){
        		$('#npm').mask("99.99.9999", {placeholder:"__.__.____"});
        	});
    });
</script>
@endpush