<?php
session_start();
  require_once 'conection.php';
  $tanda = $_POST['tanda'];
  $ticket = $_POST['ticket'];
  $sala = $_POST['sala'];
  $pago = $_POST['tipoP'];


  $vali="INSERT INTO reservar (titulo,tandas,tickets,totalp,sala,foma_pago,correo,tarjeta) values ()";

      $resul=$db->query($vali);

      if ($resul->num_rows > 0) {
        echo "Este email ya se a registrado";

      }else {
        //se incricta la contrase;a
        $passincric=password_hash($bscontraseña,PASSWORD_DEFAULT);
        //se inserta los datos
        $query="INSERT INTO registro (Rnombre,Rapellido,Rcorreo,Rpasswork,Rsexo)VALUES('$bsnombre','$bsapellido','$bscorreo','$passincric','$bssexo')";
        //verifica si se guardo el usuario
        if ($db->query($query)) {
              header('Location: ../index.html');
            }else {
              echo "Error al registrar";
          }
      }
?>
