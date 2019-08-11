<!DOCTYPE html>
<html>
<head>
	<title>Laporan Alumni Universitas Amikom Yogyakarta</title>
	<!-- Bootstrap -->
    <link href="{{ asset('template/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Alumni Universitas Amikom Yogyakarta</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Npm</th>
				<th>Jenis Kelamin</th>
				<th>Tahun</th>
				<th>No Hp</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($alumni as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $p->nama_0152 }}</td>
				<td>{{ $p->npm }}</td>
				<td>{{ $p->jk }}</td>
				<td>{{ $p->thn }}</td>
				<td>{{ $p->hp }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>