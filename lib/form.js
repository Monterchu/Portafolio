$(function() {
  $(document).on('submit', '#form', function() {
    var post_url = "formulario.php";
    var formData = new FormData(document.getElementById("form"));

   $.ajax({
      type: 'POST',
      url: post_url,
      timeout: 15000,
      dataType: "HTML",
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function(data) {
        console.log(data);
        if (data == 1) {
          // location.href="gracias.html";
          alert('bien');
          console.log(data);
        }else if (data != '') {
          showErrorForms(data);
          console.log(data);
        }
      },
      error: function(data) {
        alert('Error de conexion, Favor verifique su conexión a internet');
      }
    });
    return false;
  });
});
