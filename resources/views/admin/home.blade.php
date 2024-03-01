@extends('layouts.app')

@section('content')

<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Dashboard</span>
        <h3 class="page-title">Datos Generales</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    <div class="row">
        <div class="col-lg col-md-6 col-sm-6 mb-4">
        <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
                <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Pedidos Totales</span>
                <h6 class="stats-small__value count my-3">{{$paymentsAllCount}}</h6>
                </div>
                <div class="stats-small__data">
                <!-- <span class="stats-small__percentage stats-small__percentage--increase">124.7%</span> -->
                </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-5"></canvas>
            </div>
        </div>
        </div>
        <div class="col-lg col-md-6 col-sm-6 mb-4">
        <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
                <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Ventas Totales</span>
                <h6 class="stats-small__value count my-3">{{$salesAllCount}}</h6>
                </div>
                <div class="stats-small__data">
                <!-- <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span> -->
                </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-1"></canvas>
            </div>
        </div>
        </div>
        <div class="col-lg col-md-4 col-sm-6 mb-4">
        <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
                <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Pedidos del mes</span>
                <h6 class="stats-small__value count my-3">{{$ordersMonthCount}}</h6>
                </div>
                <div class="stats-small__data">
                <span class="stats-small__percentage {{ $differenceOrdersLastMonth >= 0 ? 'stats-small__percentage--increase' : 'stats-small__percentage--decrease' }}">{{$differenceOrdersLastMonth}}%</span>
                </div>
            </div>
            <canvas height="125" class="{{ $differenceOrdersLastMonth >= 0 ? 'blog-overview-stats-small-2' : 'blog-overview-stats-small-4' }}"></canvas>
            </div>
        </div>
        </div>
        <div class="col-lg col-md-4 col-sm-6 mb-4">
        <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
                <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Ventas del mes</span>
                <h6 class="stats-small__value count my-3">{{$salesMonthCount}}</h6>
                </div>
                <div class="stats-small__data">
                <span class="stats-small__percentage {{ $differenceSalesLastMonth >= 0 ? 'stats-small__percentage--increase' : 'stats-small__percentage--decrease' }}">{{$differenceSalesLastMonth}}%</span>
                </div>
            </div>
            <canvas height="120" class="{{ $differenceSalesLastMonth >= 0 ? 'blog-overview-stats-small-two-2' : 'blog-overview-stats-small-two-4' }}"></canvas>
            </div>
        </div>
        </div>
        <div class="col-lg col-md-4 col-sm-12 mb-4">
        <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
                <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Clientes</span>
                <h6 class="stats-small__value count my-3">{{$usersCount}}</h6>
                </div>
                <div class="stats-small__data">
                <!-- <span class="stats-small__percentage stats-small__percentage--decrease">2.4%</span> -->
                </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-5"></canvas>
            </div>
        </div>
        </div>
    </div>
    <!-- End Small Stats Blocks -->
    <div class="row">
        <!-- Users Stats -->
        <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
        <div class="card card-small">
            <div class="card-header border-bottom">
            <h6 class="m-0">Ventas</h6>
            </div>
            <div class="card-body pt-0">
            <!-- <div class="row border-bottom py-2 bg-light">
                <div class="col-12 col-sm-6">
                <div id="blog-overview-date-range" class="input-daterange input-group input-group-sm my-auto ml-auto mr-auto ml-sm-auto mr-sm-0" style="max-width: 350px;">
                    <input type="text" class="input-sm form-control" name="start" placeholder="Start Date" id="blog-overview-date-range-1">
                    <input type="text" class="input-sm form-control" name="end" placeholder="End Date" id="blog-overview-date-range-2">
                    <span class="input-group-append">
                    <span class="input-group-text">
                        <i class="material-icons"></i>
                    </span>
                    </span>
                </div>
                </div>
                <div class="col-12 col-sm-6 d-flex mb-2 mb-sm-0">
                <button type="button" class="btn btn-sm btn-white ml-auto mr-auto ml-sm-auto mr-sm-0 mt-3 mt-sm-0">View Full Report &rarr;</button>
                </div>
            </div> -->
            <canvas height="130" style="max-width: 100% !important;" class="blog-overview-users"></canvas>
            </div>
        </div>
        </div>
        <!-- End Users Stats -->
        <!-- Users By Device Stats -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card card-small h-100">
            <div class="card-header border-bottom">
            <h6 class="m-0">Pedidos, Ventas, Enviados</h6>
            </div>
            <div class="card-body d-flex py-0">
            <canvas height="220" class="blog-users-by-device m-auto"></canvas>
            </div>
            <div class="card-footer border-top">
            <!-- <div class="row">
                <div class="col">
                <select class="custom-select custom-select-sm" style="max-width: 130px;">
                    <option selected>Semana pasada</option>
                    <option value="1">Hot</option>
                    <option value="2">Mes Pasado</option>
                    <option value="3">Este Año</option>
                </select>
                </div>
                <div class="col text-right view-report">
                <a href="#">Full report &rarr;</a>
                </div>
            </div> -->
            </div>
        </div>
        </div>
        <!-- End Users By Device Stats -->
        <!-- New Draft Component -->
        <!-- <div class="col-lg-5 col-md-6 col-sm-12 mb-4">
        <div class="card card-small h-100">
            <div class="card-header border-bottom">
            <h6 class="m-0">Datos de  portada</h6>
            </div>
            <div class="card-body d-flex flex-column">
                
            </div>
        </div>
        </div> -->
        <!-- End New Draft Component -->
        <!-- Discussions Component -->
        <!-- <div class="col-lg-7 col-md-12 col-sm-12 mb-4">
        <div class="card card-small blog-comments">
            <div class="card-header border-bottom">
            <h6 class="m-0">Discussions</h6>
            </div>
            <div class="card-body p-0">
            <div class="blog-comments__item d-flex p-3">
                <div class="blog-comments__avatar mr-3">
                <img src="images/avatars/1.jpg" alt="User avatar" /> </div>
                <div class="blog-comments__content">
                <div class="blog-comments__meta text-muted">
                    <a class="text-secondary" href="#">James Johnson</a> on
                    <a class="text-secondary" href="#">Hello World!</a>
                    <span class="text-muted">– 3 days ago</span>
                </div>
                <p class="m-0 my-1 mb-2 text-muted">Well, the way they make shows is, they make one show ...</p>
                <div class="blog-comments__actions">
                    <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-white">
                        <span class="text-success">
                        <i class="material-icons">check</i>
                        </span> Approve </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-danger">
                        <i class="material-icons">clear</i>
                        </span> Reject </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-light">
                        <i class="material-icons">more_vert</i>
                        </span> Edit </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="blog-comments__item d-flex p-3">
                <div class="blog-comments__avatar mr-3">
                <img src="images/avatars/2.jpg" alt="User avatar" /> </div>
                <div class="blog-comments__content">
                <div class="blog-comments__meta text-muted">
                    <a class="text-secondary" href="#">James Johnson</a> on
                    <a class="text-secondary" href="#">Hello World!</a>
                    <span class="text-muted">– 4 days ago</span>
                </div>
                <p class="m-0 my-1 mb-2 text-muted">After the avalanche, it took us a week to climb out. Now...</p>
                <div class="blog-comments__actions">
                    <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-white">
                        <span class="text-success">
                        <i class="material-icons">check</i>
                        </span> Approve </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-danger">
                        <i class="material-icons">clear</i>
                        </span> Reject </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-light">
                        <i class="material-icons">more_vert</i>
                        </span> Edit </button>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="card-footer border-top">
            <div class="row">
                <div class="col text-center view-report">
                <button type="submit" class="btn btn-white">View All Comments</button>
                </div>
            </div>
            </div>
        </div>
        </div> -->
        <!-- End Discussions Component -->
        <!-- Top Referrals Component -->
        <!-- <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
        <div class="card card-small">
            <div class="card-header border-bottom">
            <h6 class="m-0">Top Referrals</h6>
            </div>
            <div class="card-body p-0">
            <ul class="list-group list-group-small list-group-flush">
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">GitHub</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">19,291</span>
                </li>
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">Stack Overflow</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">11,201</span>
                </li>
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">Hacker News</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">9,291</span>
                </li>
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">Reddit</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">8,281</span>
                </li>
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">The Next Web</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">7,128</span>
                </li>
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">Tech Crunch</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">6,218</span>
                </li>
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">YouTube</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">1,218</span>
                </li>
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">Adobe</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">827</span>
                </li>
            </ul>
            </div>
            <div class="card-footer border-top">
            <div class="row">
                <div class="col">
                <select class="custom-select custom-select-sm">
                    <option selected>Last Week</option>
                    <option value="1">Today</option>
                    <option value="2">Last Month</option>
                    <option value="3">Last Year</option>
                </select>
                </div>
                <div class="col text-right view-report">
                <a href="#">Full report &rarr;</a>
                </div>
            </div>
            </div>
        </div>
        </div> -->
        <!-- End Top Referrals Component -->
    </div>
