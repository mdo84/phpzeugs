<?php
require.once(db_login.php)
  if ($db = mysqli_connect($db_host, $db_username, $db_password)) {
    mysqli_select_db($db, $db_database);
    echo "Verbindungsaufbau erfolgreich";
    mysqli_close($db);
  } else {
    echo "Fehler bei der Datenbankverbindung";
  }
?>

