<?php
  $zahl = "";
  $binaer = ""; 
  if ($_GET["Senden"] == "Umwandeln") {
    $zahl = $_GET["eingabe"];
    $binaerwerte = array();
    
    for ($i = 7; $i >= 0; $i--) {
      if ($zahl & pow(2, $i)) {
        $binaerwerte[$i] = 1; 
      } else {
        $binaerwerte[$i] = 0;
      }
    }
    $binaer = join("", $binaerwerte);
  }
?>

<html>
<head>
  <title>peng</title>
</head>
<body>
  <form>
    <input type="text" name="eingabe" value="<?=$zahl ?>" />
    <input type="text" name="ausgabe" value="<?=$binaer ?>" />
    <input type="submit" name="Senden" value="Umwandeln" />
  </form>
</body>
</html>
