@extends('layouts.app')

@section('head')
<link href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css"> 
@endsection

@section('content')

<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Dashboard</span>
        <h3 class="page-title">Blog</h3>
        </div>
    </div>

   
    <!-- End Small Stats Blocks -->
    <div class="row">
        <!-- Users Stats -->
        <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
        <div class="card card-small">
            <div class="card-header border-bottom">
            <h6 class="m-0">Blog y Noticias</h6>
            </div>
            <div class="card-body pt-0">
                <div class="container pt-3">
                    <ul class="nav nav-tabs" id="myTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="categories-tab" data-toggle="tab" href="#categories" role="tab" aria-controls="categories" aria-selected="true">Lista de Artículos</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="subcategories-tab" data-toggle="tab" href="#subcategories" role="tab" aria-controls="subcategories" aria-selected="false">Agregar Blog</a>
                            </li>
                            <!-- <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="empresas-tab" data-toggle="tab" href="#empresas" role="tab" aria-controls="empresas" aria-selected="false">Empresas de transporte</a>
                            </li> -->
                    </ul>
                    <div class="tab-content" id="myTabsContent">
                        <!-- Pestaña de Articulos -->
                        <div class="tab-pane fade show active" id="categories" role="tabpanel" aria-labelledby="categories-tab">
                            <div class="row border-bottom py-2 bg-light">
                                <div class="col-12 col-sm-12">
                                    <table id="products-table" class="table mb-0">
                                        <!-- Encabezados de la tabla de Categorías -->
                                        <thead class="bg-light">
                                            <tr>
                                                <th scope="col" class="border-0">Imágen</th>
                                                <th scope="col" class="border-0">Título</th>
                                                <th scope="col" class="border-0">Categoría</th>
                                                <!-- <th scope="col" class="border-0">Link</th> -->
                                                <!-- <th scope="col" class="border-0 text-center">Ver</th> -->
                                                <!-- <th scope="col" class="border-0 text-center">Editar</th> -->
                                                <th scope="col" class="border-0 text-center">Ver</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @if(isset($regions))
                                                @if($regions)
                                                    @foreach ($regions as $index => $item)
                                                        @if($item->companies)
                                                        @foreach ($item->companies as $company)
                                                        <tr>
                                                                <td>{{$item->name}}</td>
                                                                <td>{{$company->name}}</td>
                                                                <td><img src="/assets/images/companies/{{$company->image}}" style="width:65px;"></td>
                                                                <td class="text-center"><button type="button" class="btn btn-warning edit-button" data-toggle="modal" data-target="#ModalEditOne" data-item='@json($item)' >Editar <i class="material-icons">edit</i></button></td>
                                                                <td class="text-center"><button type="button" class="btn btn-danger delete-modal-button"  data-toggle="modal" data-target="#ModalDeleteOne" data-item='@json($item)' data-surname='{{$company->name}}' data-type="(región / empresa)" data-url="region_company" >Borrar <i class="material-icons">delete</i></button></td>
                                                        </tr>
                                                        @endforeach
                                                        @endif
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
                                <form class="add-new-post">
                                    <div class="form-group">
                                        <div class="slim"
                                            data-button-edit-title="Editar"
                                            data-button-remove-title="Borrar"
                                            data-ratio="12:6"
                                            data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cargar Imágen</p></p>"
                                            data-size="1200,600"
                                            style="background:#e6e6e6">
                                            <input type="file" name="image" required/>
                                        </div>
                                    </div>
                                    <input name="title" class="form-control form-control-lg mb-3" type="text" placeholder="Título del post" maxlength="100">
                                    <textarea name="cita" class="form-control form-control-lg mb-3" placeholder="Cita del post, maximo 160 caractéres" maxlength="160"></textarea>
                                    <div name="text" id="editor-container" class="add-new-post__editor mb-1"></div>
                                    <div class="form-group mb-3">
                                        <label for="categoria">Categoría:</label>
                                        <select name="categoria" id="categoria" class="form-control">
                                            <option value="" selected>Seleccionar una...</option>
                                            <option value="categoria1">Categoría 1</option>
                                            <option value="categoria2">Categoría 2</option>
                                            <option value="categoria3">Categoría 3</option>
                                    
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="estado-publicacion">Estado de Publicación:</label>
                                        <select name="active" id="estado-publicacion" class="form-control">
                                            <option value="" selected>Seleccionar una...</option>
                                            <option value="1">Publicar Ahora</option>
                                            <option value="0">Guardar sin Publicar</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tags">Tags:</label>
                                        <input id="tags" class="form-control form-control-lg mb-3" type="text" placeholder="Escribe un TAG y presiona ENTER" maxlength="255">
                                        <div id="tag-list"></div>
                                        <input type="hidden" name="tags" id="tags-hidden">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-accent btn-block">Agregar post</button>
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
                <h6 class="m-0">Categorías</h6>
                </div>
                <div class="card-body py-0">
                    <div class="row">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item px-3 pb-2">
                        <div class="custom-control custom-checkbox mb-1">
                          <input type="checkbox" class="custom-control-input" id="category1" checked>
                          <label class="custom-control-label" for="category1">Uncategorized</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                          <input type="checkbox" class="custom-control-input" id="category2" checked>
                          <label class="custom-control-label" for="category2">Design</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                          <input type="checkbox" class="custom-control-input" id="category3">
                          <label class="custom-control-label" for="category3">Development</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                          <input type="checkbox" class="custom-control-input" id="category4">
                          <label class="custom-control-label" for="category4">Writing</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                          <input type="checkbox" class="custom-control-input" id="category5">
                          <label class="custom-control-label" for="category5">Books</label>
                        </div>
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="New category" aria-label="Add new category" aria-describedby="basic-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-white px-2" type="button">
                              <i class="material-icons">add</i>
                            </button>
                          </div>
                        </div>
                      </li>
                    </ul>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.min.js"></script>
