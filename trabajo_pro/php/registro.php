<?php
  require_once 'conection.php';
  //se guarda los valores de los input en variables locales
  $bsnombre=$_POST['nombreuser'];
  $bsapellido=$_POST['apellidouser'];
  $bscorreo=$_POST['correouser'];
  $bscontraseña=$_POST['pass'];
  $bsrecontrasena=$_POST['pass2'];
  $bssexo=$_POST['sexo'];
  $bspregunta=$_POST['preseg'];
  $bsrespuesta=$_POST['resp'];
//verifica que el correo no se halla usado antes
  $vali="SELECT correo FROM registro WHERE correo='$bscorreo'";

      $resul=$db->query($vali);

      if ($resul->num_rows > 0) {

        echo "Este email ya se a registrado";
      }else {
        //se incricta la contrase;a
        $passincric=password_hash($bscontraseña,PASSWORD_DEFAULT);
        //se inserta los datos
        $query="INSERT INTO registro (nombres,apellidos,correo,contrasenia,sexo,sec_pregunta,sec_respuesta)VALUES('$bsnombre','$bsapellido','$bscorreo','$passincric','$bssexo','$bspregunta','$bsrespuesta')";
        //verifica si se guardo el usuario
        if ($db->query($query)) {
              header('Location: ../index.html');
            }else {
              echo "Error al registrar";
          }
      }
 ?>
