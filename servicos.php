<?php
	
	$Produtos 		   = $_POST['produtos'];  	
	$sabores		   = $_POST['sabores'];
	$tipos			   = $_POST['tipos'];
	$quantidades	   = $_POST['quantidade'];
	$encomendas		   = $_POST['encomendas'];
	$kitfestas		   = $_POST['kf'];
	$quantidadepizzas = $_POST['quantidadepizzas'];
	$dataentrega	   = $_POST['dataentrega'];
	
	
	echo "<h2>Confeitaria</h2>" ; 
	echo "Produto: <b>$Produtos</b> <br>"; 
	echo "Tipo : <b>$tipos</b><br>";
	echo "Quantidade: <b>$quantidades</b> <br>" ;
	echo "Kit festas: <b>$kitfestas</b> <br>" ;
	echo "Data de entrega:  <b>$dataentrega</b> <br>";
	echo "<h2>Pizzaria</h2>";
	echo "Sabores: <b>$sabores</b> <br>" ;
	echo "Encomenda : <b>$encomendas</b> <br>" ;
	echo "Quantidade de Pizzas: <b>$quantidadepizzas</b> <br>" ;
	echo "<h1> Obrigado pela prefêrencia volte sempre!</h1>";
	
	
	$conn = mysqli_connect("localhost",
					"root",
					"" ) or
		die("Não foi possível conectar no MYSQL.") ;
	
	mysqli_select_db($conn, "cardapio") or
		die( "Erro na abertura do banco:" .
				mysqli_error($conn) ) ;
	
	$sql1 = "INSERT INTO confeitaria (produtos,tipos,quantidades,kitfestas,dataentrega)
			  	       VALUES ('$Produtos','$tipos','$quantidades','$kitfestas','$dataentrega')" ;
			//die($sql1);
			
	$sql2 = "INSERT INTO pizzaria (sabores,encomendas,quantidadesdepizzas)
						VALUES('$sabores','$encomendas','$quantidadepizzas')";
			
			//die ($sql2);
	
	mysqli_query($conn , $sql1) or 
		die("Erro na gravação de dados:" .	
			mysqli_error($conn) ) ;
	
	mysqli_query($conn , $sql2) or 
		die("Erro na gravação de dados:" .	
			mysqli_error($conn) ) ;			
			
			echo "Seus Dados foram encaminhados para nossa central. Aguarde o contato de nossa empresa para confirmação do pedido!. Obrigado!<br>" ;
	
	
	
?>
Clique <a href="listagemconfeitaria.php">aqui</a> para ver os pedido gravados.
