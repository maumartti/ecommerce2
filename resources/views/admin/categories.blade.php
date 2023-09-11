@extends('layouts.app')

@section('content')

<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Dashboard</span>
        <h3 class="page-title">Categorías / Sub-categorías</h3>
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
                <span class="stats-small__label text-uppercase">Categorías Totales</span>
                <h6 id="count-cat" class="stats-small__value count my-3">{{count($categories)}}</h6>
                </div>
                <!-- <div class="stats-small__data">
                <span class="stats-small__percentage stats-small__percentage--increase">4.7%</span>
                </div> -->
            </div>
            <!-- <canvas height="120" class="blog-overview-stats-small-1"></canvas> -->
            </div>
        </div>
        </div>
        <div class="col-lg col-md-6 col-sm-6 mb-4">
        <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
                <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Sub-categorías Totales</span>
                <h6 id="count-subcat" class="stats-small__value count my-3">{{count($subcategories)}}</h6>
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
            <h6 class="m-0">Categorías / Sub-categorías</h6>
            </div>
            <div class="card-body pt-0">
                <div class="container pt-3">
                    <ul class="nav nav-tabs" id="myTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="categories-tab" data-toggle="tab" href="#categories" role="tab" aria-controls="categories" aria-selected="true">Categorías</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="subcategories-tab" data-toggle="tab" href="#subcategories" role="tab" aria-controls="subcategories" aria-selected="false">Subcategorías</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabsContent">
                        <!-- Pestaña de Categorías -->
                        <div class="tab-pane fade show active" id="categories" role="tabpanel" aria-labelledby="categories-tab">
                            <div class="row border-bottom py-2 bg-light">
                                <div class="col-12 col-sm-12">
                                    <table id="categories-table" class="table mb-0">
                                        <!-- Encabezados de la tabla de Categorías -->
                                        <thead class="bg-light">
                                            <tr>
                                                <th scope="col" class="border-0">#</th>
                                                <th scope="col" class="border-0">Nombre</th>
                                                <th scope="col" class="border-0 text-center">Editar</th>
                                                <th scope="col" class="border-0 text-center">Borrar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($categories)
                                            @foreach ($categories as $index => $item)
                                            @php
                                                $key = $index + 1;
                                            @endphp
                                            <tr>
                                                <td>{{$key}}</td>
                                                <td>{{$item->name}}</td>
                                                <td class="text-center"><button type="button" class="btn btn-warning edit-button" data-toggle="modal" data-target="#ModalEditCat" data-id="{{$item->id}}" data-name="{{$item->name}}">Editar <i class="material-icons">edit</i></button></td>
                                                <td class="text-center"><button class="btn btn-danger delete-button" id="{{$item->id}}" data-url="categories">Borrar <i class="material-icons">delete</i></button></td>
                                            </tr>
                                            @endforeach
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
                                            @if($subcategories)
                                            @foreach ($subcategories as $index => $item)
                                            @php
                                                $key = $index + 1;
                                            @endphp
                                            <tr>
                                                <td>{{$key}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->category ? $item->category->name : ''}}</td>
                                                <td class="text-center"><button type="button" class="btn btn-warning edit-button" data-toggle="modal" data-target="#ModalEditSubCat" data-id="{{$item->id}}" data-name="{{$item->name}}" data-category_id="{{$item->category ? $item->category->id : ''}}">Editar <i class="material-icons">edit</i></button></td>
                                                <td class="text-center"><button class="btn btn-danger delete-button" id="{{$item->id}}" data-url="subcategories">Borrar <i class="material-icons">delete</i></button></td>
                                            </tr>
                                            @endforeach
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
                <h6 class="m-0">Agregar Categoría</h6>
                </div>
                <div class="card-body py-0">
                    <div class="row">
                        <div class="col-12 border-bottom">
                            <form action="categories" method="POST" class="php-email-form">
                                <div class="form-group pt-3">
                                    <label>Nombre de la categoría:</label>
                                    <input type="text" name="name" class="form-control" placeholder="nombre">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-accent btn-block">Agregar</button>
                                </div>
                            </form>
                            <div class="pt-5" >
                                <div class="card-header border-bottom px-0 ">
                                    <h6 class="m-0">Agregar Sub-Categoría</h6>
                                </div>
                                <form action="subcategories" method="POST" class="php-email-form">
                                    <div class="form-group pt-3">
                                        <label for="categoria">Selecciona categoría:</label>
                                        <select name="category_id" id="categorias" class="form-control">
                                            @if($subcategories)
                                            @foreach ($categories as $index => $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nombreSubcategoria">Nombre de la sub-categoría:</label>
                                        <input type="text" name="name" class="form-control" id="nombreSubcategoria" placeholder="nombre">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-accent btn-block">Agregar</button>
                                    </div>
                                </form>
                            </div>
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


        <!-- Modal Editar Categoria-->
        <div class="modal fade" id="ModalEditCat">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Editar Categoría</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="categories/" method="POST" class="php-email-form">
                    @method('PUT')
                    <div class="form-group pt-3">
                        <label>Nombre de la categoría:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="nombre">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-accent btn-block">Guardar</button>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>

                </div>
            </div>
        </div>
        <!-- Modal Editar Sub-Categoria-->
        <div class="modal fade" id="ModalEditSubCat">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Editar Sub-Categoría</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="subcategories/" method="POST" class="php-email-form">
                    @method('PUT')
                    <div class="form-group pt-3">
                        <label for="categoria">Selecciona categoría:</label>
                        <select name="category_id" id="categorias" class="form-control" autocomplete="off">
                            @if($subcategories)
                                @foreach ($categories as $index => $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group pt-3">
                        <label>Nombre de la categoría:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="nombre" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-accent btn-block">Guardar</button>
                    </div>
                    </form>
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


    //Datos al modal Categorias
    $('.edit-button').click(function () {
        console.log('entra click')
        var id = $(this).data('id'); // Obtener el ID de la categoría
        var form = $('#ModalEditCat form'); // Obtener el formulario del modal
        $.each($(this).data(), function (key, value) {
            if (key == 'name') { // Verificar si el atributo de datos comienza con 'field'
                form.find('[name="' + key + '"]').val(value); 
            }
        });
        form.attr('action', 'categories/' + id);
    });

    //Datos al modal Sub-Cateogrias
    $('.edit-button').click(function () {
        console.log('entra click')
        var id = $(this).data('id'); // Obtener el ID de la categoría
        var form = $('#ModalEditSubCat form'); // Obtener el formulario del modal
        $.each($(this).data(), function (key, value) {
            var input = form.find('[name="' + key + '"]');
            if (input.is('select')) {
                input.find('option[value="' + value + '"]').prop('selected', true);
            } else {
                input.val(value);
            }
        });
        form.attr('action', 'subcategories/' + id);
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
    if (confirm('¿Estás seguro de que deseas eliminar este elemento? ,\n\n TODAS LAS SUBCATEGORÍAS HIJAS SERÁN ELIMINADAS')) {
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