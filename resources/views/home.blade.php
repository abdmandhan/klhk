@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>

{{-- {{ Auth::user()->getRoleNames() }} --}}
{{-- {{ Auth::user()->getPermissionNames() }} --}}
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="small-box bg-info">
                <div class="inner">
                <h3>{{count($eselon)}}</h3>
                    <p>Total Data Eselon</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <a href="{{ route('eselon.index') }}" class="small-box-footer">
                    Info lanjut <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="small-box bg-primary">
                <div class="inner">
                <h3>{{count($umum)}}</h3>
                    <p>Total Data Kategori</p>
                </div>
                <div class="icon">
                    <i class="fab fa-chrome"></i>
                </div>
                <a href="{{ route('web_category.index') }}" class="small-box-footer">
                    Info lanjut <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{count($sistem)}}</h3>
                    <p>Total Data Sistem</p>
                </div>
                <div class="icon">
                    <i class="fas fa-window-maximize"></i>
                </div>
                <a href="{{ route('web.index') }}" class="small-box-footer">
                    Info lanjut <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b>Status Web</b></h3>
                </div>
                <div class="card-body">
                    <canvas id="myChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b>Jumlah Per Kategori</b></h3>
                </div>
                <div class="card-body">
                    <canvas id="myChart2" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Aktif', 'Tidak Aktif'],
            datasets: [{
                label: '# of Votes',
                data: [<?php echo count($aktif);?>,<?php echo count($nonaktif);?>],
                backgroundColor: [
                    '#00FF00',
                    '#808080',
                ]
            }]
        },
        options: {
            responsive: true,
        }
    });

    var ctx = document.getElementById('myChart2').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [<?php foreach($kategori as $k){

                echo '\''.$k->name.'\''.',';

            };?>],
            datasets: [{
                data: [<?php $index = 0;
                foreach($jumlah as $j){

                    echo $jumlah[$index].',';
                    $index++;
                }?>],
                label: '# of Votes',
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
@stop
