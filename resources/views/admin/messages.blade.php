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
        <h3 class="page-title">Mensajes</h3>
        </div>
    </div>

   
    <!-- End Small Stats Blocks -->
    <div class="row">
        <!-- Users Stats -->
        <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
        <div class="card card-small">
            <div class="card-header border-bottom">
            <h6 class="m-0">Mensajes recibidos</h6>
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
                                                            <th scope="col" class="border-0">#</th>
                                                            <th scope="col" class="border-0">Correo</th>
                                                            <th scope="col" class="border-0">Mensaje</th>
                                                            <th scope="col" class="border-0">Fecha</th>
                                                            <!-- <th scope="col" class="border-0 text-center">Ver</th> -->
                                                            <!-- <th scope="col" class="border-0 text-center">Borrar</th> -->
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                        @if(isset($messages))
                                                        @if($messages)
                                                                @foreach ($messages as $index => $item)
                                                                @php
                                                                    $key = $index + 1;
                                                                @endphp
                                                                <tr>
                                                                    <td>{{$key}}</td>
                                                                    <td>{{$item->email}}</td>
                                                                    <td>{{$item->text}}</td>
                                                                    <td>{{$item->created_at->format('d/m/Y H:i')}}</td>
                                                                    <!-- <td class="text-center"><button type="button" class="btn btn-info edit-button" data-toggle="modal" data-target="#ModalEditOne" data-item='@json($item)' >Ver <i class="material-icons">visibility</i></button></td> -->
                                                                    <!-- <td class="text-center"><button type="button" class="btn btn-danger delete-modal-button"  data-toggle="modal" data-target="#ModalDeleteOne" data-item='@json($item)' data-type="producto" data-url="products" >Borrar <i class="material-icons">delete</i></button></td> -->
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
         "pageLength": 100 // Configura el número de elementos por página
    });

});


</script>

@endsection