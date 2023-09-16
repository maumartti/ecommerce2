/**
* PHP Email Form Validation - v3.6
* URL: https://bootstrapmade.com/php-email-form/
* Author: BootstrapMade.com
*/
(function () {
  "use strict";

  let forms = document.querySelectorAll('.php-email-form');
  console.log('Form')

  forms.forEach( function(e) {
    e.addEventListener('submit', function(event) {
      event.preventDefault();

      let thisForm = this;

      let action = thisForm.getAttribute('action');
      let recaptcha = thisForm.getAttribute('data-recaptcha-site-key');
      
      if( ! action ) {
        displayError(thisForm, 'The form action property is not set!');
        return;
      }
      // thisForm.querySelector('.loading').classList.add('d-block');
      // thisForm.querySelector('.error-message').classList.remove('d-block');
      // thisForm.querySelector('.sent-message').classList.remove('d-block');

      let formData = new FormData( thisForm );

      if ( recaptcha ) {
        if(typeof grecaptcha !== "undefined" ) {
          grecaptcha.ready(function() {
            try {
              grecaptcha.execute(recaptcha, {action: 'php_email_form_submit'})
              .then(token => {
                formData.set('recaptcha-response', token);
                php_email_form_submit(thisForm, action, formData);
              })
            } catch(error) {
              displayError(thisForm, error);
            }
          });
        } else {
          displayError(thisForm, 'The reCaptcha javascript API url is not loaded!')
        }
      } else {
        php_email_form_submit(thisForm, action, formData);
      }
    });
  });



//------ PARTE FUNCIONES BORAR ITEM ----

  //abre el modal BORRAR
  $(document).on('click', '.delete-modal-button', function () {
    console.log('open modal delete')
    var itemData = $(this).data('item');
    var type = $(this).data('type');
    var url = $(this).data('url');
    $('#ModalDeleteOne .type').text(type);
    $('#ModalDeleteOne #name').text(itemData.name);
    $('#ModalDeleteOne .delete-button').attr('id', itemData.id);
    $('#ModalDeleteOne .delete-button').attr('data-url', url);

});
  //Funcion borrar
  $('.delete-button').click(function () {
      var deleteId = $(this).attr('id')
      var url = $(this).attr('data-url');
      deleteItem(deleteId, url);
      $('#ModalDeleteOne').modal('hide');
  });
  // Función para eliminar un elemento
  function deleteItem(itemId, url = null) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    fetch(url + '/' + itemId, {
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
          // categorías actualizada 
          if(data.categories) {
            const categoriesTable = document.querySelector('#categories-table');
            clearTable(categoriesTable);
            data.categories.forEach((item, index) => {
                addCategoryRow(categoriesTable, item, index);
            });
            updateCategorySelect()//actualiza select categorias
          }
          if(data.subcategories){
            const categoriesTable = document.querySelector('#subcategories-table');
            clearTable(categoriesTable);
            data.subcategories.forEach((item, index) => {
              addSubCategoryRow(categoriesTable, item, index);
            });
            updateCategorySelect()//actualiza select categorias
          }
          if(data.products){
            const itemsTable = document.querySelector('#products-table');
            clearTable(itemsTable);
            data.products.forEach((item, index) => {
              addProductsRow(itemsTable, item, index);
            });
            updateCategorySelect()//actualiza select categorias
          }
          //toast y quita elemento de tabla 
          $.toastr.success('Eliminado con éxito');
          //$(`[id="${url}-${itemId}"]`).closest('tr').remove();
        } else {
          $.toastr.success('Error al Eliminar');
        }
      })
      .catch(error => {
        console.error('Error al eliminar el elemento: ', error);
        alert('Error al eliminar el elemento');
      });
  }
//------END--PARTE--BORAR-ITEMMM



  function php_email_form_submit(thisForm, action, formData) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    fetch(action, {
      method: 'POST',
      body: formData,
      headers: {
        'X-Requested-With': 'XMLHttpRequest',
        'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the headers
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
      // Process the response
      if (data.status === 'success') {
        $.toastr.success('Guardado con éxito');

        // categorías actualizada 
        if(data.categories) {
          const categoriesTable = document.querySelector('#categories-table');
          clearTable(categoriesTable);
          data.categories.forEach((item, index) => {
              addCategoryRow(categoriesTable, item, index);
          });
          updateCategorySelect()//actualiza select categorias
        }else if(data.subcategories){
          const categoriesTable = document.querySelector('#subcategories-table');
          clearTable(categoriesTable);
          data.subcategories.forEach((item, index) => {
            addSubCategoryRow(categoriesTable, item, index);
          });
          updateCategorySelect()//actualiza select categorias
        }else if(data.products){
          const itemsTable = document.querySelector('#products-table');
          clearTable(itemsTable);
          data.products.forEach((item, index) => {
            addProductsRow(itemsTable, item, index);
          });
          updateCategorySelect()//actualiza select categorias
        }

      } else {
        $.toastr.error(data.message || 'Form submission failed and no error message returned from: ' + action);
      }
    })
    .catch(error => {
      $.toastr.error(error.message);
      displayError(thisForm, error);
    });
  }

  function displayError(thisForm, error) {
    $.toastr.config({
      position: 'top-right', 
      time: 7000,
      size: 'lg',
    });
    if(error){
      //$.toastr.error(error);
    }
    //$.toastr.success('Guardado con éxito');
    // $.toastr.info('Info  Message');
	  // $.toastr.warning('Warning  Message');
	  // $.toastr.error('Error  Message');
    // thisForm.querySelector('.loading').classList.remove('d-block');
    // thisForm.querySelector('.error-message').innerHTML = error;
    // thisForm.querySelector('.error-message').classList.add('d-block');
  }





