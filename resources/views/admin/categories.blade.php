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
                <h6 id="count-cat" class="stats-small__value count my-3">{{ isset($categories) && count($categories) > 0 ? count($categories) : '0' }}</h6>
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
                <h6 id="count-subcat" class="stats-small__value count my-3">{{ isset($subcategories) && count($subcategories) > 0 ? count($subcategories) : '0' }}</h6>
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
        <div class="col-lg-{{ auth()->user()->userType->category_edit == 1 ? '8' : '12' }} col-md-12 col-sm-12 mb-4">
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
                                                <!-- <th scope="col" class="border-0">Id</th> -->
                                                <th scope="col" class="border-0">Nombre</th>
                                                @if(auth()->user()->userType->category_edit == 1)
                                                <th scope="col" class="border-0 text-center">Editar</th>
                                                @endif
                                                @if(auth()->user()->userType->category_delete == 1)
                                                <th scope="col" class="border-0 text-center">Borrar</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($categories))
                                            @if($categories)
                                                @foreach ($categories as $index => $item)
                                                @php
                                                    $key = $index + 1;
                                                @endphp
                                                <tr id="categories-{{$item->id}}" data-id="{{$item->id}}">
                                                    <td>{{$key}}</td>
                                                    <!-- <td>{{$item->id}}</td> -->
                                                    <td>{{$item->name}}</td>
                                                    @if(auth()->user()->userType->category_edit == 1)
                                                    <td class="text-center">
                                                        <button type="button" class="btn btn-warning edit-button" data-toggle="modal" data-target="#ModalEditCat" data-id="{{$item->id}}" data-name="{{$item->name}}" data-image="{{$item->image}}">Editar <i class="material-icons">edit</i></button>
                                                    </td>
                                                    @endif
                                                    @if(auth()->user()->userType->category_delete == 1)
                                                    <td class="text-center">
                                                        <button class="btn btn-danger delete-modal-button" data-toggle="modal" data-target="#ModalDeleteOne" data-item='@json($item)' data-type="categoría" data-url="categories">Borrar <i class="material-icons">delete</i></button>
                                                    </td>
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
                                                @if(auth()->user()->userType->category_edit == 1)
                                                <th scope="col" class="border-0 text-center">Editar</th>
                                                @endif
                                                @if(auth()->user()->userType->category_delete == 1)
                                                <th scope="col" class="border-0 text-center">Borrar</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($categories))
                                                @if($subcategories)
                                                @foreach ($subcategories as $index => $item)
                                                @php
                                                    $key = $index + 1;
                                                @endphp
                                                <tr id="subcategories-{{$item->id}}">
                                                    <td>{{$key}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->category ? $item->category->name : ''}}</td>
                                                    @if(auth()->user()->userType->category_edit == 1)
                                                    <td class="text-center"><button type="button" class="btn btn-warning edit-button" data-toggle="modal" data-target="#ModalEditSubCat" data-id="{{$item->id}}" data-name="{{$item->name}}" data-category_id="{{$item->category ? $item->category->id : ''}}">Editar <i class="material-icons">edit</i></button></td>
                                                    @endif
                                                    @if(auth()->user()->userType->category_delete == 1)
                                                    <td class="text-center"><button class="btn btn-danger delete-modal-button" data-toggle="modal" data-target="#ModalDeleteOne" data-item='@json($item)' data-type="subcategoría" data-url="subcategories">Borrar <i class="material-icons">delete</i></button></td>
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
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- End Users Stats -->
        <!-- Users By Device Stats -->
        @if(auth()->user()->userType->category_edit == 1)
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
                                <div class="form-group py-0" style="background: #eee;">
                                    <div class="slim"
                                        data-button-edit-title="Editar"
                                        data-button-remove-title="Borrar"
                                        data-ratio="1:1"
                                        data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Imágen de Portada</p></p>"
                                        data-size="400,400">
                                        <input type="file" name="image" />
                                    </div>
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
                                            @if(isset($subcategories))
                                                @if($subcategories)
                                                @foreach ($categories as $index => $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                                @endif
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
        @endif


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
                    <div class="form-group py-5" style="background: #eee;">
                        <div class="slim" id="slimEditCat"
                            data-button-edit-title="Editar"
                            data-button-remove-title="Borrar"
                            data-ratio="1:1"
                            data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Imágen de Portada</p></p>"
                            data-size="400,400">
                            <input type="file" name="image" />
                        </div>
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
                            @if(isset($categories))
                                @if($subcategories)
                                    @foreach ($categories as $index => $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                @endif
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
        <!-- Modal Borrar Categoria-subcategoria-->
        <div class="modal fade" id="ModalDeleteOne">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Eliminar <span class="type"></span></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nombre de la <span class="type"></span>:</label>
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
<script>
$(document).ready(function(){

    $("#categories-table tbody").sortable({
        update: function(event, ui) {
            // Update the sequential numbers after sorting
            $("#categories-table tbody tr").each(function(index) {
                $(this).find("td:first").text(index + 1);
            });

            // Create an array to store the new order
            var newOrder = [];

            // Iterate through the table rows and add id: index pairs to the array
            $("#categories-table tbody tr").each(function(index) {
                var id = $(this).data("id"); // Assuming you store the ID in a data attribute
                newOrder.push({ id: id, index: index + 1 });
            });

            // Send the new order data to the server using AJAX
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            $.ajax({
                url: 'categoriesReOrder', // Replace with your actual server route
                method: 'POST', // Adjust the HTTP method as needed
                data: JSON.stringify(newOrder),
                headers: {
                    'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the headers
                },
                contentType: 'application/json',
                success: function(response) {
                    console.log('Order saved successfully.');
                },
                error: function(error) {
                    console.error('Error saving order:', error);
                }
            });
        }
    });

    $("#categories-table tbody").disableSelection();

    // Assign initial sequential numbers to rows
    $("#categories-table tbody tr").each(function(index) {
        $(this).find("td:first").text(index + 1);
    });

    //----------END REORDENAR TABLA CAT

     //si borramos imagen exsistente para saber que exsistia y ya no
    $('.slim-btn-remove').click(function(){
        var secondParent = $(this).parent().parent();
        var hiddenInput = secondParent.find('input[type="hidden"]');
        if (hiddenInput.length > 0) {
            hiddenInput.val("empty");//en el input hidden le ponemos = empty
        }
    });

    //Datos al modal Categorias
    $(document).on('click', '.edit-button', function () {
        console.log('entra click')
        var id = $(this).data('id'); // Obtener el ID de la categoría
        var form = $('#ModalEditCat form'); // Obtener el formulario del modal
        $.each($(this).data(), function (key, value) {
            if (key == 'name') { // Verificar si el atributo de datos comienza con 'field'
                form.find('[name="' + key + '"]').val(value); 
            }
            if (key == 'image') { 
                $('#slimEditCat').slim('load','/assets/images/'+value); 
            }
        });
        form.attr('action', 'categories/' + id);
    });

    //Datos al modal Sub-Cateogrias
    $(document).on('click', '.edit-button', function () {
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
    //Modal confirma borrar
});


//input number solo numeros inputNumber
$('.inputNumber').bind('keypress', function(e) { 
    return ( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57)) ? false : true ;
});



// Asigna la función deleteItem a los botones "Borrar" con la clase "delete-button"
// document.addEventListener('click', function (e) {
//     if (e.target && e.target.classList.contains('delete-button')) {
//         const itemId = e.target.getAttribute('id');
//         const url = e.target.getAttribute('data-url');
//         deleteItem(itemId, url);
//     }
// });

// Función para eliminar un elemento
// function deleteItem(itemId, url=null) {
//     const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
//     fetch(url+'/' + itemId, {
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
//             $(`[id="${url}-${itemId}"]`).closest('tr').remove();
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

@endsection