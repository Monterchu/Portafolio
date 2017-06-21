$(function() {
  $(document).on('submit', '#form', function() {
    var post_url = "lib/formulario.php";
    var formData = new FormData(document.getElementById("form"));
    console.log('asasas');
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
          // location.href="http://google.com";
          // alert('Gracias, respondere lo màs rapido posible');
          $(document).ready(function() {
          $(".various").fancybox({
            maxWidth	: 800,
            maxHeight	: 600,
            fitToView	: false,
            width		: '70%',
            height		: '70%',
            autoSize	: false,
            closeClick	: false,
            openEffect	: 'none',
            closeEffect	: 'none'
          });
        });

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
