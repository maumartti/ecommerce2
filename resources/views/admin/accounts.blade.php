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
        <h3 class="page-title">Usuarios</h3>
        </div>
    </div>



@php
$adminCount = 0;
$userCount = 0;
$shellerCount = 0;

if(isset($users)){
    if($users){
        foreach ($users as $user) {
            if ($user['type'] === 'administrador') {
                $adminCount++;
            }else if ($user['type'] === 'usuario') {
                $userCount++;
            }else if ($user['type'] === 'vendedor') {
                $shellerCount++;
            }
        }
    }
}
@endphp    
    <!-- Small Stats Blocks -->
    <div class="row">
        <div class="col-lg col-md-4 col-sm-4 mb-4">
        <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
                <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Usuarios</span>
                <h6 id="count-product" class="stats-small__value count my-3">{{ $userCount }}</h6>
                </div>
                <!-- <div class="stats-small__data">
                <span class="stats-small__percentage stats-small__percentage--increase">4.7%</span>
                </div> -->
            </div>
            <!-- <canvas height="120" class="blog-overview-stats-small-1"></canvas> -->
            </div>
        </div>
        </div>
        <div class="col-lg col-md-4 col-sm-4 mb-4">
        <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
                <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Vendedores</span>
                <h6 id="count-product" class="stats-small__value count my-3">{{ $shellerCount }}</h6>
                </div>
                <!-- <div class="stats-small__data">
                <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
                </div> -->
            </div>
            <!-- <canvas height="120" class="blog-overview-stats-small-2"></canvas> -->
            </div>
        </div>
        </div>
        <div class="col-lg col-md-4 col-sm-4 mb-4">
        <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
                <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Administradores</span>
                <h6 id="count-product" class="stats-small__value count my-3">{{ $adminCount }}</h6>
                </div>
                <!-- <div class="stats-small__data">
                <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
                </div> -->
            </div>
            <!-- <canvas height="120" class="blog-overview-stats-small-2"></canvas> -->
            </div>
        </div>
        </div>

    </div>
    <!-- End Small Stats Blocks -->


    <!-- End Small Stats Blocks -->
    <div class="row">
        <!-- Users Stats -->
        <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
        <div class="card card-small">
            <div class="card-header border-bottom">
            <h6 class="m-0">Cuentas de usuarios</h6>
            </div>
            <div class="card-body pt-0">
                <div class="container pt-3">
                    <ul class="nav nav-tabs" id="myTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="categories-tab" data-toggle="tab" href="#categories" role="tab" aria-controls="categories" aria-selected="true">Lista de Usuarios</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="subcategories-tab" data-toggle="tab" href="#subcategories" role="tab" aria-controls="subcategories" aria-selected="false">Agregar Usuario</a>
                        </li>
                        <!-- <li class="nav-item" role="presentation">
                                <a class="nav-link" id="empresas-tab" data-toggle="tab" href="#empresas" role="tab" aria-controls="empresas" aria-selected="false">Empresas de transporte</a>
                        </li> -->
                    </ul>
                    <div class="tab-content" id="myTabsContent">
                        <!-- Pestaña de Lista -->
                        <div class="tab-pane fade show active" id="categories" role="tabpanel" aria-labelledby="categories-tab">
                            <div class="row border-bottom py-2 bg-light">
                                    <div class="col-12 col-sm-12">
                                        <table id="users-table" class="table mb-0">
                                            <!-- Encabezados de la tabla de Categorías -->
                                            <thead class="bg-light">
                                                <tr>
                                                    <th scope="col" class="border-0">Foto</th>
                                                    <th scope="col" class="border-0">Nombre</th>
                                                    <th scope="col" class="border-0">Rol</th>
                                                    <th scope="col" class="border-0">Correo</th>
                                                    <th scope="col" class="border-0">Estado</th>
                                                    <th scope="col" class="border-0 text-center">Editar</th>
                                                    <th scope="col" class="border-0 text-center">Borrar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(isset($users))
                                                @if($users)
                                                    @foreach ($users as $index => $item)
                                                    @php
                                                        $key = $index + 1;
                                                    @endphp
                                                    <tr>
                                                        <td><img class="user-avatar rounded-circle" src="@if($item->image) /assets/images/users/{{$item->image}} @else /assets/images/no-user.png @endif" style="width: 30px;" alt="User Avatar"></td>
                                                        <td>{{$item->name}}</td>
                                                        <td>{{$item->type}}</td>
                                                        <td>{{$item->email}}</td>
                                                        <td>@if($item->active == 1)<span class="text-success"><i class="material-icons">check</i>Activo</span> @else <span class="text-danger" style="font-size: 12px;"><i class="material-icons">clear</i>InActivo</span> @endif</td>
                                                        <td class="text-center"><button type="button" class="btn btn-warning edit-button" data-toggle="modal" data-target="#ModalEditOne" data-item='@json($item)' data-subcategories='@json($users)'>Editar <i class="material-icons">edit</i></button></td>
                                                        <td class="text-center">@if($item->id != 1)<button type="button" class="btn btn-danger delete-modal-button"  data-toggle="modal" data-target="#ModalDeleteOne" data-item='@json($item)' data-type="cuenta" data-url="accounts" >Borrar <i class="material-icons">delete</i></button>@endif</td>
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
                        <div class="tab-pane fade" id="subcategories" role="tabpanel" aria-labelledby="subcategories-tab">
                            <!-- Pestaña Nuevo Blog -->
                            <div class="card-body pl-0">
                                <form action="accounts" method="POST" id="FormSaveDataAbout" class="quick-post-form php-email-form" >
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="name">Nombre:</label>
                                            <input name="name" class="form-control form-control-lg mb-3" type="text" placeholder="Nombre de Usuario" maxlength="100" autocomplete="off" required>
                                            <label for="email">Correo:</label>
                                            <input name="email" class="form-control form-control-lg mb-3" type="email" placeholder="Correo electrónico" maxlength="100" autocomplete="off" required>
                                            <label for="password">Contraseña:</label>
                                            <input name="password" class="form-control form-control-lg mb-3" type="password" placeholder="Contraseña" maxlength="12" autocomplete="off" required>
                                            <input name="password_confirmation" class="form-control form-control-lg mb-3" type="password" placeholder="Repite Contraseña" maxlength="12" autocomplete="off" required>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="slim"
                                                    data-button-edit-title="Editar"
                                                    data-button-remove-title="Borrar"
                                                    data-ratio="4:4"
                                                    data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cargar Imágen</p></p>"
                                                    data-size="100,100"
                                                    style="background:#e6e6e6">
                                                    <input type="file" name="image"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="type">Typo de cuenta:</label>
                                                <select name="type" id="type" class="form-control" autocomplete="off" required>
                                                    <option value="" selected>Seleccionar una...</option>
                                                    <option value="administrador">Administrador</option>
                                                    <option value="usuario">Usuario</option>
                                                    <option value="vendedor">Vendedor</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="estado-publicacion">Estado de Publicación:</label>
                                                <select name="active" id="estado-publicacion" class="form-control" autocomplete="off" required>
                                                    <option value="1" selected>Activo</option>
                                                    <option value="0">Inactivo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-accent btn-block">Agregar Usuario</button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- End Users Stats -->
        <!-- Users By Device Stats -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card card-small h-100">
                <div class="card-header border-bottom">
                <h6 class="m-0">Permisos de usuario</h6>
                </div>
                <div class="card-body py-0">
                    <div class="row">
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Borrar Categoria-blog-->
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
                            <h5 class="text-danger">¿Está seguro de que desea borrar esta <span class="type"></span>?</h5>
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

	// $('#first-table').DataTable({
    //     "pageLength": 100 // Configura el número de elementos por página
    // });

});


</script>

@endsection