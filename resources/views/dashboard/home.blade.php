@extends('dashboard.layouts.app')
@section('title', 'Dashboard')

@section('content')
<!-- top tiles -->
<div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Alumni</span>
              <div class="count">{{ $all }}</div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
            
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Alumni Laki - Laki</span>
              <div class="count green">{{ $jklk }}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Alumni Perempuan</span>
              <div class="count">{{ $jkpr }}</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Prodi</span>
              <div class="count">{{ $prodi }}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            </div>
          </div>
          
          <!-- /top tiles -->
        <div class="row">
            <div class="col-md-1 col-sm-1 col-xs-12"></div>

            <div class="col-md-10 col-sm-10 col-xs-12">
                <hr><center>
                <h3>Hi! Selamat datang di dashboard Aplikasi Data Alumni. :)</h3> 
                <p>Di situs ini kamu dapat melihat histori alumni dan juga mengelola data-data alumni.</p>
                <br>
                <p>Jika ada kesalahan data, silakan menghubungi pengurus dept. IT melalui email: rozaq@localheart.id.</p>
                </p>
                </center>
                <hr>
              </div>

              <div class="col-md-1 col-sm-1 col-xs-12"></div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          @endsection

          <!-- @push('scripts')

          @endpush -->