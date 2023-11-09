@extends('layouts.app')

@section('head')
<link href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
@endsection

@section('content')

<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Dashboard</span>
        <h3 class="page-title">Pagos</h3>
        </div>
    </div>

   
    <!-- End Small Stats Blocks -->
    <div class="row">
        <!-- Users Stats -->
        <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
        <div class="card card-small">
            <div class="card-header border-bottom">
            <h6 class="m-0">Pagos realizadas</h6>
            </div>
            <div class="card-body pt-0">
                <div class="container pt-3">
                    <div class="tab-content" id="myTabsContent">
                        <div class="row border-bottom py-2 bg-light">
                                <div class="col-12 col-sm-12">
                                        <table id="first-table" class="table mb-0">
                                                <!-- Encabezados de la tabla de Categorías -->
                                                <thead class="bg-light">
                                                        <tr>
                                                            <th scope="col" class="border-0">Estado</th>
                                                            <th scope="col" class="border-0">Fecha</th>
                                                            <th scope="col" class="border-0">Monto</th>
                                                            <th scope="col" class="border-0">Monto Envio</th>
                                                            <th scope="col" class="border-0">Monto Total</th>
                                                            <th scope="col" class="border-0">Cant</th>
                                                            <th scope="col" class="border-0">Nombres</th>
                                                            <th scope="col" class="border-0">Precios</th>
                                                            <th scope="col" class="border-0">Región</th>
                                                            <th scope="col" class="border-0">Ciudad</th>
                                                            <th scope="col" class="border-0">Envío</th>
                                                            <th scope="col" class="border-0">Envío Empresa</th>
                                                            <th scope="col" class="border-0">Envío Destino</th>
                                                            <th scope="col" class="border-0">Código</th>
                                                            <th scope="col" class="border-0">Enviado</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                        @if(isset($payments))
                                                        @if($payments)
                                                                @foreach ($payments as $index => $item)
                                                                @php
                                                                        $key = $index + 1;
                                                                @endphp
                                                                <tr>
                                                                    <td>
                                                                    @if($item->status == 'INICIAL')
                                                                        <button class="btn btn-info delete-modal-button" data-toggle="modal" data-target="#ModalDeleteOne" data-item='@json($item)' data-type="categoría" data-url="categories">{{$item->status}} <i class="material-icons">upgrade</i></button>
                                                                        @else
                                                                        <button class="btn btn-success">{{$item->status}} <i class="material-icons">done</i></button>
                                                                    @endif   
                                                                    <td>{{$item->created_at->format('d/m/Y H:i')}}</td>
                                                                    <td>${{ str_replace(',', '.', number_format($item->amount, 0, '.', ',')) }}</td>
                                                                    <td>${{$item->shipping == 'envio' ? '5.000' : '0'}}</td>
                                                                    <td>${{ str_replace(',', '.', number_format($item->amountTotal, 0, '.', ',')) }}</td>
                                                                    <td>{{count(explode(',', $item->itemsId))}}</td>
                                                                    <td>{{str_replace(',', ' / ', $item->itemsNames);}}</td>
                                                                    <td>
                                                                        @foreach (explode(',', $item->itemsPrices) as $price)
                                                                        ${{ str_replace(',', '.', number_format($price, 0, '.', ',')) }} /
                                                                        @endforeach
                                                                    </td>
                                                                    <td>{{$item->userRegion}}</td>
                                                                    <td>{{$item->userCity}}</td>
                                                                    <td>{{$item->shipping}} / {{$item->shippingTwo}}</td>
                                                                    <td>{{$item->shippingCompanyName}}</td>
                                                                    <td>{{$item->shippingOfficeAddress}}</td>
                                                                    <td>{{$item->code}}</td>
                                                                    <td>
                                                                    @if($item->deliveredStart !== null)
                                                                        @php $carbonDate = Carbon\Carbon::parse($item->deliveredStart); @endphp
                                                                        <button class="btn btn-success">{{ $carbonDate->format('d/m/Y H:i') }}</button>
                                                                    @else
                                                                        <button class="btn btn-warning delete-modal-button" data-toggle="modal" data-target="#ModalDeleteOne" data-item='@json($item)' data-type="categoría" data-url="categories">Iniciar Envío <i class="material-icons">local_shipping</i></button>
                                                                    @endif 
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                        @endif
                                                        @endif
                                                </tbody>
                                        </table>
                                </div>
                                <div class="col-12 col-sm-12 d-flex mb-2 mb-sm-0">
                                        <!-- <button type="button" class="btn btn-sm btn-white ml-auto mr-auto ml-sm-auto mr-sm-0 mt-3 mt-sm-0">View Full Report &rarr;</button> -->
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- End Users Stats -->
        <!-- Users By Device Stats -->
        <!-- <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card card-small h-100">
                <div class="card-header border-bottom">
                <h6 class="m-0">Agregar empresa de envío</h6>
                </div>
                <div class="card-body py-0">
                    <div class="row">
                        
                    </div>
                </div>
            </div>
        </div> -->


    </div>
</div>

@endsection

@section('script')	
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function(){

	$('#first-table').DataTable({
        "pageLength": 100, // Configura el número de elementos por página
        "scrollX": true
    });

});


</script>

@endsection