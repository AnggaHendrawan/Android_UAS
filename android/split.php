<?php
$string = "contoh_php_explode";
$pecah=explode("_", $string);

for ($i=0;$i<count($pecah);$i++){
	echo $pecah[$i]."<br/>";
}
?>