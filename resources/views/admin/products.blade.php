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
        <h3 class="page-title">Productos</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    <div class="row">
        <div class="col-lg col-md-4 col-sm-4 mb-4">
        <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
                <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Productos Totales</span>
                <h6 id="count-cat" class="stats-small__value count my-3">{{ isset($products) && count($products) > 0 ? count($products) : '0' }}</h6>
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
                <span class="stats-small__label text-uppercase">Productos Activos</span>
                <h6 id="count-subcat" class="stats-small__value count my-3">{{ isset($products) && count($products) > 0 ? count($products) : '0' }}</h6>
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
                <span class="stats-small__label text-uppercase">Productos Inactivos</span>
                <h6 id="count-subcat" class="stats-small__value count my-3">{{ isset($products) && count($products) > 0 ? count($products) : '0' }}</h6>
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
    <div class="row">
        <!-- Users Stats -->
        <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
        <div class="card card-small">
            <div class="card-header border-bottom">
            <h6 class="m-0">Productos de la tienda</h6>
            </div>
            <div class="card-body pt-0">
                <div class="container pt-3">
                    <ul class="nav nav-tabs" id="myTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="categories-tab" data-toggle="tab" href="#categories" role="tab" aria-controls="categories" aria-selected="true">Productos</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="subcategories-tab" data-toggle="tab" href="#subcategories" role="tab" aria-controls="subcategories" aria-selected="false">-----</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabsContent">
                        <!-- Pestaña de Productos -->
                        <div class="tab-pane fade show active" id="categories" role="tabpanel" aria-labelledby="categories-tab">
                            <div class="row border-bottom py-2 bg-light">
                                <div class="col-12 col-sm-12">
                                    <table id="products-table" class="table mb-0">
                                        <!-- Encabezados de la tabla de Categorías -->
                                        <thead class="bg-light">
                                            <tr>
                                                <!-- <th scope="col" class="border-0">#</th> -->
                                                <th scope="col" class="border-0">Imágen 1</th>
                                                <th scope="col" class="border-0">Nombre</th>
                                                <th scope="col" class="border-0">Precio</th>
                                                <th scope="col" class="border-0 text-center">Ver</th>
                                                <th scope="col" class="border-0 text-center">Editar</th>
                                                <th scope="col" class="border-0 text-center">Borrar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($products))
                                            @if($products)
                                                @foreach ($products as $index => $item)
                                                @php
                                                    $key = $index + 1;
                                                @endphp
                                                <tr>
                                                    <!-- <td>{{$key}}</td> -->
                                                    <td><img src="/assets/images/products/{{$item->image1}}" style="width:65px;"></td>
                                                    <td>{{$item->name}}</td>
                                                    <td>${{$item->price}}</td>
                                                    <td class="text-center"><button type="button" class="btn btn-primary show-button" data-toggle="modal" data-target="#ModalShowOne" data-item='@json($item)'>Ver <i class="material-icons">visibility</i></button></td>
                                                    <td class="text-center"><button type="button" class="btn btn-warning edit-button" data-toggle="modal" data-target="#ModalEditOne" data-item='@json($item)'>Editar <i class="material-icons">edit</i></button></td>
                                                    <td class="text-center"><button class="btn btn-danger delete-button" id="{{$item->id}}" data-url="products">Borrar <i class="material-icons">delete</i></button></td>
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
                        <!-- Pestaña de Subcategorías -->
                        <div class="tab-pane fade" id="subcategories" role="tabpanel" aria-labelledby="subcategories-tab">
                            <div class="row border-bottom py-2 bg-light">
                                <div class="col-12 col-sm-12">
                                    <table id="subcategories-table" class="table mb-0">
                                        <!-- Encabezados de la tabla de Subcategorías -->
                                        <thead class="bg-light">
                                            <tr>
                                                <th scope="col" class="border-0">#</th>
                                                <th scope="col" class="border-0">Nombre</th>
                                                <th scope="col" class="border-0">Categoría Padre</th>
                                                <th scope="col" class="border-0 text-center">Editar</th>
                                                <th scope="col" class="border-0 text-center">Borrar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($categories))
                                                @if($subcategories)
                                                @foreach ($subcategories as $index => $item)
                                                @php
                                                    $key = $index + 1;
                                                @endphp
                                                <tr>
                                                    <td>{{$key}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->category ? $item->category->name : ''}}</td>
                                                    <td class="text-center"><button type="button" class="btn btn-primary show-button" data-toggle="modal" data-target="#ModalEditSubCat" data-id="{{$item->id}}" data-name="{{$item->name}}" data-category_id="{{$item->category ? $item->category->id : ''}}">Editar <i class="material-icons">edit</i></button></td>
                                                    <td class="text-center"><button type="button" class="btn btn-warning edit-button" data-toggle="modal" data-target="#ModalEditSubCat" data-id="{{$item->id}}" data-name="{{$item->name}}" data-category_id="{{$item->category ? $item->category->id : ''}}">Editar <i class="material-icons">edit</i></button></td>
                                                    <td class="text-center"><button class="btn btn-danger delete-button" id="{{$item->id}}" data-url="subcategories">Borrar <i class="material-icons">delete</i></button></td>
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
        </div>
        <!-- End Users Stats -->
        <!-- Users By Device Stats -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card card-small h-100">
                <div class="card-header border-bottom">
                <h6 class="m-0">Agregar Producto</h6>
                </div>
                <div class="card-body py-0">
                    <div class="row">
                        <div class="col-12 border-bottom">
                            <form action="products" method="POST" class="php-email-form">
                                <div class="form-group pt-3">
                                    <label for="nombreSubcategoria">Nombre del producto:</label>
                                    <input type="text" name="name" class="form-control" id="nombreSubcategoria" placeholder="nombre">
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="form-group">
                                            <div class="slim"
                                                data-button-edit-title="Editar"
                                                data-button-remove-title="Borrar"
                                                data-ratio="6:4"
                                                data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cargar Imágen</p></p>"
                                                data-size="600,400"
                                                style="background:#e6e6e6">
                                                <input type="file" name="image1" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="form-group">
                                            <div class="slim"
                                                data-button-edit-title="Editar"
                                                data-button-remove-title="Borrar"
                                                data-ratio="6:4"
                                                data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cargar Imágen</p></p>"
                                                data-size="600,400">
                                                <input type="file" name="image2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pr-0">
                                        <div class="form-group">
                                            <div class="slim"
                                                data-button-edit-title="Editar"
                                                data-button-remove-title="Borrar"
                                                data-ratio="6:4"
                                                data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cargar Imágen</p></p>"
                                                data-size="600,400">
                                                <input type="file" name="image3"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="form-group">
                                            <div class="slim"
                                                data-button-edit-title="Editar"
                                                data-button-remove-title="Borrar"
                                                data-ratio="6:4"
                                                data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cargar Imágen</p></p>"
                                                data-size="600,400"
                                                style="background:#e6e6e6">
                                                <input type="file" name="image4"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pr-0">
                                        <div class="form-group">
                                            <div class="slim"
                                                data-button-edit-title="Editar"
                                                data-button-remove-title="Borrar"
                                                data-ratio="6:4"
                                                data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cargar Imágen</p></p>"
                                                data-size="600,400"
                                                style="background:#e6e6e6">
                                                <input type="file" name="image5"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="form-group">
                                            <div class="slim"
                                                data-button-edit-title="Editar"
                                                data-button-remove-title="Borrar"
                                                data-ratio="6:4"
                                                data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cargar Imágen</p></p>"
                                                data-size="600,400">
                                                <input type="file" name="image6"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="categoria">Selecciona categoría:</label>
                                    <select name="category_id" id="categorias" class="form-control">
                                        @if(isset($categories))
                                            @if($categories)
                                            @foreach ($categories as $index => $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                            @endif
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="subcategoria">Selecciona sub-categoría:</label>
                                    <select name="subcategory_id" id="subcategorias" class="form-control">
                                        @if(isset($subcategories))
                                            @if($subcategories)
                                            @foreach ($subcategories as $index => $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                            @endif
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="precio">Precio:</label>
                                    <input type="text" name="price" class="form-control" id="precio" placeholder="Precio">
                                </div>
                                <div class="form-group">
                                    <label for="old_precio">Precio Anterior:</label>
                                    <input type="text" name="price_old" class="form-control" id="old_precio" placeholder="Precio Anterior">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripción:</label>
                                    <textarea name="description" class="form-control" id="descripcion" rows="4" placeholder="Descripción"></textarea>
                                </div>
                                <div class="form-group">
                                    <label  for="descuento">Descuento</label>
                                    <input type="text" class="form-control" name="descount" id="descuento">
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-checkbox">
                                        <input name="promo" type="checkbox" class="custom-control-input" checked="">
                                        <label class="custom-control-label" aria-hidden="true"></label>
                                        <span class="custom-control-description">Promo</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-accent btn-block">Agregar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- <div class="card-footer border-top">
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
                </div> -->
            </div>
        </div>


        <!-- Modal Editar Producto-->
        <div class="modal fade" id="ModalEditOne">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Editar Producto</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" id="formModalEditOne" class="php-email-form">
                    @method('PUT')
                    <div class="form-group pt-3">
                        <label for="nombreSubcategoria">Nombre del producto:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="nombre">
                    </div>
                    <div class="row">
                        <div class="col-6 pr-0">
                            <div class="form-group">
                                <div class="slim" id="slim1" 
                                    data-button-edit-title="Editar"
                                    data-button-remove-title="Borrar"
                                    data-ratio="6:4"
                                    data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cargar Imágen</p></p>"
                                    data-size="600,400"
                                    style="background:#e6e6e6">
                                    <input type="file" name="image1" equired/>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pl-0">
                            <div class="form-group">
                                <div class="slim" id="slim2"
                                    data-button-edit-title="Editar"
                                    data-button-remove-title="Borrar"
                                    data-ratio="6:4"
                                    data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cargar Imágen</p></p>"
                                    data-size="600,400">
                                    <input type="file" name="image2" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pr-0">
                            <div class="form-group">
                                <div class="slim" id="slim3"
                                    data-button-edit-title="Editar"
                                    data-button-remove-title="Borrar"
                                    data-ratio="6:4"
                                    data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cargar Imágen</p></p>"
                                    data-size="600,400">
                                    <input type="file" name="image3"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pl-0">
                            <div class="form-group">
                                <div class="slim" id="slim4"
                                    data-button-edit-title="Editar"
                                    data-button-remove-title="Borrar"
                                    data-ratio="6:4"
                                    data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cargar Imágen</p></p>"
                                    data-size="600,400"
                                    style="background:#e6e6e6">
                                    <input type="file" name="image4"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pr-0">
                            <div class="form-group">
                                <div class="slim" id="slim5"
                                    data-button-edit-title="Editar"
                                    data-button-remove-title="Borrar"
                                    data-ratio="6:4"
                                    data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cargar Imágen</p></p>"
                                    data-size="600,400"
                                    style="background:#e6e6e6">
                                    <input type="file" name="image5"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pl-0">
                            <div class="form-group">
                                <div class="slim" id="slim6"
                                    data-button-edit-title="Editar"
                                    data-button-remove-title="Borrar"
                                    data-ratio="6:4"
                                    data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cargar Imágen</p></p>"
                                    data-size="600,400">
                                    <input type="file" name="image6"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="categoria">Selecciona categoría:</label>
                        <select name="category_id" id="categorias" class="form-control">
                            @if(isset($categories))
                                @if($categories)
                                @foreach ($categories as $index => $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                                @endif
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subcategoria">Selecciona sub-categoría:</label>
                        <select name="subcategory_id" id="subcategorias" class="form-control">
                            @if(isset($subcategories))
                                @if($subcategories)
                                @foreach ($subcategories as $index => $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                                @endif
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input type="text" name="price" id="price" class="form-control" id="precio" placeholder="Precio">
                    </div>
                    <div class="form-group">
                        <label for="old_precio">Precio Anterior:</label>
                        <input type="text" name="price_old" id="price_old" class="form-control" placeholder="Precio Anterior">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea name="description" id="description" class="form-control" rows="4" placeholder="Descripción"></textarea>
                    </div>
                    <div class="form-group">
                        <label  for="descuento">Descuento</label>
                        <input type="text" name="descount" id="descount" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input name="promo" type="checkbox" class="custom-control-input" checked="">
                            <label class="custom-control-label" aria-hidden="true"></label>
                            <span class="custom-control-description">Promo</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-accent btn-block">Guardar</button>
                    </div>
                    </form>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div> -->
                </div>
            </div>
        </div>
        <!-- Modal Ver Producto-->
        <div class="modal fade" id="ModalShowOne">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Detalles del Producto</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nombreSubcategoria">Nombre del producto:</label>
                            <h5 id="name"></h5>
                        </div>
                        <div class="row px-3">
                            <div class="col-6 pl-0">
                                <div class="form-group">
                                    <!-- <label for="categoria">Imagen 1:</label> -->
                                    <img id="image1" class="w-100 border" src="/assets/images/no-image.png">
                                </div>
                            </div>
                            <div class="col-6 pl-0">
                                <div class="form-group">
                                    <!-- <label for="categoria">Imagen 2:</label> -->
                                    <img id="image2" class="w-100 border" src="/assets/images/no-image.png">
                                </div>
                            </div>
                            <div class="col-6 pl-0">
                                <div class="form-group">
                                    <!-- <label for="categoria">Imagen 3:</label> -->
                                    <img id="image3" class="w-100 border" src="/assets/images/no-image.png">
                                </div>
                            </div>
                            <div class="col-6 pl-0">
                                <div class="form-group">
                                    <!-- <label for="categoria">Imagen 4:</label> -->
                                    <img id="image4" class="w-100 border" src="/assets/images/no-image.png">
                                </div>
                            </div>
                            <div class="col-6 pl-0">
                                <div class="form-group">
                                    <!-- <label for="categoria">Imagen 5:</label> -->
                                    <img id="image5" class="w-100 border" src="/assets/images/no-image.png">
                                </div>
                            </div>
                            <div class="col-6 pl-0">
                                <div class="form-group">
                                    <!-- <label for="categoria">Imagen 6:</label> -->
                                    <img id="image6" class="w-100 border" src="/assets/images/no-image.png">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoría:</label>
                            <h5 id="category"></h5>
                        </div>
                        <div class="form-group">
                            <label for="subcategoria">Subcategoría:</label>
                            <h5 id="subcategory"></h5>
                        </div>
                        <div class="form-group">
                            <label for="price">Precio:</label>
                            <h5 id="price"></h5>
                        </div>
                        <div class="form-group">
                            <label for="price_old">Precio anterior:</label>
                            <h5 id="price_old"></h5>
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción:</label>
                            <h5 id="description"></h5>
                        </div>
                        <div class="form-group">
                            <label for="descount">Descuento:</label>
                            <h5 id="descount"></h5>
                        </div>
                        <div class="form-group">
                            <label for="promo">Promo:</label>
                            <h5 id="promo"></h5>
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
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function(){

    $('#products-table').DataTable();

    //si borramos imagen exsistente para saber que exsistia y ya no
    $('.slim-btn-remove').click(function(){
        var secondParent = $(this).parent().parent();
        var hiddenInput = secondParent.find('input[type="hidden"]');
        if (hiddenInput.length > 0) {
            hiddenInput.val("empty");//en el input hidden le ponemos = empty
        }
    });


    //Modal VER
    $('.show-button').click(function () {
        var itemData = $(this).data('item');
        console.log('item', itemData);
        $('#ModalShowOne #name').text(itemData.name);
        if(itemData.category){
            $('#ModalShowOne #category').text(itemData.category.name);
        }
        if(itemData.subcategory){
            $('#ModalShowOne #subcategory').text(itemData.subcategory.name);
        }
        if(itemData.price){
            $('#ModalShowOne #price').text('$'+itemData.price);
        }
        if(itemData.price_old){
            $('#ModalShowOne #price_old').text('$'+itemData.price_old);
        }
        if(itemData.description){
            $('#ModalShowOne #description').text(itemData.description);
        }
        if(itemData.descount){
            $('#ModalShowOne #descount').text(itemData.descount+' %');
        }
        if(itemData.promo || itemData.promo == 1){
            $('#ModalShowOne #promo').text('SI');
        } else {
            $('#ModalShowOne #promo').text('NO');
        }
        
        //images
        if (itemData.image1) {
            $("#ModalShowOne #image1").attr('src', '/assets/images/products/' + itemData.image1);
        }
        if (itemData.image2) {
            $("#ModalShowOne #image2").attr('src', '/assets/images/products/' + itemData.image2);
        }
        if (itemData.image3) {
            $("#ModalShowOne #image3").attr('src', '/assets/images/products/' + itemData.image3);
        }
        if (itemData.image4) {
            $("#ModalShowOne #image4").attr('src', '/assets/images/products/' + itemData.image4);
        }
        if (itemData.image5) {
            $("#ModalShowOne #image5").attr('src', '/assets/images/products/' + itemData.image5);
        }
        if (itemData.image6) {
            $("#ModalShowOne #image6").attr('src', '/assets/images/products/' + itemData.image6);
        }
        $('#ModalShowOne').modal('show');
    });

    //Modal EDITAR
    $('.edit-button').click(function () {
        var itemData = $(this).data('item');
        $('#formModalEditOne #name').val(itemData.name);
        $('#formModalEditOne #price').val(itemData.price);
        $('#formModalEditOne #price_old').val(itemData.price_old);
        $('#formModalEditOne #description').val(itemData.description);
        $('#formModalEditOne #descount').val(itemData.descount);
        $('#formModalEditOne #promo').val(itemData.promo);
        //images
        if (itemData.image1) {
            $("#ModalEditOne #slim1").slim('load', '/assets/images/products/' + itemData.image1);
        }
        if (itemData.image2) {
            console.log('image', itemData.image2)
            $("#ModalEditOne #slim2").slim('load', '/assets/images/products/' + itemData.image2);
        }
        if (itemData.image3) {
            $("#ModalEditOne #slim3").slim('load', '/assets/images/products/' + itemData.image3);
        }
        if (itemData.image4) {
            $("#ModalEditOne #slim4").slim('load', '/assets/images/products/' + itemData.image4);
        }
        if (itemData.image5) {
            $("#ModalEditOne #slim5").slim('load', '/assets/images/products/' + itemData.image5);
        }
        if (itemData.image6) {
            $("#ModalEditOne #slim6").slim('load', '/assets/images/products/' + itemData.image6);
        }
        $('#categorias').val(itemData.category_id);
        $('#subcategorias').val(itemData.subcategory_id);
        //promo
        if (itemData.promo === 1) {
            $('#formModalEditOne [name="promo"]').prop('checked', true);
        } else {
            $('#formModalEditOne [name="promo"]').prop('checked', false);
        }
        //Formulario url
        var id = $(this).data('id');
        var form = $('#ModalEditOne form'); 
        form.attr('action', 'products/' + itemData.id);
        $('#ModalEditOne').modal('show');
    });

    
});


//input number solo numeros inputNumber
$('.inputNumber').bind('keypress', function(e) { 
    return ( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57)) ? false : true ;
});



// Asigna la función deleteItem a los botones "Borrar" con la clase "delete-button"
document.addEventListener('click', function (e) {
    if (e.target && e.target.classList.contains('delete-button')) {
        const itemId = e.target.getAttribute('id');
        const url = e.target.getAttribute('data-url');
        deleteItem(itemId, url);
    }
});

// Función para eliminar un elemento
function deleteItem(itemId, url) {
    if (confirm('¿Estás seguro de que deseas eliminar este elemento? \n\n')) {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        // Realiza na solicitud FETCH para eliminar el elemento en el servidor
        fetch(url+'/' + itemId, {
            method: 'DELETE',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': csrfToken,
                'Content-Type': 'application/json'
            }
        })
        .then(response => {
            if (response.ok) {
                return response.json(); // Parse the JSON response
            } else {
                return response.text().then(errorText => {
                    throw new Error(`${response.status} ${response.statusText} - ${errorText}`);
                });
            }
        })
        .then(data => {
            if (data.status === 'success') {
                // Elimina la fila de la tabla
                $.toastr.success('Eliminado con éxito');
                $(`[id="${itemId}"]`).closest('tr').remove();
                //alert('Elemento eliminado con éxito');
            } else {
                $.toastr.success('Error al Eliminar');
            }
        })
        .catch(error => {
            console.error('Error al eliminar el elemento: ', error);
            alert('Error al eliminar el elemento');
        });
    }
}

</script>

@endsection