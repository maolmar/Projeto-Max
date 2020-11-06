<?php

 $sabores=$_GET['s'];
	
	
	echo "voccê ira excluir a pizza $sabores  <br>";

	$sql= "delete from pizzaria where sabores='$sabores';";
	include "conexao.php";
	mysqli_query($conn, $sql) or 
		die("Erro na eliminação da pizza: $sabores" .
			mysqli_error($conn) );
	
	echo "Pizza: $sabores excluido<hr>";


?>
Clique <a href="listagemconfeitaria.php"> aqui </a> 
para visualizar os produtos.
