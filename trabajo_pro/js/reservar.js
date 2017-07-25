funcion transport(id){
  $.ajax({
    type: 'post',
    url: '../php/agregar.php',
    data: $(id).serialize(),
    success: function (e){
        alert(e);
    }
  });
}
