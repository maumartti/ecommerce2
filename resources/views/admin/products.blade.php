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
                <h6 id="count-product" class="stats-small__value count my-3">{{ isset($products) && count($products) > 0 ? count($products) : '0' }}</h6>
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
                <h6 id="count-product" class="stats-small__value count my-3">{{ isset($products) && count($products) > 0 ? count($products) : '0' }}</h6>
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
                <h6 id="count-product" class="stats-small__value count my-3">{{ isset($products) && count($products) > 0 ? count($products) : '0' }}</h6>
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
        <div class="col-lg-{{ auth()->user()->userType->product_edit == 1 ? '8' : '12' }} col-md-12 col-sm-12 mb-4">
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
                        <!-- <li class="nav-item" role="presentation">
                            <a class="nav-link" id="subcategories-tab" data-toggle="tab" href="#subcategories" role="tab" aria-controls="subcategories" aria-selected="false">-----</a>
                        </li> -->
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
                                                <th scope="col" class="border-0">Imágen</th>
                                                <th scope="col" class="border-0">Nombre</th>
                                                <th scope="col" class="border-0">Precio</th>
                                                <th scope="col" class="border-0">Stock</th>
                                                <th scope="col" class="border-0">Categoría</th>
                                                @if(auth()->user()->userType->product_show == 1)
                                                <th scope="col" class="border-0 text-center">Ver</th>
                                                @endif
                                                @if(auth()->user()->userType->product_edit == 1)
                                                <th scope="col" class="border-0 text-center">Editar</th>
                                                @endif
                                                @if(auth()->user()->userType->product_delete == 1)
                                                <th scope="col" class="border-0 text-center">Borrar</th>
                                                @endif
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
                                                    <td>{{$item->stock}}</td>
                                                    <td>{{$item->category ? $item->category->name : '----'}}</td>
                                                    @if(auth()->user()->userType->product_show == 1)
                                                    <td class="text-center"><button type="button" class="btn btn-primary show-button" data-toggle="modal" data-target="#ModalShowOne" data-item='@json($item)'>Ver <i class="material-icons">visibility</i></button></td>
                                                    @endif
                                                    @if(auth()->user()->userType->product_edit == 1)
                                                    <td class="text-center"><button type="button" class="btn btn-warning edit-button" data-toggle="modal" data-target="#ModalEditOne" data-item='@json($item)' data-subcategories='@json($subcategories)'>Editar <i class="material-icons">edit</i></button></td>
                                                    @endif
                                                    @if(auth()->user()->userType->product_delete == 1)
                                                    <td class="text-center"><button type="button" class="btn btn-danger delete-modal-button"  data-toggle="modal" data-target="#ModalDeleteOne" data-item='@json($item)' data-type="producto" data-url="products" >Borrar <i class="material-icons">delete</i></button></td>
                                                    @endif
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
                        <!-- <div class="tab-pane fade" id="subcategories" role="tabpanel" aria-labelledby="subcategories-tab">
                            <div class="row border-bottom py-2 bg-light">
                                <div class="col-12 col-sm-12">
                                    <table id="subcategories-table" class="table mb-0">
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
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- End Users Stats -->
        <!-- Users By Device Stats -->
        @if(auth()->user()->userType->product_edit == 1)
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
                                    <input type="text" name="name" class="form-control" id="nombreSubcategoria" placeholder="nombre" maxlength="64">
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="form-group">
                                            <div class="slim"
                                                data-button-edit-title="Editar"
                                                data-button-remove-title="Borrar"
                                                data-ratio="7:9"
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
                                                data-ratio="7:9"
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
                                                data-ratio="7:9"
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
                                                data-ratio="7:9"
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
                                                data-ratio="7:9"
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
                                                data-ratio="7:9"
                                                data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cargar Imágen</p></p>"
                                                data-size="600,400">
                                                <input type="file" name="image6"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="categoria">Selecciona categoría:</label>
                                    <select name="category_id" id="categorias" class="form-control" autocomplete="off" required>
                                        <option value="" selected>Seleccionar una...</option>
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
                                    <select name="subcategory_id" id="subcategorias" class="form-control subcategorias-select" >
                                        
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
                                    <label for="old_precio">Stock:</label>
                                    <input type="text" name="stock" class="form-control" id="stock" maxlength="5" placeholder="Cantidad disponible" pattern="[0-9]+" required>
                                </div>
                                <div class="form-group">
                                    <label  for="kilos">Kilos:</label>
                                    <select name="kilos" id="kilos" class="form-control" autocomplete="off" >
                                        <option value="" selected>Sin kilos</option>
                                        <option value="5">5 kilos</option>
                                        <option value="10">10 kilos</option>
                                        <option value="15">15 kilos</option>
                                        <option value="20">20 kilos</option>
                                        <option value="25">25 kilos</option>
                                        <option value="30">30 kilos</option>
                                        <option value="35">35 kilos</option>
                                        <option value="40">40 kilos</option>
                                        <option value="45">45 kilos</option>
                                        <option value="50">50 kilos</option>
                                        <option value="55">55 kilos</option>
                                        <option value="60">60 kilos</option>
                                        <option value="65">65 kilos</option>
                                        <option value="70">70 kilos</option>
                                        <option value="75">75 kilos</option>
                                        <option value="80">80 kilos</option>
                                        <option value="85">85 kilos</option>
                                        <option value="90">90 kilos</option>
                                        <option value="95">95 kilos</option>
                                        <option value="100">100 kilos</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label  for="color">Color:</label>
                                    <select name="color" id="color" class="form-control" autocomplete="off" >
                                        <option value="" selected>Sin color</option>
                                        <option value="Negro">Negro</option>
                                        <option value="Azul">Azul</option>
                                        <option value="Gris">Gris</option>
                                        <option value="Verde">Verde</option>
                                        <option value="Rojo">Rojo</option>
                                        <option value="Blanco">Blanco</option>
                                        <option value="Amarillo">Amarillo</option>
                                        <option value="Naranja">Naranja</option>
                                        <option value="Rosa">Rosa</option>
                                        <option value="Marrón">Marrón</option>
                                        <option value="Celeste">Celeste</option>
                                        <option value="Dorado">Dorado</option>
                                        <option value="Plateado">Plateado</option>
                                        <option value="Lila">Lila</option>
                                        <option value="Violeta">Violeta</option>
                                        <option value="Turquesa">Turquesa</option>
                                        <option value="Aguamarina">Aguamarina</option>
                                        <option value="Crema">Crema</option>
                                        <option value="Fucsia">Fucsia</option>
                                        <option value="Oliva">Oliva</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label  for="size">Talle:</label>
                                    <select name="size" id="size" class="form-control" autocomplete="off" >
                                        <option value="" selected>Sin talle</option>
                                        <option value="XS">XS</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="XXL">XXL</option>
                                        <option value="XXXL">XXXL</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripción:</label>
                                    <textarea name="description" class="form-control" id="descripcion" maxlength="500" rows="4" placeholder="Descripción"></textarea>
                                </div>
                                <div class="form-group">
                                    <label  for="descuento">Descuento:</label>
                                    <select name="descount" id="descount" class="form-control" autocomplete="off" >
                                        <option value="" selected>Sin descuento</option>
                                        <option value="5">5%</option>
                                        <option value="10">10%</option>
                                        <option value="15">15%</option>
                                        <option value="20">20%</option>
                                        <option value="25">25%</option>
                                        <option value="30">30%</option>
                                        <option value="35">35%</option>
                                        <option value="40">40%</option>
                                        <option value="45">45%</option>
                                        <option value="50">50%</option>
                                        <option value="55">55%</option>
                                        <option value="60">60%</option>
                                    </select>
                                </div>
                                <div class="pb-2">
                                    <label>Tags:</label>
                                    <div class="form-group p-2" id="seccionFilterTags" style="background: #eee;border-radius: 4px;">
                                        <!-- Checkbox para cada color -->
                                        <div class="input-group mb-4">
                                            <input type="text" class="form-control" id="btnAddTag" name="btnAddTag" value="" placeholder="nombre del tag..." maxlength="22">
                                            <div class="input-group-append" style="padding: 0px;">
                                                <span class="input-group-text p-0" style="border-radius: 4px;">
                                                    <!-- Agregar un botón con un identificador para agregar tags -->
                                                    <button type="button" class="btn btn-primary" id="agregarTagBtn">Agregar Tag</button>
                                                </span>
                                            </div>
                                        </div>
                                        @if($web->filtersTags )
                                            @php
                                                $tagsRanges = json_decode($web->filtersTags);
                                            @endphp
                                            @if(!empty($tagsRanges) && is_array($tagsRanges))
                                            @foreach($tagsRanges as $tag)
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="{{$tag}}" name="tags[]" value="{{$tag}}">
                                                <label class="form-check-label" for="{{$tag}}">{{$tag}}</label>
                                            </div>
                                            @endforeach
                                            @endif
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-checkbox">
                                        <input name="promo" type="checkbox" class="custom-control-input" autocomplete="off">
                                        <label class="custom-control-label" aria-hidden="true"></label>
                                        <span class="custom-control-description">Agregar como destacado</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-checkbox">
                                        <input name="status" type="checkbox" class="custom-control-input" checked="true" autocomplete="off">
                                        <label class="custom-control-label" aria-hidden="true"></label>
                                        <span class="custom-control-description">Activo</span>
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
        @endif


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
                                    data-ratio="7:9"
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
                                    data-ratio="7:9"
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
                                    data-ratio="7:9"
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
                                    data-ratio="7:9"
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
                                    data-ratio="7:9"
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
                                    data-ratio="7:9"
                                    data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cargar Imágen</p></p>"
                                    data-size="600,400">
                                    <input type="file" name="image6"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="categoria">Selecciona categoría:</label>
                        <select name="category_id" id="categoriasEdit" autocomplete="off" class="form-control">
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
                        <select name="subcategory_id" id="subcategoriasEdit" autocomplete="off" class="form-control subcategorias-select-edit">
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
                        <label for="old_precio">Stock:</label>
                        <input type="text" name="stock" class="form-control" id="stock" maxlength="5" placeholder="Cantidad disponible" pattern="[0-9]+">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea name="description" id="description" class="form-control" rows="4"  maxlength="500" placeholder="Descripción"></textarea>
                    </div>
                    <div class="form-group">
                        <label  for="descuento">Descuento:</label>
                        <select name="descount" id="descount" class="form-control" autocomplete="off" >
                            <option value="" >Sin descuento</option>
                            <option value="5">5%</option>
                            <option value="10">10%</option>
                            <option value="15">15%</option>
                            <option value="20">20%</option>
                            <option value="25">25%</option>
                            <option value="30">30%</option>
                            <option value="35">35%</option>
                            <option value="40">40%</option>
                            <option value="45">45%</option>
                            <option value="50">50%</option>
                            <option value="55">55%</option>
                            <option value="60">60%</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input name="promo" type="checkbox" class="custom-control-input" checked="false">
                            <label class="custom-control-label" aria-hidden="true"></label>
                            <span class="custom-control-description">Destacado</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="BtnSaveEdit" class="btn btn-accent btn-block">Guardar</button>
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
                                    <img id="image1" class="w-100 border" src="/assets/images/no-image2.png">
                                </div>
                            </div>
                            <div class="col-6 pl-0">
                                <div class="form-group">
                                    <!-- <label for="categoria">Imagen 2:</label> -->
                                    <img id="image2" class="w-100 border" src="/assets/images/no-image2.png">
                                </div>
                            </div>
                            <div class="col-6 pl-0">
                                <div class="form-group">
                                    <!-- <label for="categoria">Imagen 3:</label> -->
                                    <img id="image3" class="w-100 border" src="/assets/images/no-image2.png">
                                </div>
                            </div>
                            <div class="col-6 pl-0">
                                <div class="form-group">
                                    <!-- <label for="categoria">Imagen 4:</label> -->
                                    <img id="image4" class="w-100 border" src="/assets/images/no-image2.png">
                                </div>
                            </div>
                            <div class="col-6 pl-0">
                                <div class="form-group">
                                    <!-- <label for="categoria">Imagen 5:</label> -->
                                    <img id="image5" class="w-100 border" src="/assets/images/no-image2.png">
                                </div>
                            </div>
                            <div class="col-6 pl-0">
                                <div class="form-group">
                                    <!-- <label for="categoria">Imagen 6:</label> -->
                                    <img id="image6" class="w-100 border" src="/assets/images/no-image2.png">
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
                            <label for="stock">En stock:</label>
                            <h5 id="stock"></h5>
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
                            <label for="promo">En destacados:</label>
                            <h5 id="promo"></h5>
                        </div>
                        <div class="form-group">
                            <label for="status">Activo:</label>
                            <h5 id="status"></h5>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Borrar Producto-->
        <div class="modal fade" id="ModalDeleteOne">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Eliminar Producto</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nombre del producto:</label>
                            <h5 id="name"></h5>
                            <img id="image" src="" class="w-100">
                        </div>
                        <div class="form-group">
                            <h5 class="text-danger pt-4">¿Está seguro de que desea borrar el producto?</h5>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-danger delete-button" id="#">Confirmar y Borrar <i class="material-icons">delete</i></button>
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

    $('#products-table').DataTable({
        "pageLength": 100 // Configura el número de elementos por página
    });

    //si borramos imagen exsistente para saber que exsistia y ya no
    $('.slim-btn-remove').click(function(){
        var secondParent = $(this).parent().parent();
        var hiddenInput = secondParent.find('input[type="hidden"]');
        if (hiddenInput.length > 0) {
            hiddenInput.val("empty");//en el input hidden le ponemos = empty
        }
    });


    //Modal VER
    $(document).on('click', '.show-button', function () {
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
        if(itemData.stock){
            $('#ModalShowOne #stock').text(itemData.stock);
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
        if(itemData.status || itemData.status == 1){
            $('#ModalShowOne #status').text('SI');
        } else {
            $('#ModalShowOne #status').text('NO');
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
    $(document).on('click', '.edit-button', function () { 
        var itemData = $(this).data('item');
        $('#formModalEditOne #name').val(itemData.name);
        $('#formModalEditOne #price').val(itemData.price);
        $('#formModalEditOne #price_old').val(itemData.price_old);
        $('#formModalEditOne #stock').val(itemData.stock);
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
        $('#categoriasEdit').val(itemData.category_id);


        //select subcategories
        var subcategories = $(this).data('subcategories');
        console.log('subcategorie',itemData.subcategory_id)
        var category_id = itemData.category_id; // Obtén el category_id de itemData
        var $subcategorias = $('#subcategoriasEdit'); // Obtén el elemento select
        $subcategorias.empty();
        //<options> solos las subcategoreies de la categoria del item
        $.each(subcategories, function(index, subcategory) {
            if (subcategory.category_id == category_id) {
                $subcategorias.append($('<option>', {
                    value: subcategory.id,
                    text: subcategory.name
                }));
            }
        });
        $('#subcategoriasEdit').val(itemData.subcategory_id);//selecciona el correcto


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
        //$('#ModalEditOne').modal('hide');
    });

    //Cerrar Modal EDIT
    $('#BtnSaveEdit').click(function () {
        $('#ModalEditOne').modal('hide');
    });

    //GET SUB-CATEGORIAS SELECT
    $(document).on('change', '#categorias', function () {
        var categoryId = $(this).val();
        console.log('change-Select-CAT')
        cargarSubcategorias(categoryId, '.subcategorias-select');
    });
    $(document).on('change', '#categoriasEdit', function () {
        var categoryId = $(this).val();
        console.log('change-Select-CAT-Edit')
        cargarSubcategorias(categoryId, '.subcategorias-select-edit');
    });
    function cargarSubcategorias(categoryId, targetSelector) {
        $.ajax({
            url: 'subcategories/' + categoryId,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                $(targetSelector).empty();
                if (data.subcategories && data.subcategories.length > 0) {
                    $.each(data.subcategories, function (index, subcategory) {
                        $(targetSelector).append('<option value="' + subcategory.id + '">' + subcategory.name + '</option>');
                    });
                } else {
                    $(targetSelector).append('<option value="">No hay subcategorías disponibles</option>');
                }
            },
            error: function () {
                console.error('Error al cargar las subcategorías');
            }
        });
    }
    //END SUB-CAT CHANGE SELECT

    
});


//input number solo numeros inputNumber
$('.inputNumber').bind('keypress', function(e) { 
    return ( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57)) ? false : true ;
});




