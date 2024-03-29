@extends('layouts.app')

@section('head')
<link href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
@endsection

@section('content')

<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Overview</span>
        <h3 class="page-title">Mi Perfil</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Default Light Table -->
    <div class="row">
        <div class="col-lg-4">
        <div class="card card-small mb-4 pt-0">
            <div class="card-header border-bottom text-center">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0 pt-0">
                        <button type="button" id="btnShowReset" class="btn btn-accent mt-0 w-100">Cambiar Contraseña</button>
                        @if(session('success'))
                            <div class="alert alert-success mt-1" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger mt-1" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="py-3" id="contReset">
                            <form action="resetpassword" method="POST" >
                            @csrf
                                <input  class="form-control" type="password" name="current_password" placeholder="Contraseña actual" maxlength="16" required>
                                <input  class="form-control mt-1" type="password" name="new_password" placeholder="Nueva Contraseña" maxlength="16" required>
                                <input  class="form-control mt-1" type="password" name="repit_password" placeholder="Repite Contraseña" maxlength="16" required>
                                <button type="submit" class="btn btn-accent mt-3 w-100">Resetear Contraseña!</button>
                            </form>
                        </div>
                    </li>
                </ul>
            <div class="mb-3 mx-auto">
                <!-- <img class="rounded-circle" src="/assets/images/avatars/1.jpg" alt="User Avatar" width="110">  -->
                <form action="user/{{ auth()->user()->id }}" method="POST" class="php-email-form" >
                @method('PUT')
                <div class="form-group mt-3">
                    <div class="slim rounded-circle" id="slimEdit"
                        data-button-edit-title="Editar"
                        data-button-remove-title="Borrar"
                        data-ratio="1:1"
                        data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cargar Imágen</p></p>"
                        data-size="240,240"
                        style="width: 150px;margin: auto;height: 150px;">
                        <input type="file" name="image"/>
                        @if(auth()->user()->image)
                        <img src="/assets/images/users/{{auth()->user()->image}}">
                        @endif
                    </div>
                </div>
            </div>
            <h4 class="mb-0">{{ auth()->user()->name }}</h4>
            <!-- <span class="text-muted d-block mb-2">Empresa</span> -->
            <button type="button" class="mb-2 btn btn-sm btn-pill btn-primary mr-2 mt-3">
                <i class="material-icons mr-1">person_add</i>{{ auth()->user()->userType->name }}</button>
            </div>
            <ul class="list-group list-group-flush">
            <!-- <li class="list-group-item px-4">
                <div class="progress-wrapper">
                <strong class="text-muted d-block mb-2">Total gastado</strong>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                    <strong class="progress-value">$ 0</strong>
                    </div>
                </div>
                </div>
            </li> -->
            <li class="list-group-item p-4">
                <!-- <strong class="text-muted d-block mb-2">{{ auth()->user()->email }}</strong> -->
                <strong class="text-muted d-block mb-2">Cuenta tipo: {{ auth()->user()->userType->name }}</strong>
                <strong class="text-muted d-block mb-2">Fecha registro: {{ auth()->user()->created_at->format('d/m/y') }}</strong>
                <!-- <strong class="text-muted d-block mb-2">{{ auth()->user()->address }}</strong> -->
                <!-- <strong class="text-muted d-block mb-2">Compras mes: 0</strong> -->
            </li>
            </ul>
        </div>
        </div>
        <div class="col-lg-8">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
            <h6 class="m-0">Detalles de cuenta</h6>
            </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
                <div class="row">
                <div class="col">
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="feFirstName">Nombre</label>
                        <input type="text" name="name" class="form-control" id="feFirstName" placeholder="Nombre" maxlength="26"  value="{{auth()->user()->name}}" autocomplete="off" required> </div>
                        <div class="form-group col-md-3">
                            <label for="feLastName">Empresa</label>
                            <input type="text" name="company" class="form-control" id="feLastName" placeholder="Empresa" maxlength="20" value="{{auth()->user()->company}}" autocomplete="off"> 
                        </div>
                        <div class="form-group col-md-3">
                        <label for="feLastName">RUT</label>
                        <input type="text" name="rut" class="form-control" placeholder="RUT" maxlength="20" value="{{auth()->user()->rut}}" autocomplete="off"> 
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="feEmailAddress">Email</label>
                            <input type="email" name="email" class="form-control" id="feEmailAddress" placeholder="Correo" value="{{auth()->user()->email}}" maxlength="64" autocomplete="off" required disabled> </div>
                            <div class="form-group col-md-6">
                            <!-- Cell Phone -->
                                <label for="cel">Cel - WhatsApp:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <select name="countryCode" class="form-control" autocomplete="off">
                                            <option value="" selected>Seleccione uno...</option>
                                            <option value="+54" {{ auth()->user()->countryCode == '+54' ? 'selected' : '' }}>Argentina (+54)</option>
                                            <option value="+56" {{ auth()->user()->countryCode == '+56' ? 'selected' : '' }}>Chile (+56)</option>
                                            <option value="+57" {{ auth()->user()->countryCode == '+57' ? 'selected' : '' }}>Colombia (+57)</option>
                                            <option value="+52" {{ auth()->user()->countryCode == '+52' ? 'selected' : '' }}>Mexico (+52)</option>
                                            <option value="+51" {{ auth()->user()->countryCode == '+51' ? 'selected' : '' }}>Perú (+51)</option>
                                            <option value="+507" {{ auth()->user()->countryCode == '+507' ? 'selected' : '' }}>Panama (+507)</option>
                                            <option value="+34" {{ auth()->user()->countryCode == '+34' ? 'selected' : '' }}>España (+34)</option>
                                            <option value="+598" {{ auth()->user()->countryCode == '+598' ? 'selected' : '' }}>Uruguay (+598)</option>
                                            <option value="+1" {{ auth()->user()->countryCode == '+1' ? 'selected' : '' }}>USA (+1)</option>
                                        </select>
                                    </div>
                                    <input type="text" id="cel" name="cel" value="{{ auth()->user()->cel }}" class="form-control" maxlength="20" pattern="[0-9]*" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="feInputAddress">Dirección</label>
                            <input type="text" name="address" class="form-control" value="{{auth()->user()->address}}" placeholder="1234 Main St" maxlength="255"  autocomplete="off">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="feInputCity">Ciudad</label>
                                <input type="text" name="city" class="form-control" value="{{auth()->user()->city}}" maxlength="64" autocomplete="off"> 
                            </div>
                            <div class="form-group col-md-4">
                                <label for="feInputState">Región</label>
                                <select id="feInputState" name="region_id" class="form-control" autocomplete="off">
                                    <option value="" selected>Selecciona uno...</option>
                                    @if($regions)
                                        @foreach ($regions as $region)
                                            <option value="{{$region->id}}" @if(auth()->user()->region_id == $region->id) selected="true" @endif>{{$region->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" name="zip" class="form-control" id="inputZip" value="{{auth()->user()->zip}}"maxlength="12" autocomplete="off"> 
                            </div>
                        </div>
                        <button type="submit" class="btn btn-accent">Actualizar Cuenta</button>
                        </form>
                    </div>
                </div>
            </li>
            </ul>
        </div>
        </div>
    </div>
    <!-- End Default Light Table -->
</div>

@endsection

@section('script')	
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function(){
    //muestra oculta div reset password
    $('#contReset').hide();
    $('#btnShowReset').click(function() {
        $('#contReset').toggle();
    });


	// $('#first-table').DataTable({
    //     "pageLength": 100 // Configura el número de elementos por página
    // });

    //si borramos imagen exsistente para saber que exsistia y ya no
    $('.slim-btn-remove').click(function(){
        var secondParent = $(this).parent().parent();
        var hiddenInput = secondParent.find('input[type="hidden"]');
        if (hiddenInput.length > 0) {
            hiddenInput.val("empty");//en el input hidden le ponemos = empty
        }
    });

});


</script>

@endsection