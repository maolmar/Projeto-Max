<?php // salvar como conexao.php
	// Conectando no servidor MYSQL:
	$conn=mysqli_connect("localhost", "root","") or 
		die("Erro na conex�o com o servidor MYSQL");
	
	// Selecionando o banco de dados RH:
	mysqli_select_db($conn, "cardapio") or 
		die("Erro na sele��o do banco" . 
			mysqli_error($conn));
?>