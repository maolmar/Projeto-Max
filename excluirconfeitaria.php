<?php


    $prod=$_GET['p'];
	
	
	echo "você ira excluir o Produto $prod  <br>";

	$sql= "delete from confeitaria where produtos='$prod';";
	include "conexao.php";
	mysqli_query($conn, $sql) or 
		die("Erro na eliminaçãoo do produto: $prod" .
			mysqli_error($conn) );
	// Se chegou aqui ent?funcionou
	echo "Produto: $prod excluido<hr>";


?>
Clique <a href="listagemconfeitaria.php"> aqui </a> 
para visualizar os produtos.