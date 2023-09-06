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
                <span class="stats-small__label text-uppercase">Ventas Totales</span>
                <h6 class="stats-small__value count my-3">2,390</h6>
                </div>
                <div class="stats-small__data">
                <span class="stats-small__percentage stats-small__percentage--increase">4.7%</span>
                </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-1"></canvas>
            </div>
        </div>
        </div>
        <div class="col-lg col-md-6 col-sm-6 mb-4">
        <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
                <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Pedidos Totales</span>
                <h6 class="stats-small__value count my-3">182</h6>
                </div>
                <div class="stats-small__data">
                <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
                </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-2"></canvas>
            </div>
        </div>
        </div>
        <div class="col-lg col-md-4 col-sm-6 mb-4">
        <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
                <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Ventas del mes</span>
                <h6 class="stats-small__value count my-3">8,147</h6>
                </div>
                <div class="stats-small__data">
                <span class="stats-small__percentage stats-small__percentage--decrease">3.8%</span>
                </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-3"></canvas>
            </div>
        </div>
        </div>
        <div class="col-lg col-md-4 col-sm-6 mb-4">
        <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
                <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Pedidos del mes</span>
                <h6 class="stats-small__value count my-3">2,413</h6>
                </div>
                <div class="stats-small__data">
                <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
                </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-4"></canvas>
            </div>
        </div>
        </div>
        <div class="col-lg col-md-4 col-sm-12 mb-4">
        <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
                <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Clientes</span>
                <h6 class="stats-small__value count my-3">17,281</h6>
                </div>
                <div class="stats-small__data">
                <span class="stats-small__percentage stats-small__percentage--decrease">2.4%</span>
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
            <div class="row border-bottom py-2 bg-light">
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
            </div>
            <canvas height="130" style="max-width: 100% !important;" class="blog-overview-users"></canvas>
            </div>
        </div>
        </div>
        <!-- End Users Stats -->
        <!-- Users By Device Stats -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card card-small h-100">
            <div class="card-header border-bottom">
            <h6 class="m-0">Pedidos, ventas, cancelaciones</h6>
            </div>
            <div class="card-body d-flex py-0">
            <canvas height="220" class="blog-users-by-device m-auto"></canvas>
            </div>
            <div class="card-footer border-top">
            <div class="row">
                <div class="col">
                <select class="custom-select custom-select-sm" style="max-width: 130px;">
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
        </div>
        <!-- End Users By Device Stats -->
        <!-- New Draft Component -->
        <div class="col-lg-5 col-md-6 col-sm-12 mb-4">
        <!-- Quick Post -->
        <div class="card card-small h-100">
            <div class="card-header border-bottom">
            <h6 class="m-0">Datos de  portada</h6>
            </div>
            <div class="card-body d-flex flex-column">
                
            </div>
        </div>
        <!-- End Quick Post -->
        </div>
        <!-- End New Draft Component -->
        <!-- Discussions Component -->
        <div class="col-lg-7 col-md-12 col-sm-12 mb-4">
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
        </div>
        <!-- End Discussions Component -->
        <!-- Top Referrals Component -->
        <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
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
        </div>
        <!-- End Top Referrals Component -->
    </div>
</div>

@endsection

@section('script')	
		<script>
			$(document).ready(function(){
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

@endsection