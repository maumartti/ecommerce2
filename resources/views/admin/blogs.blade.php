@extends('layouts.app')

@section('head')
<link href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://cdn.tiny.cloud/1/l43hx0vt9pt2w5u1uuc6k2w1tvx8m3bydfw8ixm5k9c4xqz2/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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
                                                <th scope="col" class="border-0 text-center">Ver</th>
                                                <th scope="col" class="border-0 text-center">Editar</th>
                                                <th scope="col" class="border-0 text-center">Borrar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($blogs))
                                            @if($blogs)
                                                @foreach ($blogs as $index => $item)
                                                    <tr>
                                                        <td><img src="/assets/images/blogs/{{$item->image}}" style="width:65px;"></td>
                                                        <td>{{$item->title}}</td>
                                                        <td>@if($item->category) {{$item->category->name}} @endif</td>
                                                        <td class="text-center"><a type="button" class="btn btn-info show-button" href="/blog/{{$item->url}}"  target="_blank" >Ver <i class="material-icons">open_in_new</i></a></td>
                                                        <td class="text-center"><button type="button" class="btn btn-warning edit-button" data-toggle="modal" data-target="#ModalEditOne" data-item='@json($item)' >Editar <i class="material-icons">edit</i></button></td>
                                                        <td class="text-center"><button type="button" class="btn btn-danger delete-modal-button"  data-toggle="modal" data-target="#ModalDeleteOne" data-item='@json($item)' data-type="blog" data-url="blog" >Borrar <i class="material-icons">delete</i></button></td>
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
                                <form action="blog" method="POST" id="FormSaveDataAbout" class="quick-post-form php-email-form" >
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
                                    <textarea name="text" class="form-control textedit"></textarea>
                                    <!-- <textarea name="text" id="editor-container" class="add-new-post__editor mb-3" placeholder="Texto del post..."></textarea> -->
                                    <div class="form-group mb-3">
                                        <label for="categoria">Categoría:</label>
                                        <select name="category_blog_id" id="categorias-blog" class="form-control" required>
                                            <option value="" selected>Seleccionar una...</option>
                                            @foreach ($categoriesBlog as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="estado-publicacion">Estado de Publicación:</label>
                                        <select name="active" id="estado-publicacion" class="form-control" required>
                                            <option value="" selected>Seleccionar una...</option>
                                            <option value="1">Publicar Ahora</option>
                                            <option value="0">Guardar sin Publicar</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tags">Tags:</label>
                                        <input type="text" class="tags-add form-control form-control-lg mb-3" placeholder="Escribe un TAG y presiona ENTER" maxlength="255" autocomplete="off">
                                        <div class="tag-list"></div>
                                        <input type="hidden" name="tags" class="tags-hidden">
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


        <!-- LATERAL -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card card-small h-100">
                <div class="card-header border-bottom">
                <h6 class="m-0">Categorías</h6>
                </div>
                <div class="card-body py-0">
                    <div class="row">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex px-3">
                                <form action="blog_category" method="POST" id="FormSaveDataAbout" class="quick-post-form php-email-form">
                                    <div class="input-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nueva categoría" aria-label="Add new category" aria-describedby="basic-addon2" required>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary px-2" type="submit">
                                            Agregar Categoría <i class="material-icons">add</i>
                                            </button>
                                        </div>
                                    </div>
                                </form>    
                            </li>
                            <li id="list-ategory-blog" class="list-group-item px-3 pb-2">
                                <!-- <div class="custom-control custom-checkbox mb-1">
                                    <input type="checkbox" class="custom-control-input" id="category1" disabled checked>
                                    <label class="custom-control-label" for="category1">Uncategorized</label>
                                </div> -->
                                @foreach ($categoriesBlog as $item)
                                <div class="form-control mb-1">
                                    <label class="" for="category1">{{$item->name}}</label>
                                    <button type="button" class="btn btn-danger delete-modal-button float-right"  data-toggle="modal" data-target="#ModalDeleteOne" data-item='@json($item)' data-type="categoría-blog" data-url="blog_category" >Borrar <i class="material-icons">delete</i></button>
                                </div>
                                @endforeach
                            </li>
                        </ul>
                    </form>
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
                            <h5 class="text-danger">¿Está seguro de que desea borrar : <span class="type"></span>?</h5>
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
                        <h4 class="modal-title">Editar <span class="type"></span></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="blog/" method="POST" class="php-email-form" >
                        @method('PUT')
                            <div class="form-group">
                                <div class="slim" id="slimEdit"
                                    data-button-edit-title="Editar"
                                    data-button-remove-title="Borrar"
                                    data-ratio="12:6"
                                    data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cargar Imágen</p></p>"
                                    data-size="1200,600"
                                    style="background:#e6e6e6">
                                    <input type="file" name="image" required/>
                                </div>
                            </div>
                            <input name="title" class="form-control form-control-lg mb-3" type="text" placeholder="Título del post" maxlength="100" autocomplete="off">
                            <textarea name="cita" class="form-control form-control-lg mb-3" placeholder="Cita del post, maximo 160 caractéres" maxlength="160" autocomplete="off"></textarea>
                            <textarea name="text" id="textEdit" class="form-control textedit" autocomplete="off"></textarea>
                            <!-- <textarea name="text" id="editor-container" class="add-new-post__editor mb-3" placeholder="Texto del post..."></textarea> -->
                            <div class="form-group mb-3">
                                <label for="categoria">Categoría:</label>
                                <select name="category_blog_id" id="categorias-blog" class="form-control" autocomplete="off" required>
                                    <option value="" selected>Seleccionar una...</option>
                                    @foreach ($categoriesBlog as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="estado-publicacion">Estado de Publicación:</label>
                                <select name="active" id="estado-publicacion" class="form-control" autocomplete="off" required>
                                    <option value="" selected>Seleccionar una...</option>
                                    <option value="1">Publicar Ahora</option>
                                    <option value="0">Guardar sin Publicar</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tags">Tags:</label>
                                <input type="text" class="tags-edit form-control form-control-lg mb-3" placeholder="Escribe un TAG y presiona ENTER" maxlength="255" autocomplete="off">
                                <div class="tag-list-edit"></div>
                                <input type="hidden" name="tags" class="tags-hidden">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-accent btn-block">Guardar post</button>
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
<script src="/assets/js/app/app-blog-new-post.1.1.0.js"></script>
<script>
$(document).ready(function(){

    tinymce.init({
        selector: 'textarea.textedit', //los q tienen la calse textedit
        menubar: false,
        plugins: 'link',
        toolbar: 'undo redo | bold italic underline | link | styleselect | removeformat | h2 | h3',
        style_formats: [
            { title: 'Título 2', format: 'h2' },
            { title: 'Título 3', format: 'h3' }
        ],
        style_formats_merge: true,
        height: 400
    });

	// $('#first-table').DataTable({
    //     "pageLength": 100 // Configura el número de elementos por página
    // });

});
</script>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script>
$(document).ready(function() {

    //-------------------TAGS---------------
    $('.tags-hidden').val('');
    //tags agregar 
    var tags = [];
    var tagsInputAdd = $(".tags-add");
    var tagListAdd = $(".tag-list");
    var tagsHiddenInputAdd = tagsInputAdd.siblings(".tags-hidden");
    tagsInputAdd.keydown(function(event) {
        if (event.keyCode === 13) { // 13 es el código de tecla Enter
            event.preventDefault(); // Evitar que el formulario se envíe al presionar Enter
            var tagText = tagsInputAdd.val().trim();
            if (tagText !== "") {
                // Agregar la etiqueta al array
                tags.push(tagText);
                // Crear un elemento de etiqueta visible
                var tagElement = $("<span class='tag pr-2 mr-1' style='display: inline-block;border: 1px solid silver;padding: 4px;border-radius: 6px;'>" + tagText + " <a class='remove-tag text-danger' style='cursor:pointer;'>&times;</a></span>");
                // Agregar la etiqueta al elemento de lista de etiquetas
                tagListAdd.append(tagElement);
                // Limpiar el campo de entrada
                tagsInputAdd.val("");
                // Actualizar el campo de entrada oculto con las etiquetas
                tagsHiddenInputAdd.val(tags.join(','));
            }
        }
    });
    //tags editar
    var tagsInputEdit = $(".tags-edit");
    var tagListEdit = tagsInputEdit.siblings(".tag-list-edit");
    var tagsHiddenInputEdit = tagsInputEdit.siblings(".tags-hidden");
    tagsInputEdit.keydown(function(event) {
        if (event.keyCode === 13) { // 13 es el código de tecla Enter
            event.preventDefault(); // Evitar que el formulario se envíe al presionar Enter
            var tagText = tagsInputEdit.val().trim();
            if (tagText !== "") {
                // Agregar la etiqueta al array
                tags.push(tagText);
                // Crear un elemento de etiqueta visible
                var tagElement = $("<span class='tag pr-2 mr-1' style='display: inline-block;border: 1px solid silver;padding: 4px;border-radius: 6px;'>" + tagText + " <a class='remove-tag text-danger' style='cursor:pointer;'>&times;</a></span>");
                // Agregar la etiqueta al elemento de lista de etiquetas
                tagListEdit.append(tagElement);
                // Limpiar el campo de entrada
                tagsInputEdit.val("");
                // Actualizar el campo de entrada oculto con las etiquetas
                tagsHiddenInputEdit.val(tags.join(','));
            }
        }
    });
    //eliminación de etiquetas ADD
    tagListAdd.on("click", ".remove-tag", function() {
        var tagText = $(this).parent().text().trim();
        var index = tags.indexOf(tagText);
        if (index > -1) {
            tags.splice(index, 1);
            // Actualizar el campo de entrada oculto con las etiquetas
            tagsHiddenInputAdd.val(tags.join(','));
        }
        $(this).parent().remove();
    });
    //eliminación de etiquetas EDIT
    tagListEdit.on("click", ".remove-tag", function() {
        var tagText = $(this).parent().text().trim();
        var index = tags.indexOf(tagText);
        if (index > -1) {
            tags.splice(index, 1);
            // Actualizar el campo de entrada oculto con las etiquetas
            tagsHiddenInputEdit.val(tags.join(','));
        }
        $(this).parent().remove();
    });

    //---------------------------------------

    $("form").on("submit", function() {
      $(".ql-clipboard").remove(); // because automatically generated
      $(".ql-tooltip").remove(); // because automatically generated
      $("#hiddenTextarea").val($("#editor-container").html());
    });


    //Datos al modal Editar Blog
    $(document).on('click', '.edit-button', function () {
        var item = $(this).data("item");
        //console.log('entra click',item)
        var id = item.id; // Obtener el ID de la categoría
        var form = $('#ModalEditOne form'); // Obtener el formulario del modal
        form.attr('action', 'blog/' + id);
        $.each(item, function (key, value) {
            //console.log('ddd',value)
            if (key == 'title') { // Verificar si el atributo de datos comienza con 'field'
                form.find('[name="' + key + '"]').val(value); 
            }
            if (key == 'cita') { // Verificar si el atributo de datos comienza con 'field'
                form.find('[name="' + key + '"]').val(value); 
            }
            if (key == 'text') { // Verificar si el atributo de datos comienza con 'field'
                var editor = tinymce.get('textEdit'); // Reemplaza 'editor_id' con el ID de tu textarea TincyMCE
                editor.setContent(value);
            }
            if (key == 'tags') {
                var editTags = value.split(','); // Obtén los tags del artículo que se está editandod
                tags = tags.concat(editTags); // Agrega las etiquetas existentes al array de etiquetas
                // Recorre editTags y crea elementos de etiqueta visibles para ellos
                editTags.forEach(function (tagText) {
                    var tagElement = $("<span class='tag pr-2 mr-1' style='display: inline-block;border: 1px solid silver;padding: 4px;border-radius: 6px;'>" + tagText + " <a class='remove-tag text-danger' style='cursor:pointer;'>&times;</a></span>");
                    // Agrega la etiqueta al elemento de lista de etiquetas
                    $(".tag-list-edit").append(tagElement);
                });
                // Actualiza el campo de entrada oculto con las etiquetas que contienen tanto las etiquetas existentes como las nuevas
                tagsHiddenInputEdit.val(tags.join(','));
            }
            if (key == 'image') { 
                $('#slimEdit').slim('load','/assets/images/blogs/'+value); 
            }
            if (key == 'category_blog_id') { 
                form.find('[name="' + key + '"]').val(value);
            }
            if (key == 'active') { 
                form.find('[name="' + key + '"]').val(value);
            }
        });
        //form.attr('action', 'blog/' + id);
    });
});
</script>

@endsection