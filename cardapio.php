<?php	
	
	$Refeicoes 				= $_POST['ref'];
	$Acompanhamentos		= $_POST['acp'];
	$porcoes				= $_POST['porcoes'];
	$bebidas				= $_POST['bebidas'];
	$quantbebidas			= $_POST['quantbebidas'];
	$sobremesas				= $_POST['sobremesa'];
	$quantsobremesas		= $_POST['quantsobremesas'];
	$coberturas 			= $_POST['coberturas'];
	
	
		
	echo "<h2>Dados recebidos:</h2>" ;
	echo "Refeicao: <b>$Refeicoes</b> <br>" ;
	echo "Acompanhamentos: <b>$Acompanhamentos</b> <br>" ;
	echo "Porcoes: <b>$porcoes</b> <br>" ;
	echo "Bebidas: <b>$bebidas</b> <br>";
	echo "Quantidades de bebidas: <b>$quantbebidas</b><br>";
	echo "Sobremesa: <b>$sobremesas</b><br>";
	echo "Quantidade de Sobremesas: <b>$quantsobremesas</b> <br>";
	echo "Coberturas: <b>$coberturas</b> <br>";
	
	
	$conn=mysqli_connect("localhost", "root","") or 
		die("Erro na conexão com o servidor MYSQL");
	
	
	mysqli_select_db($conn, "cardapio") or 
		die("Erro na seleção do banco " . 
			mysqli_error($conn));
	
	$sql = "INSERT INTO cardapio (refeicoes,acompanhamentos,porcoes,bebidas,quantbebidas,sobremesas,quantsobremesas,coberturas)
			  	       VALUES ('$Refeicoes','$Acompanhamentos','$porcoes','$bebidas','$quantbebidas','$sobremesas','$quantsobremesas', '$coberturas')" ;
	
	//die($sql);
	
	mysqli_query($conn , $sql) or 
		die("Erro na gravação de dados:" .	
			mysqli_error($conn) ) ; 
	
	echo "Dados gravados com sucesso!<br>" ;
	
	
	
?>
Clique <a href="listagemcardapio.php">aqui</a> para ver o pedido.