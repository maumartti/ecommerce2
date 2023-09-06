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
          data.categories.forEach((category, index) => {
              addCategoryRow(categoriesTable, category, index);
          });
          updateCategorySelect()//actualiza select categorias
        }else if(data.subcategories){
          const categoriesTable = document.querySelector('#subcategories-table');
          clearTable(categoriesTable);
          data.subcategories.forEach((Subcategory, index) => {
            addSubCategoryRow(categoriesTable, Subcategory, index);
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
      <td class="text-center"><button class="btn btn-danger">Borrar <i class="material-icons">delete</i></button></td>`;
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
      <td>${sub.category.name}</td>
      <td class="text-center"><button class="btn btn-warning">Editar <i class="material-icons">edit</i></button></td>
      <td class="text-center"><button class="btn btn-danger">Borrar <i class="material-icons">delete</i></button></td>`;
  tbody.appendChild(row);
  // Actualizar count"
  const countSubcat = document.getElementById('count-subcat');
  countSubcat.textContent = index + 1;
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
