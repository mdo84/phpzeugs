<?php 

function peng($zahl) {
echo $zahl;
}

peng(23434523459);

function f00($par1, $param2, $param3 = "standardwert") {
  echo $par1;
  echo $param2;
  echo $param3;
}

f00(1,2);

$peng = function($param) {
  echo "anonymous function...";
  echo $param;
}

$peng('sis')
?>
