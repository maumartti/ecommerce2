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
        <h3 class="page-title">Subscriptores</h3>
        </div>
    </div>

   
    <!-- End Small Stats Blocks -->
    <div class="row">
        <!-- Users Stats -->
        <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
        <div class="card card-small">
            <div class="card-header border-bottom">
            <h6 class="m-0">Lista de Subscriptores:  @if(isset($subscribers)) @if($subscribers) <span id="count-product">{{count($subscribers)}}</span> @endif @endif</h6>
            </div>
            <div class="card-body pt-0">
                <div class="container pt-3">
                    <ul class="nav nav-tabs" id="myTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="subscribers-tab" data-toggle="tab" href="#subscribers" role="tab" aria-controls="subscribers" aria-selected="true">Lista de Subscriptores</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="send-tab" data-toggle="tab" href="#send" role="tab" aria-controls="send" aria-selected="false">Enviar Correo</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabsContent">
                        <div class="tab-pane fade show active" id="subscribers" role="tabpanel" aria-labelledby="subscribers-tab">
                            <div class="row border-bottom py-2 bg-light">
                                <div class="col-12 col-sm-12">
                                    <table id="subscribers-table" class="table mb-0">
                                            <!-- Encabezados de la tabla de Categorías -->
                                            <thead class="bg-light">
                                                    <tr>
                                                        <th scope="col" class="border-0">#</th>
                                                        <th scope="col" class="border-0">Correo</th>
                                                        <th scope="col" class="border-0">Fecha</th>
                                                        <!-- <th scope="col" class="border-0 text-center">Ver</th> -->
                                                        @if(auth()->user()->userType->subscriber_delete == 1)
                                                        <th scope="col" class="border-0 text-center">Borrar</th>
                                                        @endif
                                                    </tr>
                                            </thead>
                                            <tbody>
                                                    @if(isset($subscribers))
                                                    @if($subscribers)
                                                            @foreach ($subscribers as $index => $item)
                                                            @php
                                                                $key = $index + 1;
                                                            @endphp
                                                            <tr>
                                                                <td>{{$key}}</td>
                                                                <td>{{$item->email}}</td>
                                                                <td>{{$item->created_at->format('d/m/Y H:i')}}</td>
                                                                <!-- <td class="text-center"><button type="button" class="btn btn-info edit-button" data-toggle="modal" data-target="#ModalEditOne" data-item='@json($item)' >Ver <i class="material-icons">visibility</i></button></td> -->
                                                                @if(auth()->user()->userType->subscriber_delete == 1)
                                                                <td class="text-center"><button type="button" class="btn btn-danger delete-modal-button"  data-toggle="modal" data-target="#ModalDeleteOne" data-item='@json($item)' data-type="subscriptor" data-url="subscriber" >Borrar <i class="material-icons">delete</i></button></td>
                                                                @endif
                                                            </tr>
                                                            @endforeach
                                                    @endif
                                                    @endif
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="send" role="tabpanel" aria-labelledby="send-tab">
                            <div class="row border-bottom py-2 bg-light">
                                <div class="col-lg-5 col-sm-12">
                                    <div class="form-group pt-3">
                                        <h5>Enviar un correo a todos los subscriptores</h5>
                                        <h6>Enviar una Imágen</h6>
                                        <form action="sendmessagesubs" method="POST" class="quick-post-form php-email-form">
                                             <div class="slim"
                                                data-button-edit-title="Editar"
                                                data-button-remove-title="Borrar"
                                                data-ratio="5:6"
                                                data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cambiar Imágen</p></p>"
                                                data-size="500,600">
                                                <input type="file" name="image" required/>
                                            </div>
                                            <div class="mt-2">
                                                <label for="descripcion">Mensaje (opcional):</label>
                                                <textarea name="message" class="form-control" maxlength="255" rows="2" placeholder="Escribe algo de ser necesario..."></textarea>
                                            </div>
                                            <div class="pt-2 px-0 col-12">
                                                <button type="submit" id="btnSendEmailSubscribers" class="btn btn-primary btn-block" style="font-size: 15px;">
                                                    Enviar a todos los Subscriptores  <img class="mx-2" src="/assets/images/loading.svg" style="display:none;" />
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
        <!-- Modal Borrar Subscriptor -->
        <div class="modal fade" id="ModalDeleteOne">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Eliminar <span class="type"></span></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nombre <span class="type"></span>:</label>
                            <h4 id="name"></h4>
                            <img id="image" src="" class="w-100">
                        </div>
                        <div class="form-group">
                            <h5 class="text-danger">¿Está seguro de que desea borrar este <span class="type"></span>?</h5>
                            <h5 class="text-danger deletesub" style="display:none;"><i class="material-icons">warning</i> Atención!! <br> Se eliminarán todas las sub-categorías hijas!</h5>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-danger delete-button" id="#" data-url="#">Confirmar y Borrar <i class="material-icons">delete</i></button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection

@section('script')	
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function(){

	$('#subscribers-table').DataTable({
         "pageLength": 100 // Configura el número de elementos por página
    });


    //aparece login en boton y bloquea boton cuando se manda el correo
    $('form.quick-post-form').submit(function() {
        $('img[src="/assets/images/loading.svg"]').show();
        $('button[type="submit"]').prop('disabled', true);
        return true; // Permite que el formulario se envíe
    });

});


</script>

@endsection