// Función para eliminar un elemento
// function deleteItem(itemId) {
//     const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
//     // Realiza na solicitud FETCH para eliminar el elemento en el servidor
//     fetch('products/' + itemId, {
//         method: 'DELETE',
//         headers: {
//             'X-Requested-With': 'XMLHttpRequest',
//             'X-CSRF-TOKEN': csrfToken,
//             'Content-Type': 'application/json'
//         }
//     })
//     .then(response => {
//         if (response.ok) {
//             return response.json(); // Parse the JSON response
//         } else {
//             return response.text().then(errorText => {
//                 throw new Error(`${response.status} ${response.statusText} - ${errorText}`);
//             });
//         }
//     })
//     .then(data => {
//         if (data.status === 'success') {
//             // Elimina la fila de la tabla
//             $.toastr.success('Eliminado con éxito');
//             $(`[id="${itemId}"]`).closest('tr').remove();
//             //alert('Elemento eliminado con éxito');
//         } else {
//             $.toastr.success('Error al Eliminar');
//         }
//     })
//     .catch(error => {
//         console.error('Error al eliminar el elemento: ', error);
//         alert('Error al eliminar el elemento');
//     });
// }

</script>
<script>
    // Espera a que el documento esté listo
    $(document).ready(function () {
        $("#agregarTagBtn").click(function () {
            var nuevoTagName = $("#btnAddTag").val();
            // Crea un nuevo elemento de checkbox y etiqueta
            if(nuevoTagName !=''){
                var nuevoTag = '<div class="form-check mt-1">' +
                    '<input type="checkbox" class="form-check-input" id="nuevoTag" name="tags[]" value="' + nuevoTagName + '">' +
                    '<label class="form-check-label" for="nuevoTag">' + nuevoTagName + '</label>' +
                    '</div>';
                $("#seccionFilterTags").append(nuevoTag);
            }
            $("#btnAddTag").val("");
        });
    });
</script>

@endsection