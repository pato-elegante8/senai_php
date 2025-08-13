<?php
echo "<h2>ARRAYS</h2>";
echo "Um array é na verdade, um mapa ordenado. ou seja, <br> é um tipo que relaciona valores a chaves. <br> Portanto, é uma lista de valores que serão armazenados na memória.";
echo "hr";
echo "<h2>Criando o array</h2>";
$arr = ["priemiro","segundo","terceiro"];
print_r($arr);
echo "<hr>";
echo "<h2>outra maneira de criar o array/</h2>";
$arr = array("primeiro","segundo","terceiro");
print_r($arr);
echo "<hr>";
echo "<h2>utilizando o indice do array/</h2>";
$arr = array("primeiro","segundo","terceiro");
echo $arr [2];
echo "<hr>";
echo "<h2>array associtivo</h2>";
$arr = array("nome" =>"Alberto","sobrenome"=>"roberto");
echo "Nome" .$arr["nome"]. "<br>";
echo "sobrenome" .$arr ["sobrenome"]. "<br>";
echo "idade : ".$arr["idade"];
echo "<hr>";
echo "<h2>Array Multidimensional</h2>";
    $arr = array(
        array ("primeiro","segundo"),
    array("terceiro","quarto")
    );
print_r($arr);
echo"<br>";
print_r($arr[0]);
echo "<br>";
echo $arr[1][1];
echo "<hr>";
echo "<h2>Contando os elementos de um array</h2>";
$numeros = [1,2,300,7000,23,56,89,21,54,34,345];
echo count($numeros);
$numero = 0;
$soma = 0;
foreach ($numeros as $num) {
    $soma = $num + $numero;
    $num = $soma;
}
echo " a soma dos numeros foi: $num";
echo "<hr>";
echo "<h2>Array Adicionando dinamicamente elementos em um array</h2>";
$arr = array();
echo "<hr>";
echo "<h2>Adicionando no início do array</h2>";
$frutas = array("maçã","melão","melancia");
array_unshift($frutas, "abacaxi");
print_r ($frutas);
echo "<hr>";
echo "<h2>Adicionando no final do array</h2>";
$frutas = array("maçã","melão","melancia");
array_push($frutas, "abacaxi");
print_r ($frutas);
echo "<h2>Removendo o primeiro elemento do array</h2>";
$frutas = array("maçã","melão","melancia");
array_shift($frutas);
print_r ($frutas);
echo "<h2>procurando um elemento no array</h2>";
$frutas = array("maçã","melão","melancia","uva","goiaba","amora");
array_search($frutas, "abacaxi");
print_r ($frutas);
$proc = "melancia";
$index = array_search($proc, $frutas);
if ($index !== false) {
echo "O elemento $proc esta na posição $index";

} else {
 echo "Elemento não encontrado!";

}





?>