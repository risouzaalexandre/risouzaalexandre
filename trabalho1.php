<!DOCTYPE html>
<html>
<body>
<h3>Álcool ou Gasolina?</h3>
<?php
	$taque = 50;
	$precoAlcool = 5.3;
     $precoGasolina = 7.0;
     $relacaoPrecoAlcoolGasolina = $precoAlcool / $precoGasolina;
	$taqueAlcool = $taque * $precoAlcool;
     $taqueGasolina = $taque * $precoGasolina;
    
     echo "Preço da gasolina neste posto: R$ " .number_format($precoGasolina, 2, '.', ',');
     echo "<br>";
     echo "Preço do álcool neste posto: R$ " .number_format($precoAlcool, 2, '.', ',');
	echo "<br>";
     echo "<br>";
     echo "A relação entre o preço do álcool / preço da gasolina neste posto é de ".number_format($relacaoPrecoAlcoolGasolina, 2, '.', ',');
     echo "<br>";
     echo "<br>";
    
     if ($relacaoPrecoAlcoolGasolina < 0.7) {
		echo "Hoje compensa abastecer o seu carro no álcool, devido a porcentagem estar abaixo de 0,7 e você gastará ".number_format($taqueAlcool, 2, '.', ','), " reias";
     } else {
		echo "Hoje não compensa abastecer o seu carro no álcool, e sim abastecer o seu carro na gasolina, devido a porcentagem estar acima de 0,7 e você gastará ".number_format($taqueGasolina, 2, '.', ','), " reias";
	}
?>
</body>
</html>