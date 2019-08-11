@extends('dashboard.layouts.app')
@section('title', 'Statisik Tahun')

@section('content')        
        <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tahun</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="tahun"></canvas>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Prodi</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="mybarChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            
            <div class="clearfix"></div>
            <div class="col-md-2 col-sm-2 col-xs-12"></div>

            <div class="row">
              <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Jenis Kelamin</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="jk"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-2 col-sm-2 col-xs-12"></div>
          </div>
@endsection

@push('scripts')
    <script src="{{ asset('template/vendors/Chart.js/dist/Chart.min.js') }}"></script>

    <script>
		var ctx = document.getElementById("tahun").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["2016", "2017", "2018"],
				datasets: [{
					label: '',
					data: [
					{{ $thn2016 }}, 
					{{ $thn2017 }},
          {{ $thn2018 }}
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.5)',
					'rgba(54, 162, 235, 0.5)',
					'rgba(255, 206, 86, 0.5)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});

    var ctx = document.getElementById("jk").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: ["Laki - Laki", "Perempuan"],
				datasets: [{
					label: '',
					data: [
					{{ $jklk }}, 
					{{ $jkpr }}
					],
					backgroundColor: [
					'rgba(73, 169, 234)',
					'rgba(1, 203, 159)'
					],
					borderColor: [
            'rgba(73, 169, 234, 1)',
					'rgba(1, 203, 159, 1)'
					],
					borderWidth: 1
				}]
			}
		});
	</script>
@endpush