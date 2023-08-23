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
      if (data.message === 'Data saved successfully') {
        $.toastr.success('Guardado con éxito');
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

})();
