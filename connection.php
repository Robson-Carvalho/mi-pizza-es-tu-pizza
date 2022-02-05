<?php
	/*Conectando ao banco*/
$connection = mysqli_connect("localhost", "root", "", "mi-pizza-es-tu-pizza") or 
die("Erro ao conectar a Base de Dados");
mysqli_set_charset($connection, "utf8");
?>