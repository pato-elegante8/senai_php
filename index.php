<?php
    $nome = "sammuel";
    $idade = 16;
    echo "Meu nome é ".$nome.", e tenho ".$idade." anos.";
    echo "<hr>";
    echo "<center><h2>SENAI - DEVELOPER</h2></center>";
    echo "<hr>";
    $valor1 = 8;
    $valor2 = 11;
    echo "A soma dos valores foi:".$valor1+$valor2."<br>";
    echo "A subtração dos valores foi:".$valor1-$valor2."<br>";
    echo "A multiplicação dos valores foi:".$valor1*$valor2."<br>";
    $result = $valor1/$valor2;
    $numformatado = number_format($result, 2, ',', '.');
    echo "A divisão dos valores foi:".$numformatado;
    echo "<hr>";
    $datahora = date('d/m/Y H:i:s');
    echo "Data atual: ".$datahora;
    echo "<hr>";
    $data1 = new datetime('2025-01-01');
    //data: 2025-01-01 = 22:30:23 Y-m-d H:1:s
    $data2 = new datetime('2025-08-06');
    $intervalo = $data1->diff($data2);
    echo "a diferença em anos: ".$intervalo->y."<br>";
    echo "a diferença em meses: ".$intervalo->m."<br>";
    echo "a diferença em dias: ".$intervalo->days."<br>";
    $horas = $intervalo->days*24;
    echo "a diferença em horas: ".$horas;
    echo "<hr>";
    echo "<h2>função condicional - IF</h2>";
    $a = 3;
    $b = 5;
    if ($a > $b) {
        echo "A é maior que B!";
    } else {
        echo "B é maior que A";
    }
    echo "<br>saiu do IF";

echo "<h2>Tabuada</h2>";
$numtab = 5;
for ($i=1; $i <= 10 ; $i++) {
    echo $numtab." X " .$i." = ".$numtab*$i."<br>";
}
$a = 0;
while($a < 100) {
echo $a."<br>";
$a+=10;
}    
echo "<hr>"
echo "FOREACH";
$cores = array("azul","marrom","bege","amarelo","branco");
foreach ($cores as $cor) {
   echo $cor."<br>"; 
}
?>