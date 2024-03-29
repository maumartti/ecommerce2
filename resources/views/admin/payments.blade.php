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
            <button id="descargarPagos" class="btn btn-info" style="float: right;">Descargar pagos mes <i class="material-icons">download</i></button>
            </div>
            <div class="card-body pt-0">
                <div class="container pt-3">
                    <div class="tab-content" id="myTabsContent">
                        <div class="row border-bottom py-2 bg-light">
                                <div class="col-12 col-sm-12">
                                    <div class="table-responsive">
                                        <table id="payments-table" class="table mb-0">
                                                <!-- Encabezados de la tabla de Categorías -->
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th scope="col" class="border-0">Fecha</th>
                                                        <th scope="col" class="border-0">Estado del Pago</th>
                                                        <th scope="col" class="border-0">Código</th>
                                                        <th scope="col" class="border-0">Cliente</th>
                                                        <th scope="col" class="border-0">Correo cliente</th>
                                                        <th scope="col" class="border-0">Cel cliente</th>
                                                        <th scope="col" class="border-0">RUT cliente</th>
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
                                                        <th scope="col" class="border-0">Enviado</th>
                                                        <th scope="col" class="border-0">Tarjeta</th>
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
                                                                        <button class="btn btn-info confirm-modal-button" data-toggle="modal" data-target="#ModalConfirmPay" id="{{$item->code}}" data-item='@json($item)' data-type="payments" data-name="{{$item->code}} - {{$item->userName}} / {{$item->userEmail}} / cel: {{$item->userCel}} / Monto total: ${{ str_replace(',', '.', number_format($item->amountTotal, 0, '.', ',')) }}" data-url="payments">{{$item->status}} <i class="material-icons">upgrade</i></button>
                                                                    @elseif($item->status == 'AUTHORIZED' || 'AUTHORIZED ENVIADO' )
                                                                        <button class="btn btn-success">$ {{$item->status}} 
                                                                            @if($item->status == 'AUTHORIZED')
                                                                                <i class="material-icons">done</i>
                                                                                @else
                                                                                <i class="material-icons">done_all</i>
                                                                            @endif
                                                                        </button>
                                                                    @else    
                                                                        <button class="btn btn-danger">{{$item->status}} <i class="material-icons">error</i></button>
                                                                    @endif   
                                                                    <td>{{$item->payConfirmed}}</td>
                                                                    <td>{{$item->code}}</td>
                                                                    <td>{{$item->userName}}</td>
                                                                    <td>{{$item->userEmail}}</td>
                                                                    <td>{{$item->userCel}}</td>
                                                                    <td>{{$item->userRut}}</td>
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
                                                                    <td>{{$item->userRegionName}}</td>
                                                                    <td>{{$item->userCity}}</td>
                                                                    <td>{{$item->shipping}} / {{$item->shippingTwo}}</td>
                                                                    <td>{{$item->shippingCompanyName}}</td>
                                                                    <td>{{$item->shippingOfficeAddress}}</td>
                                                                    <td>
                                                                    @if($item->deliveredStart !== null)
                                                                        @php $carbonDate = Carbon\Carbon::parse($item->deliveredStart); @endphp
                                                                        <button class="btn btn-success">{{ $carbonDate->format('d/m/Y H:i') }}</button>
                                                                    @else
                                                                        @if($item->shipping !== 'local')
                                                                            @if($item->status === 'AUTHORIZED' && auth()->user()->userType->sales_edit == 1)
                                                                                <button class="btn btn-warning shipping-modal-button" data-toggle="modal" data-target="#ModalConfirmShipping" data-item='@json($item)' data-name="{{$item->shipping}} / a {{$item->shippingTwo}} / mediante: {{$item->shippingCompanyName}} / (Región: {{$item->userRegionName}}, Ciudad: {{$item->userCity}}) - Direccieon: {{$item->shippingTwo == 'local' ? $item->shippingOfficeAddress : $item->userAddress}}" data-type="envio" data-url="shipping">Iniciar Envío <i class="material-icons">local_shipping</i></button>
                                                                            @else
                                                                                <button class="btn btn-warning enviado" data-toggle="modal" data-target="#ModalNoConfirmShipping">NO enviado <i class="material-icons">local_shipping</i></button>
                                                                            @endif
                                                                        @else
                                                                        <button class="btn btn-success">Retira en local</button>
                                                                        @endif
                                                                    @endif 
                                                                    </td>
                                                                    <td>
                                                                    @if($item->payConfirmed !== null && auth()->user()->userType->sales_show == 1)
                                                                        <button data-item='@json($item)' class="btnPrint btn btn-dark">Imprimir Tarjeta <i class="material-icons">print</i></button>
                                                                    @endif
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                        @endif
                                                        @endif
                                                </tbody>
                                        </table>
                                    </div>
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


        <!-- Modal Iniciar envio -->
        @if(auth()->user()->userType->sales_edit == 1)
        <div class="modal fade" id="ModalConfirmShipping">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Iniciar envío</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Dirección:</label>
                            <h4 id="name"></h4>
                        </div>
                        <div class="form-group">
                            <h5 class="text-danger">¿Confirma que se inició el envío de este paquete?</h5>
                            <!-- <h5 class="text-danger deletesub" style="display:none;"><i class="material-icons">warning</i> Atención!! <br> Se eliminarán todas las sub-categorías hijas!</h5> -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-success confirm-shipping-button" id="#" data-url="#">Confirmar el Envío <i class="material-icons">local_shipping</i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Confirmar Pago -->
        <div class="modal fade" id="ModalConfirmPay">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Confirmar Pago</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Código del pago:</label>
                            <h4 id="name"></h4>
                            <img id="image" src="" class="w-100">
                        </div>
                        <div class="form-group">
                            <h5 class="text-danger">¿Está seguro de que desea CONFIRMAR que este pago ya fue acreditado a su cuenta?</h5>
                            <!-- <h5 class="text-danger deletesub" style="display:none;"><i class="material-icons">warning</i> Atención!! <br> Se eliminarán todas las sub-categorías hijas!</h5> -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-success confirm-pay-button" id="#" data-url="#">Confirmar el Pago <i class="material-icons">attach_money</i></button>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- Modal Pago NO CONFIRMADO -->
        <div class="modal fade" id="ModalNoConfirmShipping">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Pago No Confirmado</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <h5 class="text-danger">No es posible procesar el envío si el pago no fue confirmado</h5>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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

	$('#payments-table').DataTable({
        "pageLength": 100, // Configura el número de elementos por página
        "scrollX": true,
        "order": [[1, "desc"]]
    });


    //imprimir datos de envio
    $('.btnPrint').on('click', function () {
        console.log('print');
        var jsonData = $(this).data('item');
        if (typeof jsonData === 'string') {
            jsonData = JSON.parse(jsonData);
        }
        console.log('dataPrint', jsonData);
        var currentDate = new Date(); // Get the current date
        var modifiedItemsNames = jsonData.itemsNames.replace(/,/g, ' / ');
        var arrCount = jsonData.itemsId.split(',');
        // Generate the content to be printed
        if(jsonData.shipping == 'local'){
            var contentToPrint = `
                <img src="/assets/images/{{$web->imageLogo}}" alt="IMG-LOGO">
                <div style="padding:0px 15px">
                <h3>Código de compra: ${jsonData.code}</h3>
                <p>Cliente: ${jsonData.userName}</p>
                <p>Rut: ${jsonData.userRut ? jsonData.userRut : ''}</p>
                <p>Productos: ${modifiedItemsNames}</p>
                <p>Cantidad: ${arrCount.length}</p>
                <p>Región: ${jsonData.userRegionName ? jsonData.userRegionName : ''}</p>
                <p>Ciudad: ${jsonData.userCity}</p>
                <p>Retira Local</p>
                <p>Fecha de partida: ${currentDate.toLocaleDateString()} ${currentDate.toLocaleTimeString()}</p>
                </div>
                <style>
                body {
                    font-family: Arial, sans-serif;
                }
                @media print {
                    /* Hide header information in print version */
                    @page {
                        margin: 0;
                    }
    
                    body {
                        margin: 1.6cm;
                    }
                }
                </style>`;
        }else{
            var contentToPrint = `
                <img src="/assets/images/{{$web->imageLogo}}" alt="IMG-LOGO">
                <div style="padding:0px 15px">
                <h3>Código de compra: ${jsonData.code}</h3>
                <p>Cliente: ${jsonData.userName}</p>
                <p>Rut: ${jsonData.userRut ? jsonData.userRut : ''}</p>
                <p>Productos: ${modifiedItemsNames}</p>
                <p>Cantidad: ${arrCount.length}</p>
                <p>Empresa de envío: ${jsonData.shippingCompanyName}</p>
                <p>Región: ${jsonData.userRegionName ? jsonData.userRegionName : ''}</p>
                <p>Ciudad: ${jsonData.userCity}</p>
                <p>Enviar hacia: ${jsonData.shippingTwo ? (jsonData.shippingTwo === 'casa' ? 'domicilio del comprador' : 'Sucursal de ' + jsonData.shippingCompanyName) : 'Retira Local'}</p>
                <p>Dirección: ${jsonData.userAddress && jsonData.shippingTwo == 'casa' ? jsonData.userAddress : jsonData.shippingOfficeAddress}</p>
                <p>Fecha de partida: ${currentDate.toLocaleDateString()} ${currentDate.toLocaleTimeString()}</p>
                </div>
                <style>
                body {
                    font-family: Arial, sans-serif;
                }
                @media print {
                    /* Hide header information in print version */
                    @page {
                        margin: 0;
                    }
    
                    body {
                        margin: 1.6cm;
                    }
                }
                </style>`;
        }
        // Create a new window for printing
        var printWindow = window.open('', '_blank');
        // Wait for the new window to finish loading before writing content and printing
        //printWindow.onload = function () {
            printWindow.document.write(contentToPrint);
            printWindow.document.close();
            printWindow.print();
        //};
    });



    //botn descargar pagos
    document.getElementById('descargarPagos').addEventListener('click', function () {
        // Realizar una solicitud AJAX para descargar el archivo CSV
        fetch('/exportar-csv-payments') // Ajusta la URL según la ruta de descarga en tu aplicación
            .then(response => response.blob())
            .then(blob => {
                // Crea un enlace temporal y simula un clic para descargar el archivo
                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.download = 'pagos_mes.csv'; // Nombre del archivo CSV
                link.click();
            });
    });


});


</script>

@endsection