<?php
$mapa1 = array('Joao' , 'Maria',3);
print_r($mapa1);
echo "<p></p>";
var_dump($mapa1);
echo "<p>valor da posição 2".$mapa1[2]."</p>";

$mapa2[1] ="Rods";
$mapa[2] = "zica";
$mapa2[3] = "top";
print_r($mapa2);

$contatos["Rods"] = "1245";
$contatos["MARY"] = "7498374983";
echo "<p></p>";
print_r($contatos);

foreach($contatos as $valor)
{
    echo "<p>Telefone: $valor </p>";
}

foreach($contatos as $chave => $valor)
{
    echo "<p>Telefone de $chave: $valor</p>";

}
//apaga
unset($mapa1[2]);
print_r($mapa1);

//funções
$quantidade = count($mapa2);
echo "<p>qtde de elementos mapa 2: $quantidade</p>";
asort($contatos); //ordenar pelo valor
ksort($contatos); //ordenar pela chave


?>