//FUNCIONES AGREGADAS PARA GESTIONAR ACTUALIZACIONES DE DATOS EN LAS VISTAS

// Función para limpiar una tabla
function clearTable(table) {
  const tbody = table.querySelector('tbody');
  tbody.innerHTML = '';
}

// Actualiza tabla categorías
function addCategoryRow(table, category, index) {
  const tbody = table.querySelector('tbody');
  const row = document.createElement('tr');
  row.innerHTML = `
      <td>${index + 1}</td>
      <td>${category.name}</td>
      <td class="text-center"><button class="btn btn-warning">Editar <i class="material-icons">edit</i></button></td>
      <td class="text-center"><button class="btn btn-danger delete-modal-button" data-toggle="modal" data-target="#ModalDeleteOne" data-item='${JSON.stringify(category)}' data-type="categoría" data-url="categories">Borrar <i class="material-icons">delete</i></button></td>`;
  tbody.appendChild(row);
  // Actualizar count"
  const countSubcat = document.getElementById('count-cat');
  countSubcat.textContent = index + 1;
}
// Actualiza tabla sub-categorías
function addSubCategoryRow(table, sub, index) {
  const tbody = table.querySelector('tbody');
  const row = document.createElement('tr');
  row.innerHTML = `
      <td>${index + 1}</td>
      <td>${sub.name}</td>
      <td>${sub.category ? sub.category.name : ''}</td>
      <td class="text-center"><button type="button" class="btn btn-warning edit-button" data-toggle="modal" data-target="#ModalEditSubCat" data-id="${sub.id}" data-name="${sub.name}" data-category_id="${sub.category ? sub.category.id : ''}">Editar <i class="material-icons">edit</i></button></td>
      <td class="text-center"><button class="btn btn-danger delete-modal-button" data-toggle="modal" data-target="#ModalDeleteOne" data-item='${JSON.stringify(sub)}' data-type="subcategoría" data-url="subcategories">Borrar <i class="material-icons">delete</i></button></td>`;
  tbody.appendChild(row);
  // Actualizar count"
  const countSubcat = document.getElementById('count-subcat');
  countSubcat.textContent = index + 1;
}
// Actualiza tabla productos
function addProductsRow(table, item, index) {
  const tbody = table.querySelector('tbody');
  const row = document.createElement('tr');
  row.innerHTML = `
      <td><img src="/assets/images/products/${item.image1}" style="width:65px;"></td>
      <td>${item.name}</td>
      <td>$${item.price}</td>
      <td>${item.category ? item.category.name : '----'}</td>
      <td class="text-center"><button type="button" class="btn btn-primary show-button" data-toggle="modal" data-target="#ModalShowOne" data-item='${JSON.stringify(item)}'>Ver <i class="material-icons">visibility</i></button></td>
      <td class="text-center"><type="button" class="btn btn-warning edit-button" data-toggle="modal" data-target="#ModalEditOne" data-item='${JSON.stringify(item)}'>Editar <i class="material-icons">edit</i></button></td>
      <td class="text-center"><button class="btn btn-danger delete-modal-button" data-toggle="modal" data-target="#ModalDeleteOne" data-item='${JSON.stringify(item)}' data-type="producto" data-url="products">Borrar <i class="material-icons">delete</i></button></td>`;
  tbody.appendChild(row);
  // Actualizar count"
  const count = document.getElementById('count-product');
  count.textContent = index + 1;
}

//Actualiza SELECT Categorias
function updateCategorySelect() {
  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  const categoriesUrl = 'categoriesAll'; // Reemplaza '/categories' con la URL correcta
  fetch(categoriesUrl, {
      method: 'GET', // Utiliza el método GET para obtener las categorías
      headers: {
          'X-Requested-With': 'XMLHttpRequest',
          'X-CSRF-TOKEN': csrfToken,
          'Content-Type': 'application/json' // Puedes establecer el tipo de contenido según tu necesidad
      }
  })
  .then(response => response.json())
  .then(data => {
      // Actualizar el contenido del select con las categorías
      const categoriasSelect = document.getElementById('categorias');
      categoriasSelect.innerHTML = ''; // Limpiar el select
      if (data.categories) {
          data.categories.forEach(category => {
              const option = document.createElement('option');
              option.value = category.id;
              option.textContent = category.name;
              categoriasSelect.appendChild(option);
          });
      }
  })
  .catch(error => {
      console.error('Error al cargar las categorías: ', error);
  });
}



})();
