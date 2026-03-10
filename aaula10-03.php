<?php
date_default_timezone_set('America/Sao_Paulo');
$date = date("d/m/Y h:i:s:");
echo "<p>A data e: $data </p>";

$valor = 5.8888;
$valor_arredondado = round($valor);
echo "<p>Valor aredondado: $valor_arredondadp</p>";
$valor_formatado = number_format($valor , 2 ,",",  ".");
echo "<p>Valor sem formatção: $valor_formatado</p>";
echo "</p>Valor formatado: $valor_formatado</p>";

$exp = pow(3,4);
$raiz = sqrt(16);
$aleatorio = rand(1,100);
if(isset($nome))
{
    echo "<p>nome informado!</p>";
    
}
else 
{
    echo "<p>nome nao informado!</p>";
    die();
}

if(is_float($valor));
{
echo "<p>E um numero flutuante</p>";
}






?>