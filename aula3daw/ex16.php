<?php

$a = $_POST ["a"];
$b = $_POST ["b"];
$operacao = $_POST ["operacao"];

if($operacao == "soma"){

	$soma = $a + $b;
	echo "<h2>$a + $b = $soma</h2>";

}else{
	if($operacao == "subtracao"){
		$subtracao = $a - $b;
		echo "<h2>$a - $b = $subtracao</h2>";
	}else{
		if($operacao == "multiplicacao"){
			$multiplicacao = $a * $b;
			echo "<h2>$a * $b = $multiplicacao</h2>";
		}else{
			if($operacao == "divisao" && $b!=0){
				
			$divisao = $a / $b;
			echo "<h2>$a / $b = $divisao</h2>";
			}else{
				echo "<h2>Operação inválida<h2>";
			}


			
		}
	}
}
?>
<a href="ex16.html"><br><br>Voltar</a>
