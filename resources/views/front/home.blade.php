<html>
	<head>
		<title>Aplikasi Alumni</title>
        <link href="{{ asset('template/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/flat-ui.css') }}" rel="stylesheet">
		<style type="text/css">
			body {
				padding-top: 70px;
			}
		</style>
	</head>

	<body>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
					</button>
					<a class="navbar-brand" href="index.php">Aplikasi Alumni</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						@if (Session::has('getLogin'))
							<li style="color: #f6e5f0; padding-top: 13px;"><b>Hallo, Selamat Datang - {{{ Session::get('getLogin') }}}</b> !</font></li>
						@else
                    		<li><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">Login</a></li>
						@endif
					</ul>
				</div>
			</div>
		</div>

        @include('front.modal_login')

	<div class="row">
		<div class="container">
			<div class="well">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
						<div class="panel panel-default">
							<div class="panel-body">
								<legend>Pencarian Anggota</legend>
								<form action="pencarian" method="get">
									<div class="form-group">
										<div class="input-group">
											<input type="hidden" name="aksi" id="aksi" value="cari">
											<input type="text" name="key" required class="form-control" placeholder="Kata Kunci">
											<div class="input-group-btn">
												<button class="btn btn-default" type="submit"><i class="fui-search"></i> Cari</button>
											</div>
										</div>
									</div>
									<div class="form-group">
                                    <label class="checkbox" for="nama">
											<input type="checkbox" data-toggle="checkbox" value="nama_0152" id="nama" name="kategori_pencarian[]" class="custom-checkbox" checked="checked"><span class="icons"><span class="icon-unchecked"></span><span class="icon-checked"></span></span> Nama
										</label>
										<label class="checkbox" for="npm">
											<input type="checkbox" data-toggle="checkbox" value="npm" id="npm" name="kategori_pencarian[]" class="custom-checkbox"><span class="icons"><span class="icon-unchecked"></span><span class="icon-checked"></span></span> NPM
										</label>
										<label class="checkbox" for="prodi">
											<input type="checkbox" data-toggle="checkbox" value="nama_prodi" id="prodi" name="kategori_pencarian[]" class="custom-checkbox"><span class="icons"><span class="icon-unchecked"></span><span class="icon-checked"></span></span> Prodi
										</label>
										<label class="checkbox" for="thn">
											<input type="checkbox" data-toggle="checkbox" value="thn" id="thn" name="kategori_pencarian[]" class="custom-checkbox"><span class="icons"><span class="icon-unchecked"></span><span class="icon-checked"></span></span> Tahun
										</label>
										</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
						<div class="panel panel-default">
							<div class="panel-body">
								<h5>Aplikasi Alumni</h5>
								<h5>Lokasi :</h5> Universitas Amikom Yogyakarta
								<h5>Keterangan :</h5> Aplikasi untuk mencari data alumni
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

        <script src="{{ asset('template/vendors/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('template/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/input-masked.js') }}"></script>

		<script>
            // Membuat inputan Masking di form input absen manual dan gagal absen
        	$(document).ready(function($){
        		$('#npm').mask("99.99.9999", {placeholder:"__.__.____"});
        	});

        </script>
 
</body>
</html>