<script src="/assets/js/app/app-blog-new-post.1.1.0.js"></script>
<script>
$(document).ready(function(){

	// $('#first-table').DataTable({
    //     "pageLength": 100 // Configura el número de elementos por página
    // });

});
</script>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script>
$(document).ready(function() {
    // Array para almacenar las etiquetas
    var tags = [];

    // Referencia al campo de entrada de etiquetas
    var tagsInput = $("#tags");

    // Elemento donde se mostrarán las etiquetas
    var tagList = $("#tag-list");

    // Referencia al campo de entrada oculto para las etiquetas
    var tagsHiddenInput = $("#tags-hidden");

    // Manejar el evento al presionar Enter en el campo de entrada de etiquetas
    tagsInput.keydown(function(event) {
        if (event.keyCode === 13) { // 13 es el código de tecla Enter
            event.preventDefault(); // Evitar que el formulario se envíe al presionar Enter
            var tagText = tagsInput.val().trim();
            if (tagText !== "") {
                // Agregar la etiqueta al array
                tags.push(tagText);
                // Crear un elemento de etiqueta visible
                var tagElement = $("<span class='tag pr-2 mr-1' style='border: 1px solid silver;padding: 4px;border-radius: 6px;'>" + tagText + " <a class='remove-tag text-danger' style='cursor:pointer;'>&times;</a></span>");
                // Agregar la etiqueta al elemento de lista de etiquetas
                tagList.append(tagElement);
                // Limpiar el campo de entrada
                tagsInput.val("");
                // Actualizar el campo de entrada oculto con las etiquetas
                tagsHiddenInput.val(tags.join(','));
            }
        }
    });

    // Manejar el evento de eliminación de etiquetas
    tagList.on("click", ".remove-tag", function() {
        var tagText = $(this).parent().text().trim();
        var index = tags.indexOf(tagText);
        if (index > -1) {
            tags.splice(index, 1);
            // Actualizar el campo de entrada oculto con las etiquetas
            tagsHiddenInput.val(tags.join(','));
        }
        $(this).parent().remove();
    });
});
</script>

@endsection