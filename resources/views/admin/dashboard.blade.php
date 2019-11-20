@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-cyan">
                <div class="inner">
                    <h3>{{$balai}}</h3>
                    <p>Balai</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="/balai" class="small-box-footer">More info<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-orange">
                <div class="inner">
                    <h3>{{$paket}}</h3>
                    <p>Paket</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="/paket" class="small-box-footer">More info<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <p>Rp</p>
                    <h3>{{number_format($pagu)}}</h3>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="/pagu" class="small-box-footer">More info<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@stop
