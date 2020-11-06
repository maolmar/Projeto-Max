<?php	

	$Refe=$_GET['r'];
	$acom = $_GET['a'];
	$por=$_GET['p'];
	$beb=$_GET['b'];
	$QB=$_GET['q'];
	$sobre=$_GET['s'];
	$qs=$_GET['qss'];
	$cobe=$_GET['c'];
	
	echo "você ira excluir a Refeiçãoo $Refe.<br>";

	$sql= "delete from cardapio where refeicoes='$Refe';";
	include "conexao.php";
	mysqli_query($conn, $sql) or 
		die("Erro na eliminação da Refeiçãoo $Refe<br>" .
			mysqli_error($conn) );
	echo "Refeição: $Refe excluida<hr>";
?>
Clique <a href="listagemcardapio.php"> aqui </a> 
para visualizar as refeições existentes.
