<?php
	
	
	include "conexao.php";
	
	$Sqlconfeitaria = 'select * from confeitaria ';

	$Dadosconfeitaria= mysqli_query($conn, $Sqlconfeitaria) or 
		die("Erro na consulta da confeitaria" . mysqli_error($conn));
		
	
	$totlinhas=mysqli_num_rows($Dadosconfeitaria)  or 
		die("Erro na contagem de linhas:" . mysqli_error($conn));
	
	if($totlinhas<1){
		die ("O Banco esttá vazio");
	}
	
	echo "<h2>Listagem da Confeitaria</h2>";
	echo "<table border='1'>";
	echo "	<tr>";
	echo "		<th>Produtos</th>";
	echo "		<th>Tipos</th>";
	echo "		<th>Quantidades</th>";
	echo "		<th>KitFestas</th>";
	echo "		<th>Data de entrega</th>";
	echo "		<th colspan='2'>Ações</th>";
	echo "	</tr>";
	
	while ($dados = mysqli_fetch_array($Dadosconfeitaria))
	{
		
		$prod=$dados['produtos'];
		$tip=$dados['tipos'];	
		$quant=$dados['quantidades'];
		$kit = $dados['kitfestas'];
		$data=$dados['dataentrega'];
		
		echo "<tr>";
		echo " 	<td>$prod</td>";
		echo " 	<td>$tip</td>";
		echo " 	<td>$quant</td>" ;
		echo " 	<td>$kit</td>";		
		echo " 	<td>$data</td>";
		echo "	<td> <a href='excluirconfeitaria.php?p=$prod'>Excluir</a></td>";
		echo "</tr>";
	}
		echo "</table>";
		
		include "listagempizzaria.php";
		
		
?>
  
Clique <a href="servicos.html">aqui</a> para fazer um novo pedido.