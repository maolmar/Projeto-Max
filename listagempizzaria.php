<?php

	
	
	include "conexao.php";
	
	$Sqlpizzaria = 'select * from pizzaria ';

	$Dadospizzaria= mysqli_query($conn, $Sqlpizzaria) or 
		die("Erro na consulta da confeitaria" . mysqli_error($conn));
		
	
	$totlinhas=mysqli_num_rows($Dadospizzaria)  or 
		die("Erro na contagem de linhas:" . mysqli_error($conn));
	
	if($totlinhas<1){
		die ("O Banco esttá vazio");
	}
	
	echo "<h2>Listagem da Pizzaria</h2>";
	echo "<table border='1'>";
	echo "	<tr>";
	echo "		<th>Sabores</th>";
	echo "		<th>Encomendas</th>";
	echo "		<th>Quantidades de Pizzas</th>";
	echo "		<th colspan='2'>Ações</th>";
	echo "	</tr>";
	
	while ($dados = mysqli_fetch_array($Dadospizzaria))
	{
		
		$sab=$dados['sabores'];
		$Encomendas=$dados['encomendas'];	
		$quanti=$dados['quantidadesdepizzas'];
		
		
		echo "<tr>";
		echo " 	<td>$sab</td>";
		echo " 	<td>$Encomendas</td>";
		echo " 	<td>$quanti</td>";
		echo "	<td> <a href='excluirpizzaria.php?s=$sab'>Excluir</a></td>";
		echo "</tr>";
	}
		echo "</table>";
		
		
?>