$("#submit-button, #submit-subscription").on("click", function(event) {
  if($(event.target.form)[0] != undefined) {
    var form = $(event.target.form)[0];

    if (!form.checkValidity()) {
      var tmpSubmit = document.createElement('button');
      form.appendChild(tmpSubmit);
      tmpSubmit.click();
      form.removeChild(tmpSubmit);
      return false;
    }

    var form_data = new FormData(form);

    var form_children = $(form).find(".editor");

    if(form_children.length > 0) { 
      var editorData = editor.getData();
      if(form_children[0] != undefined) {
        if(form_children[0].name != undefined) {
          form_data.append(form_children[0].name, editorData);
        }
      }
    }

    Swal.fire({
      toast: false,
      title: 'Processing..',
      text: 'One moment please..',
      allowEscapeKey : false,
      allowOutsideClick: false,
      onOpen: function() {
        $.ajax({
          type: $(form).attr('method'),
          url: $(form).attr('action'),
          processData: false,
          contentType: false,
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: form_data,
        }).done(function(data) {
        }).fail(function(data) {
        }).always(function(data) {
          console.log(data);

          
          $(form).find(".form-error-box").remove();
          $(form).find(".invalid-feedback").remove();
          $(form).find(".is-invalid").removeClass('is-invalid');

          if(data != undefined) {

            if(data.responseJSON != undefined && (data.responseJSON.errors != undefined || data.responseJSON.exception != undefined)) {
              Swal.update({
                allowEscapeKey : false,
                allowOutsideClick: false,
                icon: 'error',
                text: 'Došlo je do greške. Molimo pokušajte ponovo!',
                title: 'Greška!',
              });
              Swal.hideLoading();

              var html_error_segment = '<div class="form-group p-4 form-error-box"><h2 id="errors-title">Nastupile su sljedeće greške:</h2></div>';
              var error_title_element = $("#errors-top").append(html_error_segment);

              if(data.responseJSON.errors != undefined) {
                for (var key in data.responseJSON.errors) {
                  error_title_element.find("#errors-title").after("<li>" + data.responseJSON.errors[key] + "</li>");
                  $("#" + key).addClass('is-invalid');
                  $("#" + key).after('<span class="invalid-feedback mb-3" role="alert"><strong>' + data.responseJSON.errors[key] + '</strong></span>');
                }
              } else if(data.responseJSON.exception != undefined) {
                error_title_element.find("#errors-title").after("<li>" + data.responseJSON.exception + "</li>");
              }

              $("#errors-top").show();
              throw new Error;
            }

            Swal.fire({
              icon: data.swal_icon,
              text: data.swal_message,
              title: data.swal_title,
              allowEscapeKey : false,
              allowOutsideClick: false,
            }).then(function() {
              if(data.redirect_url != null && data.redirect_url != '') {
                window.location.href = data.redirect_url;
              }
            });
            Swal.hideLoading();
          }
        });
        Swal.showLoading();
      }
    });
  }
});