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

  //------ PARTE FUNCIONES CREAR ENVIO ----
  $(document).on('click', '.shipping-modal-button', function () {
    console.log('open modal confirm pay')
    var type = $(this).data('type');
    var itemData = $(this).data('item');
    var name = $(this).data('name');
    var url = $(this).data('url');
    $('#ModalConfirmShipping .type').text(type);
    $('#ModalConfirmShipping #name').html('<i class="material-icons">arrow_forward</i> '+name);
    //if(surname && surname!=''){ $('#ModalConfirmShipping #surname').html('<i class="material-icons">arrow_forward</i> '+surname); }else{ $('#ModalConfirmShipping #surname').html(''); }
    $('#ModalConfirmShipping .confirm-shipping-button').attr('id', itemData.id);
    $('#ModalConfirmShipping .confirm-shipping-button').attr('data-url', url);
  });
  //Funcion crear envio
  $('.confirm-shipping-button').click(function () {
      var id = $(this).attr('id')
      var url = $(this).attr('data-url');
      createShipping(id, url);
      $('#ModalConfirmShipping').modal('hide');
  });
  // Función para crear envio
  function createShipping(id, url = null) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    // Construct the request body
    const requestBody = {
      payment_id: id,
    };
    fetch(url, {
      method: 'POST',
      headers: {
        'X-Requested-With': 'XMLHttpRequest',
        'X-CSRF-TOKEN': csrfToken,
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(requestBody), // Convert the object to a JSON string
    })
    .then(response => response.json())
    .then(data => {
      if (data.status === 'success') {
        window.location.href = '/admin/payments'; 
        console.log('Shipping creation successful:', data.message);
      } else {
        // Handle other cases if needed
        console.error('Shipping creation failed:', data.error);
      }
    })
    .catch(error => {
      // Handle fetch errors
      console.error('Error creating shipping:', error);
    });
  }  
  //------ PARTE FUNCIONES CONFIRMAR PAGO ----
  $(document).on('click', '.confirm-modal-button', function () {
    console.log('open modal confirm pay')
    var type = $(this).data('type');
    var itemData = $(this).data('item');
    var name = $(this).data('name');
    var url = $(this).data('url');
    $('#ModalConfirmPay .type').text(type);
    $('#ModalConfirmPay #name').html('<i class="material-icons">arrow_forward</i> '+name);
    //if(surname && surname!=''){ $('#ModalConfirmPay #surname').html('<i class="material-icons">arrow_forward</i> '+surname); }else{ $('#ModalConfirmPay #surname').html(''); }
    $('#ModalConfirmPay .confirm-pay-button').attr('id', itemData.id);
    $('#ModalConfirmPay .confirm-pay-button').attr('data-url', url);
  });
    //Funcion confirmar
    $('.confirm-pay-button').click(function () {
      var id = $(this).attr('id')
      var url = $(this).attr('data-url');
      confirmpay(id, url);
      $('#ModalDeleteOne').modal('hide');
  });
  // Función para confirmar pago
  function confirmpay(id, url = null) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    fetch(url + '/' + id, {
      method: 'PUT',
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
          // pago actualizada 
          if(data.payments) {
            window.location.href = '/admin/payments'; 
            // const paymentsTable = document.querySelector('#payments-table');
            // clearTable(paymentsTable);
            // data.categories.forEach((item, index) => {
            //     addCategoryRow(paymentsTable, item, index);
            // });
          }
          //toast y quita elemento de tabla 
          $.toastr.success('Confirmado con éxito');
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
    //------ PARTE FUNCIONES CONFIRMAR ENVIO LLEGO ----
    $(document).on('click', '.btn-recibed-shipping', function () {
      console.log('open modal confirm llego')
      var type = $(this).data('type');
      var itemData = $(this).data('item');
      var url = $(this).data('url');
      $('#ModalEndShippingOne #name').html('<i class="material-icons">arrow_forward</i> '+itemData.payment.code);
      $('#ModalEndShippingOne .confirm-pay-button').attr('id', itemData.payment.id);
      $('#ModalEndShippingOne .confirm-pay-button').attr('data-url', url);
    });
      //Funcion confirmar
      $('.confirm-pay-button').click(function () {
        var id = $(this).attr('id')
        var url = $(this).attr('data-url');
        confirmshippingrecibed(id, url);
        $('#ModalEndShippingOne').modal('hide');
    });
    // Función para confirmar llego envio
    function confirmshippingrecibed(id, url = null) {
      const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
      fetch(url + '/' + id, {
        method: 'PUT',
        headers: {
          'X-Requested-With': 'XMLHttpRequest',
          'X-CSRF-TOKEN': csrfToken,
          'Content-Type': 'application/json'
        }
      }).then(response => {
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
            // pago actualizada 
            if(data.shippings) {
              //window.location.href = '/admin/shipping'; 
              // const paymentsTable = document.querySelector('#payments-table');
              // clearTable(paymentsTable);
              // data.categories.forEach((item, index) => {
              //     addCategoryRow(paymentsTable, item, index);
              // });
            }
            //toast y quita elemento de tabla 
            $.toastr.success('Confirmado con éxito.');
            //window.location.href = '/admin/shipping'; 
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
  //------ PARTE FUNCIONES BORAR ITEM ----
  //abre el modal BORRAR
  $(document).on('click', '.delete-modal-button', function () {
    console.log('open modal delete')
    var type = $(this).data('type');
    var itemData = $(this).data('item');
    console.log('open modal delete', itemData)
    if(itemData.title){ itemData.name = itemData.title }//si tiene titulo es el nombre
    if(type == 'subscriptor'){ itemData.name = itemData.email }//si tiene titulo es el nombre
    if(type == 'sucursal'){ itemData.name = itemData.address_office }//si tiene titulo es el nombre
    if(type == 'payments'){ itemData.name = itemData.name }//si tiene titulo es el nombre
    var surname = $(this).data('surname');
    var url = $(this).data('url');
    $('#ModalDeleteOne .type').text(type);
    $('#ModalDeleteOne #name').html('<i class="material-icons">arrow_forward</i> '+itemData.name);
    if(surname && surname!=''){ $('#ModalDeleteOne #surname').html('<i class="material-icons">arrow_forward</i> '+surname); }else{ $('#ModalDeleteOne #surname').html(''); }
    $('#ModalDeleteOne .delete-button').attr('id', itemData.id);
    $('#ModalDeleteOne .delete-button').attr('data-url', url);
    if (type === 'categoría') {
      $('.deletesub').css('display', 'block');
    } else {
        $('.deletesub').css('display', 'none');
    }
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
              addProductsRow(itemsTable, item, index, data.subcategories);
            });
            updateCategorySelect()//actualiza select categorias
          }
          if(data.blogs){
            const itemsTable = document.querySelector('#blogs-table');
            clearTable(itemsTable);
            data.blogs.forEach((item, index) => {
              addBlogsRow(itemsTable, item, index);
            });
            //updateCategorySelect()//actualiza select categorias
          }
          if(data.subscribers){
            const itemsTable = document.querySelector('#subscribers-table');
            clearTable(itemsTable);
            data.subscribers.forEach((item, index) => {
              addSubscriberRow(itemsTable, item, index);
            });
            //updateCategorySelect()//actualiza select categorias
          }
          if(data.users){
            const itemsTable = document.querySelector('#users-table');
            clearTable(itemsTable);
            data.users.forEach((item, index) => {
              addUsersRow(itemsTable, item, index);
            });
            //updateCategorySelect()//actualiza select categorias
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
      method: "POST",
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
            addProductsRow(itemsTable, item, index, data.subcategoriesAll);
          });
          updateCategorySelect()//actualiza select categorias
        }else if(data.categoriesBlog){
          const itemsTable = document.querySelector('#list-ategory-blog');
          itemsTable.innerHTML = '';//clear list
          document.getElementById('categorias-blog').innerHTML = '';//clear select
          data.categoriesBlog.forEach((item, index) => {
            addCategoryBlogRow(itemsTable, item, index);
          });
        }else if(data.users){
          const itemsTable = document.querySelector('#users-table');
          clearTable(itemsTable);
          data.users.forEach((item, index) => {
            addUsersRow(itemsTable, item, index);
          });
          //updateCategorySelect()//actualiza select categorias
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
      <td class="text-center"><button class="btn btn-warning edit-button" data-toggle="modal" data-target="#ModalEditCat" data-id="${category.id}" data-name="${category.name}" data-image="${category.image}" >Editar <i class="material-icons">edit</i></button></td>
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
function addProductsRow(table, item, index, subcategories) {
  const tbody = table.querySelector('tbody');
  const row = document.createElement('tr');
  row.innerHTML = `
      <td><img src="/assets/images/products/${item.image1}" style="width:65px;"></td>
      <td>${item.name}</td>
      <td>$${item.price}</td>
      <td>${item.category ? item.category.name : '----'}</td>
      <td class="text-center"><button type="button" class="btn btn-primary show-button" data-toggle="modal" data-target="#ModalShowOne">Ver <i class="material-icons">visibility</i></button></td>
      <td class="text-center"><type="button" class="btn btn-warning edit-button" data-toggle="modal" data-target="#ModalEditOne" data-item='${JSON.stringify(item)}' data-subcategories='${JSON.stringify(subcategories)}'>Editar <i class="material-icons">edit</i></button></td>
      <td class="text-center"><button class="btn btn-danger delete-modal-button" data-toggle="modal" data-target="#ModalDeleteOne" data-item='${JSON.stringify(item)}' data-type="producto" data-url="products">Borrar <i class="material-icons">delete</i></button></td>`;
  tbody.appendChild(row);
  // Actualizar count"
  const count = document.getElementById('count-product');
  count.textContent = index + 1;
}
// Actualiza tabla blogs
function addBlogsRow(table, item, index) {
  const tbody = table.querySelector('tbody');
  const row = document.createElement('tr');
  row.innerHTML = `
      <td><img src="/assets/images/blogs/${item.image}" style="width:65px;"></td>
      <td>${item.title}</td>
      <td>${item.category ? item.category.name : '----'}</td>
      <td class="text-center"><a type="button" class="btn btn-info show-button" href="/blog/${item.url}"  target="_blank" >Ver <i class="material-icons">open_in_new</i></a></td>
      <td class="text-center"><type="button" class="btn btn-warning edit-button" data-toggle="modal" data-target="#ModalEditOne" data-item='${JSON.stringify(item)}'>Editar <i class="material-icons">edit</i></button></td>
      <td class="text-center"><button class="btn btn-danger delete-modal-button" data-toggle="modal" data-target="#ModalDeleteOne" data-item='${JSON.stringify(item)}' data-type="blog" data-url="blog">Borrar <i class="material-icons">delete</i></button></td>`;
  tbody.appendChild(row);
  // Actualizar count"
  //const count = document.getElementById('count-product');
  //count.textContent = index + 1;
}
// Actualiza tabla subscriptores
function addSubscriberRow(table, item, index) {
  const tbody = table.querySelector('tbody');
  const row = document.createElement('tr');
  const formattedDate = formatCreatedAtDate(item.created_at);
  row.innerHTML = `
      <td>${index + 1}</td>
      <td>${item.email}</td>
      <td>${formattedDate}</td>
      <td class="text-center"><button class="btn btn-danger delete-modal-button" data-toggle="modal" data-target="#ModalDeleteOne" data-item='${JSON.stringify(item)}' data-type="subscriptor" data-url="subscriber">Borrar <i class="material-icons">delete</i></button></td>`;
  tbody.appendChild(row);
  // Actualizar count"
  const count = document.getElementById('count-product');
  count.textContent = index + 1;
}
// Actualiza tabla usuarios
function addUsersRow(table, item, index) {
  const tbody = table.querySelector('tbody');
  const row = document.createElement('tr');
  row.innerHTML = `
  <td><img class="user-avatar rounded-circle" src="${item.image ? '/assets/images/users/'+item.image : '/assets/images/no-user.png'}" style="width:30px;"></td>
  <td>${item.name}</td>
  <td>${item.user_type.name}</td>
  <td>${item.email}</td>
  <td>${item.active == 1 ? '<span class="text-success"><i class="material-icons">check</i>Activo</span>' : '<span class="text-danger" style="font-size: 12px;"><i class="material-icons">clear</i>InActivo</span>'}</td>
  <td class="text-center"><button class="btn btn-warning edit-button" data-toggle="modal" data-target="#ModalEditOne" data-item='${JSON.stringify(item)}'>Editar <i class="material-icons">edit</i></button></td>
  <td class="text-center">${item.id != 1 ? `<button class="btn btn-danger delete-modal-button" data-toggle="modal" data-target="#ModalDeleteOne" data-item='${JSON.stringify(item)}' data-type="cuenta" data-url="accounts">Borrar <i class="material-icons">delete</i></button>` : ''}</td>`;
  tbody.appendChild(row);
  // Actualizar count"
  //const count = document.getElementById('count-product');
  //count.textContent = index + 1;
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


// Actualiza listra categoria-Blogs
function addCategoryBlogRow(table, item, index) {
  table.innerHTML += `
    <div class="form-control mb-1">
      <label class="" for="category1">${item.name}</label>
      <button type="button" class="btn btn-danger float-right" data-item='${item}' data-type="category-blog" >Borrar <i class="material-icons">delete</i></button>
    </div>`;
    // Actualizar el contenido del select con las categorías
    const categoriasSelect = document.getElementById('categorias-blog');
    if(item){
        const option = document.createElement('option');
        option.value = item.id;
        option.textContent = item.name;
        categoriasSelect.appendChild(option);
    }
}

//formato date time
function formatCreatedAtDate(inputDate) {
  const date = new Date(inputDate);
  date.setUTCHours(date.getUTCHours(), date.getUTCMinutes());
  const day = String(date.getUTCDate()).padStart(2, '0');
  const month = String(date.getUTCMonth() + 1).padStart(2, '0');
  const year = date.getUTCFullYear();
  const hours = String(date.getUTCHours()).padStart(2, '0');
  const minutes = String(date.getUTCMinutes()).padStart(2, '0');
  return `${day}/${month}/${year} ${hours}:${minutes}`;
}

})();
