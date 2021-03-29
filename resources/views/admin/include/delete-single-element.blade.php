<script>
	function deleteSingleItem(test) {
    var form = $(test).parent();

    if(form[0] == undefined) {
    	throw new Error;
    }

    var form_data = new FormData(form[0]);

    Swal.fire({
      icon: 'warning',
      text: 'Jeste li sigurni da želite izbrisati?',
      title: 'Jeste li sigurni?',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Da, siguran/a sam!',
      cancelButtonText : 'Odustani',
      allowEscapeKey : false,
      allowOutsideClick: false
    }).then((result) => {
      if(result.dismiss === Swal.DismissReason.cancel) {
          return false;
          throw new Error;
      } else {
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
              if(data != undefined) {
                if(data.responseJSON != undefined && (data.responseJSON.errors != undefined || data.responseJSON.exception != undefined)) {
                  Swal.update({
                    allowEscapeKey : false,
                    allowOutsideClick: false,
                    icon: 'error',
                    text: 'An error has occurred. Please try again or contact support.',
                    title: 'An error has occurred!',
                  });
                  Swal.hideLoading();
                  throw new Error;
                } else {
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
              }
            });
            Swal.showLoading();
          }
        });
      }
    });
	}
</script>