$('#log').submit(function (e)){
    $.ajax({
      type: 'post',
      url: '../php/login.php',
      data: $(id).serialize(),
      success: function (e){
          alert(e);
      }
    });
});