</div>

@endsection

@section('script')	
		<script>
			$(document).ready(function(){

                // Si el tipo de usuario es 1, redirige a la URL de perfil xq no es admin
                @if (auth()->user()->type_id == 1)
                    window.location.href = 'https://tiendasacuanjoche.com/admin/profile';
                @endif

				//si borramos imagen exsistente para saber que exsistia y ya no
                $('.slim-btn-remove').click(function(){
                    var secondParent = $(this).parent().parent();
                    var hiddenInput = secondParent.find('input[type="hidden"]');
                    if (hiddenInput.length > 0) {
                        hiddenInput.val("empty");//en el input hidden le ponemos = empty
                    }
                });
            });


		    //input number solo numeros inputNumber
		   $('.inputNumber').bind('keypress', function(e) { 
		        return ( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57)) ? false : true ;
		    });
</script>

<!-- CODIGO DATA DE GRAFICOS -->
<script>
$(document).ready(function() {
    // GRAFICO DE TORTA .PEDIDOS,VENTAS,ENTRAGAS
    var ubdData = {
        datasets: [{
            hoverBorderColor: '#ffffff',
            data: [{{ number_format($dataGraph[0], 1)}}, {{ number_format($dataGraph[1], 1)}}, {{ number_format($dataGraph[2], 1)}}],//insertamos los porcentajes
            backgroundColor: [
            'rgba(0,123,255,0.9)',
            'rgba(0,123,255,0.5)',
            'rgba(0,123,255,0.3)'
            ]
        }],
        labels: ["Pedidos", "Ventas", "Envíos"]
        };
        // Options
        var ubdOptions = {
        legend: {
            position: 'bottom',
            labels: {
            padding: 25,
            boxWidth: 20
            }
        },
        cutoutPercentage: 0,
        // Uncomment the following line in order to disable the animations.
        // animation: false,
        tooltips: {
            custom: false,
            mode: 'index',
            position: 'nearest'
        }
        };
        var ubdCtx = document.getElementsByClassName('blog-users-by-device')[0];
        // Generate the users by device chart.
        window.ubdChart = new Chart(ubdCtx, {
        type: 'pie',
        data: ubdData,
        options: ubdOptions
        });
        //END GRAFICO TORTA


        //GRAFICO GRANDE DE VENTAS DEL MES Y MES PASADO
        var bouCtx = document.getElementsByClassName('blog-overview-users')[0];
        // Data
        var bouData = {
        // Generate the days labels on the X axis.
        labels: Array.from(new Array(30), function (_, i) {
            return i === 0 ? 1 : i;
        }),
        datasets: [{
            label: 'Mes Actual',
            fill: 'start',
            data: <?= json_encode(array_values($salesByDayMonth)) ?>,//array venteas de este mes x dia 
            backgroundColor: 'rgba(0,123,255,0.1)',
            borderColor: 'rgba(0,123,255,1)',
            pointBackgroundColor: '#ffffff',
            pointHoverBackgroundColor: 'rgb(0,123,255)',
            borderWidth: 1.5,
            pointRadius: 0,
            pointHoverRadius: 3
        }, {
            label: 'Mes Pasado',
            fill: 'start',
            data:  <?= json_encode(array_values($salesByDayLastMonth)) ?>,//array ventas del mes pasado x dia
            backgroundColor: 'rgba(255,65,105,0.1)',
            borderColor: 'rgba(255,65,105,1)',
            pointBackgroundColor: '#ffffff',
            pointHoverBackgroundColor: 'rgba(255,65,105,1)',
            borderDash: [3, 3],
            borderWidth: 1,
            pointRadius: 0,
            pointHoverRadius: 2,
            pointBorderColor: 'rgba(255,65,105,1)'
        }]
        };
        // Options
        var bouOptions = {
        responsive: true,
        legend: {
            position: 'top'
        },
        elements: {
            line: {
            // A higher value makes the line look skewed at this ratio.
            tension: 0.3
            },
            point: {
            radius: 0
            }
        },
        scales: {
            xAxes: [{
            gridLines: false,
            ticks: {
                callback: function (tick, index) {
                // Jump every 7 values on the X axis labels to avoid clutter.
                return index % 7 !== 0 ? '' : tick;
                }
            }
            }],
            yAxes: [{
            ticks: {
                suggestedMax: 50,
                callback: function (tick, index, ticks) {
                if (tick === 0) {
                    return tick;
                }
                // Format the amounts using Ks for thousands.
                return tick > 999 ? (tick/ 1000).toFixed(1) + 'K' : tick;
                }
            }
            }]
        },
        // Uncomment the next lines in order to disable the animations.
        // animation: {
        //   duration: 0
        // },
        hover: {
            mode: 'nearest',
            intersect: false
        },
        tooltips: {
            custom: false,
            mode: 'nearest',
            intersect: false
        }
        };
        // Generate the Analytics Overview chart.
        window.BlogOverviewUsers = new Chart(bouCtx, {
        type: 'LineWithLine',
        data: bouData,
        options: bouOptions
        });
        // Hide initially the first and last analytics overview chart points.
        // They can still be triggered on hover.
        var aocMeta = BlogOverviewUsers.getDatasetMeta(0);
        aocMeta.data[0]._model.radius = 0;
        aocMeta.data[bouData.datasets[0].data.length - 1]._model.radius = 0;
        // Render the chart.
        window.BlogOverviewUsers.render();
});
</script>
@endsection