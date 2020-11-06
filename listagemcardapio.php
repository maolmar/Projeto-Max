<?php
	
	
	
	include "conexao.php";
	
	$SqlCardapio = 'select * from cardapio';
	$DadosCardapio= mysqli_query($conn, $SqlCardapio) or 
		die("Erro na consulta de cardapio" . mysqli_error($conn));
		
	
	$totlinhas=mysqli_num_rows($DadosCardapio)  or 
		die("Erro na contagem de linhas:" . mysqli_error($conn));
		
	
	
	if($totlinhas<1){
		die ("O Banco está vazio");
	}
	
	echo "<h2>Listagem do Cardapio</h2>";
	echo "<table border='1'>";
	echo "	<tr>";
	echo "		<th>Refeiçõeses</th>";
	echo "		<th>Acompanhamentos</th>";
	echo "		<th>Porcoes</th>";
	echo "		<th>Bebidas</th>";
	echo "		<th>Quantidades de Bebidas</th>";
	echo "		<th>Sobremesa</th>";
	echo "		<th>Quantidade de sobremesas</th>";
	echo "		<th>Coberturas</th>";
	echo "		<th colspan='2'>Ações</th>";
	echo "	</tr>";
	
	while ($dados = mysqli_fetch_array($DadosCardapio))
	{
		
		$Refe=$dados['refeicoes'];
		$Acom=$dados['acompanhamentos'];	
		$por=$dados['porcoes'];
		$Beb = $dados['bebidas'];
		$QB=$dados['quantbebidas'];
		$sobre=$dados['sobremesas'];
		$qs=$dados['quantsobremesas'];
		$cobe=$dados['coberturas'];
		
		echo "<tr>";
		echo " 	<td>$Refe</td>";
		echo " 	<td>$Acom</td>";
		echo " 	<td>$por</td>" ;
		echo " 	<td>$Beb</td>";		
		echo " 	<td>$QB</td>";
		echo " 	<td>$sobre</td>";
		echo " 	<td>$qs</td>";
		echo " 	<td>$cobe</td>";
		echo "	<td> <a href='excluirCardapio.php?r=$Refe&a=$Acom&p=$por&b=$Beb&q=$QB&s=$sobre&qss=$qs&c=$cobe'>Excluir</a></td>";
		echo "</tr>";
	}
		echo "</table>";
		
		
		
		
?>
Clique <a href="cardapio.html">aqui</a> para fazer um novo pedido.