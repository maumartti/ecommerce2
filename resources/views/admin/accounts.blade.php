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
                                                        <td>{{$item->userType->name}}</td>
                                                        <td>{{$item->email}}</td>
                                                        <td>@if($item->active == 1)<span class="text-success"><i class="material-icons">check</i>Activo</span> @else <span class="text-danger" style="font-size: 12px;"><i class="material-icons">clear</i>InActivo</span> @endif</td>
                                                        <td class="text-center"><button type="button" class="btn btn-warning edit-button" data-toggle="modal" data-target="#ModalEditOne" data-item='@json($item)' data-type="cuenta" data-url="accounts">Editar <i class="material-icons">edit</i></button></td>
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
                                                    data-ratio="1:1"
                                                    data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cargar Imágen</p></p>"
                                                    data-size="120,120"
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
                                                <select name="type" id="type_id" class="form-control" autocomplete="off" required>
                                                    <option value="" selected>Seleccionar una...</option>
                                                    <option value="1">Usuario</option>
                                                    <option value="2">Vendedor</option>
                                                    <option value="3">Administrador</option>
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
                    @if(auth()->check() && auth()->user()->type_id == 3)
                    <ul class="nav nav-tabs mt-3" id="myTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="usuarios-tab" data-toggle="tab" href="#usuarios" role="tab" aria-controls="usuarios" aria-selected="true">Usuarios</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="vendedores-tab" data-toggle="tab" href="#vendedores" role="tab" aria-controls="vendedores" aria-selected="false">Vendedores</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="administradores-tab" data-toggle="tab" href="#administradores" role="tab" aria-controls="administradores" aria-selected="false">Administradores</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-4" id="myTabsContent">
                        <!-- Pestaña usuarios -->
                        <div class="tab-pane fade show active" id="usuarios" role="tabpanel" aria-labelledby="usuarios-tab">
                            <form action="user_type/1" method="POST" class="php-email-form">
                            @method('PUT')
                                <div class="mb-2 pt-1" style="border: 1px solid silver; border-radius: 4px;">
                                    <h6 class="m-0 ml-3">Categorías:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="category_show" id="x1" type="checkbox" class="form-check-input show-g" {{ $userTypeUsuario->category_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x1">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="category_edit" id="x2" type="checkbox" class="form-check-input" {{$userTypeUsuario->category_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x2">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                        <input name="category_delete" id="x3" type="checkbox" class="form-check-input" {{$userTypeUsuario->category_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x3">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Productos:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="product_show" id="x4" type="checkbox" class="form-check-input show-g" {{$userTypeUsuario->product_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x4">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="product_edit" id="x5" type="checkbox" class="form-check-input" {{$userTypeUsuario->product_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x5">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="product_delete" id="x6" type="checkbox" class="form-check-input" {{$userTypeUsuario->product_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x6">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Ventas:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="sales_show" id="x7" type="checkbox" class="form-check-input show-g" {{$userTypeUsuario->sales_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x7">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="sales_edit" id="x8" type="checkbox" class="form-check-input" {{$userTypeUsuario->sales_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x8">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="sales_delete" id="x9" type="checkbox" class="form-check-input" {{$userTypeUsuario->sales_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x9">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Envíos:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="shipping_show" id="x10" type="checkbox" class="form-check-input show-g" {{$userTypeUsuario->shipping_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x10">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="shipping_edit" id="x11" type="checkbox" class="form-check-input" {{$userTypeUsuario->shipping_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x11">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="shipping_delete" id="x12" type="checkbox" class="form-check-input" {{$userTypeUsuario->shipping_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x12">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Usuarios:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="user_show" id="x13" type="checkbox" class="form-check-input show-g" {{$userTypeUsuario->user_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x13">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="user_edit" id="x14" type="checkbox" class="form-check-input" {{$userTypeUsuario->user_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x14">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="user_delete" id="x15" type="checkbox" class="form-check-input" {{$userTypeUsuario->user_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x15">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Registro de actividades:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="activity_show" id="x16" type="checkbox" class="form-check-input show-g" {{$userTypeUsuario->activity_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x16">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="activity_edit" id="x17" type="checkbox" class="form-check-input" {{$userTypeUsuario->activity_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x17">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="activity_delete" id="x18" type="checkbox" class="form-check-input" {{$userTypeUsuario->activity_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x18">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Perfil:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="profile_show" id="x19" type="checkbox" class="form-check-input show-g" {{$userTypeUsuario->profile_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x19">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="profile_edit" id="x20" type="checkbox" class="form-check-input" {{$userTypeUsuario->profile_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x20">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="profile_delete" id="x21" type="checkbox" class="form-check-input" {{$userTypeUsuario->profile_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x21">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Blog:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="blog_show" id="x22" type="checkbox" class="form-check-input show-g" {{$userTypeUsuario->blog_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x22">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="blog_edit" id="x23" type="checkbox" class="form-check-input" {{$userTypeUsuario->blog_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x23">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="blog_delete" id="x24" type="checkbox" class="form-check-input" {{$userTypeUsuario->blog_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x24">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Mensajes:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="message_show" id="x25" type="checkbox" class="form-check-input show-g" {{$userTypeUsuario->message_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x25">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="message_edit" id="x26" type="checkbox" class="form-check-input" {{$userTypeUsuario->message_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x26">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="message_delete" id="x27" type="checkbox" class="form-check-input" {{$userTypeUsuario->message_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x27">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Subscriptores:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="subscriber_show" id="x28" type="checkbox" class="form-check-input show-g" {{$userTypeUsuario->subscriber_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x28">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="subscriber_edit" id="x29" type="checkbox" class="form-check-input" {{$userTypeUsuario->subscriber_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x29">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="subscriber_delete" id="x30" type="checkbox" class="form-check-input" {{$userTypeUsuario->subscriber_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x30">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3 mb-2">Generales web:</h6>
                                    <label class="m-0 ml-3">Rotor de Imágenes:</label>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="general_slider_show" id="x31" type="checkbox" class="form-check-input show-g" {{$userTypeUsuario->general_slider_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x31">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_slider_edit" id="x32" type="checkbox" class="form-check-input" {{$userTypeUsuario->general_slider_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x32">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_slider_delete" id="x33" type="checkbox" class="form-check-input" {{$userTypeUsuario->general_slider_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x33">BORRAR</label>
                                        </div>
                                    </div>
                                    <label class="m-0 ml-3">Logo Web:</label>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="general_logo_show" id="x34" type="checkbox" class="form-check-input show-g" {{$userTypeUsuario->general_logo_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x34">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_logo_edit" id="x35" type="checkbox" class="form-check-input" {{$userTypeUsuario->general_logo_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x35">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_logo_delete" id="x36" type="checkbox" class="form-check-input" {{$userTypeUsuario->general_logo_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x36">BORRAR</label>
                                        </div>
                                    </div>
                                    <label class="m-0 ml-3">Color Web:</label>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="general_color_show" id="x37" type="checkbox" class="form-check-input show-g" {{$userTypeUsuario->general_color_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x37">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_color_edit" id="x38" type="checkbox" class="form-check-input" {{$userTypeUsuario->general_color_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x38">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_color_delete" id="x39" type="checkbox" class="form-check-input" {{$userTypeUsuario->general_color_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x39">BORRAR</label>
                                        </div>
                                    </div>
                                    <label class="m-0 ml-3">Datos Contacto Web:</label>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="general_contact_show" id="x40" type="checkbox" class="form-check-input show-g" {{$userTypeUsuario->general_contact_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x40">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_contact_edit" id="x41" type="checkbox" class="form-check-input" {{$userTypeUsuario->general_contact_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x41">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_contact_delete" id="x42" type="checkbox" class="form-check-input" {{$userTypeUsuario->general_contact_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x42">BORRAR</label>
                                        </div>
                                    </div>
                                    <label class="m-0 ml-3">Filtros Web:</label>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="general_filter_show" id="x43" type="checkbox" class="form-check-input show-g" {{$userTypeUsuario->general_filter_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x43">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_filter_edit" id="x44" type="checkbox" class="form-check-input" {{$userTypeUsuario->general_filter_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x44">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_filter_delete" id="x45" type="checkbox" class="form-check-input" {{$userTypeUsuario->general_filter_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x45">BORRAR</label>
                                        </div>
                                    </div>
                                    <label class="m-0 ml-3">Web Sobre Nosotros:</label>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="general_about_show" id="x46" type="checkbox" class="form-check-input show-g" {{$userTypeUsuario->general_about_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x46">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_about_edit" id="x47" type="checkbox" class="form-check-input" {{$userTypeUsuario->general_about_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x47">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_about_delete" id="x48" type="checkbox" class="form-check-input" {{$userTypeUsuario->general_about_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="x48">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-accent btn-block">Actualizar Permisos</button>
                                </div>
                            </form>
                        </div>
                        <!-- Pestaña vendedores -->
                        <div class="tab-pane fade" id="vendedores" role="tabpanel" aria-labelledby="vendedores-tab">
                            <form action="user_type/2" method="POST" class="php-email-form">
                            @method('PUT')
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Categorías:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="category_show" id="xx1" type="checkbox" class="form-check-input show-g" {{$userTypeVendedor->category_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx1">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="category_edit" id="xx2" type="checkbox" class="form-check-input" {{$userTypeVendedor->category_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx2">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="category_delete" id="xx3" type="checkbox" class="form-check-input" {{$userTypeVendedor->category_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx3">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Productos:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="product_show" id="xx4" type="checkbox" class="form-check-input show-g" {{$userTypeVendedor->product_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx4">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="product_edit" id="xx5" type="checkbox" class="form-check-input" {{$userTypeVendedor->product_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx5">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="product_delete" id="xx6" type="checkbox" class="form-check-input" {{$userTypeVendedor->product_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx6">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Ventas:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="sales_show" id="xx7" type="checkbox" class="form-check-input show-g" {{$userTypeVendedor->sales_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx7">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="sales_edit" id="xx8" type="checkbox" class="form-check-input" {{$userTypeVendedor->sales_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx8">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="sales_delete" id="xx9" type="checkbox" class="form-check-input" {{$userTypeVendedor->sales_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx9">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Envíos:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="shipping_show" id="xx10" type="checkbox" class="form-check-input show-g" {{$userTypeVendedor->shipping_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx10">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="shipping_edit" id="xx11" type="checkbox" class="form-check-input" {{$userTypeVendedor->shipping_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx11">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="shipping_delete" id="xx12" type="checkbox" class="form-check-input" {{$userTypeVendedor->shipping_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx12">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Usuarios:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="user_show" id="xx13" type="checkbox" class="form-check-input show-g" {{$userTypeVendedor->user_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx13">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="user_edit" id="xx14" type="checkbox" class="form-check-input" {{$userTypeVendedor->user_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx14">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="user_delete" id="xx15" type="checkbox" class="form-check-input" {{$userTypeVendedor->user_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx15">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Registro de actividades:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="activity_show" id="xx16" type="checkbox" class="form-check-input show-g" {{$userTypeVendedor->activity_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx16">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="activity_edit" id="xx17" type="checkbox" class="form-check-input" {{$userTypeVendedor->activity_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx17">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="activity_delete" id="xx18" type="checkbox" class="form-check-input" {{$userTypeVendedor->activity_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx18">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Perfil:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="profile_show" id="xx19" type="checkbox" class="form-check-input show-g" {{$userTypeVendedor->profile_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx19">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="profile_edit" id="xx20" type="checkbox" class="form-check-input" {{$userTypeVendedor->profile_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx20">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="profile_delete" id="xx21" type="checkbox" class="form-check-input" {{$userTypeVendedor->profile_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx21">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Blog:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="blog_show" id="xx22" type="checkbox" class="form-check-input show-g" {{$userTypeVendedor->blog_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx22">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="blog_edit" id="xx23" type="checkbox" class="form-check-input" {{$userTypeVendedor->blog_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx23">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="blog_delete" id="xx24" type="checkbox" class="form-check-input" {{$userTypeVendedor->blog_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx24">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Mensajes:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="message_show" id="xx25" type="checkbox" class="form-check-input show-g" {{$userTypeVendedor->message_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx25">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="message_edit" id="xx26" type="checkbox" class="form-check-input" {{$userTypeVendedor->message_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx26">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="message_delete" id="xx27" type="checkbox" class="form-check-input" {{$userTypeVendedor->message_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx27">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Subscriptores:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="subscriber_show" id="xx28" type="checkbox" class="form-check-input show-g" {{$userTypeVendedor->subscriber_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx28">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="subscriber_edit" id="xx29" type="checkbox" class="form-check-input" {{$userTypeVendedor->subscriber_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx29">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="subscriber_delete" id="xx30" type="checkbox" class="form-check-input" {{$userTypeVendedor->subscriber_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx30">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3 mb-2">Generales web:</h6>
                                    <label class="m-0 ml-3">Rotor de Imágenes:</label>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="general_slider_show" id="xx31" type="checkbox" class="form-check-input show-g" {{$userTypeVendedor->general_slider_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx31">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_slider_edit" id="xx32" type="checkbox" class="form-check-input" {{$userTypeVendedor->general_slider_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx32">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_slider_delete" id="xx33" type="checkbox" class="form-check-input" {{$userTypeVendedor->general_slider_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx33">BORRAR</label>
                                        </div>
                                    </div>
                                    <label class="m-0 ml-3">Logo Web:</label>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="general_logo_show" id="xx34" type="checkbox" class="form-check-input show-g" {{$userTypeVendedor->general_logo_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx34">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_logo_edit" id="xx35" type="checkbox" class="form-check-input" {{$userTypeVendedor->general_logo_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx35">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_logo_delete" id="xx36" type="checkbox" class="form-check-input" {{$userTypeVendedor->general_logo_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx36">BORRAR</label>
                                        </div>
                                    </div>
                                    <label class="m-0 ml-3">Color Web:</label>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="general_color_show" id="xx37" type="checkbox" class="form-check-input show-g" {{$userTypeVendedor->general_color_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx37">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_color_edit" id="xx38" type="checkbox" class="form-check-input" {{$userTypeVendedor->general_color_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx38">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_color_delete" id="xx39" type="checkbox" class="form-check-input" {{$userTypeVendedor->general_color_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx39">BORRAR</label>
                                        </div>
                                    </div>
                                    <label class="m-0 ml-3">Datos Contacto Web:</label>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="general_contact_show" id="xx40" type="checkbox" class="form-check-input show-g" {{$userTypeVendedor->general_contact_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx40">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_contact_edit" id="xx41" type="checkbox" class="form-check-input" {{$userTypeVendedor->general_contact_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx41">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_contact_delete" id="xx42" type="checkbox" class="form-check-input" {{$userTypeVendedor->general_contact_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx42">BORRAR</label>
                                        </div>
                                    </div>
                                    <label class="m-0 ml-3">Filtros Web:</label>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="general_filter_show" id="xx43" type="checkbox" class="form-check-input show-g" {{$userTypeVendedor->general_filter_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx43">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_filter_edit" id="xx44" type="checkbox" class="form-check-input" {{$userTypeVendedor->general_filter_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx44">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_filter_delete" id="xx45" type="checkbox" class="form-check-input" {{$userTypeVendedor->general_filter_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx45">BORRAR</label>
                                        </div>
                                    </div>
                                    <label class="m-0 ml-3">Web Sobre Nosotros:</label>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="general_about_show" id="xx46" type="checkbox" class="form-check-input show-g" {{$userTypeVendedor->general_about_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx46">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_about_edit" id="xx47" type="checkbox" class="form-check-input" {{$userTypeVendedor->general_about_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx47">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_about_delete" id="xx48" type="checkbox" class="form-check-input" {{$userTypeVendedor->general_about_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xx48">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-accent btn-block">Actualizar Permisos</button>
                                </div>
                            </form>
                        </div>
                        <!-- Pestaña administradores -->
                        <div class="tab-pane fade " id="administradores" role="tabpanel" aria-labelledby="administradores-tab">
                            <form action="user_type/3" method="POST" class="php-email-form">
                            @method('PUT')
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Categorías:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="category_show" id="xxx1" type="checkbox" class="form-check-input show-g"  {{$userTypeAdministrador->category_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx1">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="category_edit" id="xxx2" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->category_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx2">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="category_delete" id="xxx3" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->category_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx3">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Productos:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="product_show" id="xxx4" type="checkbox" class="form-check-input show-g"  {{$userTypeAdministrador->product_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx4">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="product_edit" id="xxx5" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->product_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx5">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="product_delete" id="xxx6" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->product_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx6">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Ventas:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="sales_show" id="xxx7" type="checkbox" class="form-check-input show-g"  {{$userTypeAdministrador->sales_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx7">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="sales_edit" id="xxx8" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->sales_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx8">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="sales_delete" id="xxx9" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->sales_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx9">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Envíos:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="shipping_show" id="xxx10" type="checkbox" class="form-check-input show-g"  {{$userTypeAdministrador->shipping_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx10">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="shipping_edit" id="xxx11" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->shipping_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx11">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="shipping_delete" id="xxx12" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->shipping_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx12">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Usuarios:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="user_show" id="xxx13" type="checkbox" class="form-check-input show-g"  {{$userTypeAdministrador->user_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx13">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="user_edit" id="xxx14" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->user_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx14">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="user_delete" id="xxx15" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->user_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx15">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Registro de actividades:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="activity_show" id="xxx16" type="checkbox" class="form-check-input show-g"  {{$userTypeAdministrador->activity_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx16">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="activity_edit" id="xxx17" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->activity_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx17">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="activity_delete" id="xxx18" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->activity_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx18">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Perfil:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="profile_show" id="xxx19" type="checkbox" class="form-check-input show-g"  {{$userTypeAdministrador->profile_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx19">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="profile_edit" id="xxx20" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->profile_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx20">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="profile_delete" id="xxx21" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->profile_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx21">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Blog:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="blog_show" id="xxx22" type="checkbox" class="form-check-input show-g"  {{$userTypeAdministrador->blog_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx22">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="blog_edit" id="xxx23" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->blog_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx23">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="blog_delete" id="xxx24" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->blog_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx24">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Mensajes:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="message_show" id="xxx25" type="checkbox" class="form-check-input show-g"  {{$userTypeAdministrador->message_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx25">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="message_edit" id="xxx26" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->message_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx26">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="message_delete" id="xxx27" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->message_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx27">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3">Subscriptores:</h6>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="subscriber_show" id="xxx28" type="checkbox" class="form-check-input show-g"  {{$userTypeAdministrador->subscriber_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx28">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="subscriber_edit" id="xxx29" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->subscriber_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx29">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="subscriber_delete" id="xxx30" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->subscriber_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx30">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 pt-1" style="border: 1px solid silver;border-radius:4px;">
                                    <h6 class="m-0 ml-3 mb-2">Generales web:</h6>
                                    <label class="m-0 ml-3">Rotor de Imágenes:</label>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="general_slider_show" id="xxx31" type="checkbox" class="form-check-input show-g"  {{$userTypeAdministrador->general_slider_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx31">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_slider_edit" id="xxx32" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->general_slider_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx32">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_slider_delete" id="xxx33" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->general_slider_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx33">BORRAR</label>
                                        </div>
                                    </div>
                                    <label class="m-0 ml-3">Logo Web:</label>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="general_logo_show" id="xxx34" type="checkbox" class="form-check-input show-g"  {{$userTypeAdministrador->general_logo_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx34">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_logo_edit" id="xxx35" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->general_logo_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx35">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_logo_delete" id="xxx36" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->general_logo_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx36">BORRAR</label>
                                        </div>
                                    </div>
                                    <label class="m-0 ml-3">Color Web:</label>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="general_color_show" id="xxx37" type="checkbox" class="form-check-input show-g"  {{$userTypeAdministrador->general_color_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx37">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_color_edit" id="xxx38" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->general_color_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx38">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_color_delete" id="xxx39" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->general_color_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx39">BORRAR</label>
                                        </div>
                                    </div>
                                    <label class="m-0 ml-3">Datos Contacto Web:</label>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="general_contact_show" id="xxx40" type="checkbox" class="form-check-input show-g"  {{$userTypeAdministrador->general_contact_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx40">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_contact_edit" id="xxx41" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->general_contact_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx41">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_contact_delete" id="xxx42" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->general_contact_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx42">BORRAR</label>
                                        </div>
                                    </div>
                                    <label class="m-0 ml-3">Filtros Web:</label>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="general_filter_show" id="xxx43" type="checkbox" class="form-check-input show-g"  {{$userTypeAdministrador->general_filter_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx43">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_filter_edit" id="xxx44" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->general_filter_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx44">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_filter_delete" id="xxx45" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->general_filter_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx45">BORRAR</label>
                                        </div>
                                    </div>
                                    <label class="m-0 ml-3">Web Sobre Nosotros:</label>
                                    <div class="form-group pt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="general_about_show" id="xxx46" type="checkbox" class="form-check-input show-g"  {{$userTypeAdministrador->general_about_show == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx46">VER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_about_edit" id="xxx47" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->general_about_edit == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx47">EDITAR</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="general_about_delete" id="xxx48" type="checkbox" class="form-check-input"  {{$userTypeAdministrador->general_about_delete == 1 ? 'checked' : '' }} autocomplete="off">
                                            <label class="form-check-label" for="xxx48">BORRAR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-accent btn-block">Actualizar Permisos</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endif
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
        <!-- Modal Editar-blog-->
        <div class="modal fade" id="ModalEditOne">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Editar Cuenta</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="accounts" method="POST" id="FormSaveDataAbout" class="quick-post-form php-email-form" >
                        @method('PUT')
                            <div class="form-row">
                                <div class="col-6">
                                    <label for="name">Nombre:</label>
                                    <input name="name" class="form-control mb-3" type="text" placeholder="Nombre de Usuario" maxlength="100" autocomplete="off" required>
                                    <label for="feLastName">Empresa</label>
                                    <input name="company" class="form-control mb-3" type="text" id="feLastName" placeholder="Empresa" value="" autocomplete="off"> 
                                    <label for="email">Correo:</label>
                                    <input name="email" class="form-control mb-3" type="email" placeholder="Correo electrónico" maxlength="100" autocomplete="off" required>
                                    <label for="password">Contraseña:</label>
                                    <input name="password" class="form-control mb-3" type="password" placeholder="Contraseña" maxlength="12" autocomplete="off" >
                                    <input name="password_confirmation" class="form-control mb-3" type="password" placeholder="Repite Contraseña" maxlength="12" autocomplete="off">
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="slim" id="slimEdit"
                                            data-button-edit-title="Editar"
                                            data-button-remove-title="Borrar"
                                            data-ratio="1:1"
                                            data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cargar Imágen</p></p>"
                                            data-size="120,120"
                                            style="background:#e6e6e6">
                                            <input type="file" name="image"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-6">
                                    <label for="cel">Cel - WhatsApp:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <select name="countryCode" class="form-control" autocomplete="off" required>
                                                <option value="+54">Argentina (+54)</option>
                                                <option value="+56">Chile (+56)</option>
                                                <option value="+57">Colombia (+57)</option>
                                                <option value="+52">Mexico (+52)</option>
                                                <option value="+51">Perú (+51)</option>
                                                <option value="+507">Panama (+507)</option>
                                                <option value="+34">España (+34)</option>
                                                <option value="+598">Uruguay (+598)</option>
                                                <option value="+1">USA (+1)</option>
                                            </select>
                                        </div>
                                        <input type="text" id="cel" name="cel" value="{{ auth()->user()->cel }}" class="form-control" maxlength="20" pattern="[0-9]*" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mb-3">
                                        <label for="type">Typo de cuenta:</label>
                                        <select name="type_id" id="type_id" class="form-control" autocomplete="off" required>
                                            <option value="1">Usuario</option>
                                            <option value="2">Vendedor</option>
                                            <option value="3">Administrador</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="city">Ciudad</label>
                                    <input type="text" name="city" id="city" class="form-control" value="" autocomplete="off" required> 
                                </div>
                                <div class=" col-md-4">
                                    <label for="state" >Región</label>
                                    <select id="state" name="region_id" class="form-control" autocomplete="off" required>
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
                                    <input type="text" name="zip" class="form-control" id="inputZip" value="" autocomplete="off" required> 
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="feInputAddress">Dirección</label>
                                <input type="text" name="address" class="form-control" value="{{auth()->user()->address}}" placeholder="1234 Main St" autocomplete="off" required>
                            </div>
                                
                            <div class="form-group mb-3">
                                <label for="estado-publicacion">Estado de Publicación:</label>
                                <select name="active" id="estado-publicacion" class="form-control" autocomplete="off" required>
                                    <option value="1" selected>Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                            </div>

                            <!-- </div> -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-accent btn-block">Actualizar Usuario</button>
                            </div>
                        </form>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-primary delete-button btn-block" id="#" data-url="#">Guardar <i class="material-icons">save</i></button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div> -->
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
    //Datos al modal Editar Blog
    $(document).on('click', '.edit-button', function () {
        var item = $(this).data("item");
        //console.log('entra click',item)
        var id = item.id; // Obtener el ID de la categoría
        var form = $('#ModalEditOne form'); // Obtener el formulario del modal
        form.attr('action', 'accounts/' + id);
        $.each(item, function (key, value) {
            //console.log('ddd',value)
            if (key == 'name') { // Verificar si el atributo de datos comienza con 'field'
                form.find('[name="' + key + '"]').val(value); 
            }
            if (key == 'company') { // Verificar si el atributo de datos comienza con 'field'
                form.find('[name="' + key + '"]').val(value); 
            }
            if (key == 'email') { // Verificar si el atributo de datos comienza con 'field'
                form.find('[name="' + key + '"]').val(value);
            }
            if (key == 'cel') { // Verificar si el atributo de datos comienza con 'field'
                form.find('[name="' + key + '"]').val(value);
            }
            if (key == 'city') { // Verificar si el atributo de datos comienza con 'field'
                form.find('[name="' + key + '"]').val(value);
            }
            if (key == 'zip') { // Verificar si el atributo de datos comienza con 'field'
                form.find('[name="' + key + '"]').val(value);
            }
            if (key == 'region_id') { // Verificar si el atributo de datos comienza con 'field'
                form.find('[name="' + key + '"]').val(value);
            }
            if (key == 'address') { // Verificar si el atributo de datos comienza con 'field'
                form.find('[name="' + key + '"]').val(value);
            }
            if (key == 'image') { 
                if (value) {
                    $('#slimEdit').slim('load','/assets/images/users/'+value); 
                }
            }
            if (key == 'countryCode') { 
                form.find('[name="' + key + '"]').val(value);
            }
            if (key == 'type_id') { 
                form.find('[name="' + key + '"]').val(value);
            }
            if (key == 'active') { 
                form.find('[name="' + key + '"]').val(value);
            }
        });
        //form.attr('action', 'blog/' + id);
    });


    // Manejar el evento de cambio para todos los checkboxes en el mismo grupo
    $('.show-g').change(function () {
        // Verificar si "VER" se desmarcó
        if (!$(this).is(':checked')) {
            // Desactivar y desmarcar los otros dos checkboxes en el mismo grupo
            $(this).closest('.form-group').find('.form-check-input').not(this).prop('disabled', true).prop('checked', false);
        } else {
            // Habilitar los otros dos checkboxes en el mismo grupo
            $(this).closest('.form-group').find('.form-check-input').not(this).prop('disabled', false);
        }
    });

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