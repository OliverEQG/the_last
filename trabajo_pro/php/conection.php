<?php
  $db = new MYSQLi('localhost','root','','cinetron');
  if (!$db) {
    echo "Error en la connexion a la base de datos ".$db->connection_error;
  }
 ?>
