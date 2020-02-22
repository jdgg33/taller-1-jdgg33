<?php
//Ejercicio 1
echo("Taller 1, Elaborado por Juan David Gomez Garcia <br><br>");
echo("Ejercicio 1 <br>");
$n1=123;
$n2=456;

echo("N1 = ".$n1."<br>");
echo("N2 = ".$n2."<br><br>");

echo("Suma <br>");

$suma=$n1+$n2;

echo("la suma de los numeros n1 y n2 es : ".$suma."<br><br>");

echo("Resta <br>");
$resta=$n1-$n2;

echo("la resta de los numeros n1 y n2 es : ".$resta."<br><br>");

echo("Multipliacion <br>");
$multiplicacion=$n1*$n2;

echo("la multiplicacion de los numeros n1 y n2 es : ".$multiplicacion."<br><br>");

echo("Division <br>");
$division=$n1/$n2;
echo("la division de los numeros n1 y n2 es : ".$division."<br><br>");

//Ejercicio 2

echo("Ejercicio 2 <br>");
echo("calcular el índice de masa corporal <br>");

$peso=85;
$altura=1.78;
echo("<br>El peso del usuario es =".$peso." kg <br>");
echo("<br>la altura del usuario es =".$altura." m <br>");
$imc=$peso/$altura;

echo("<br>El Indice de masa corporal del usuario es =".$imc."<br>");

if($imc<= 18.4){
    echo("(Insuficiencia de peso)");
}else if($imc>=18.5 && $imc<=24.9){
    echo("Peso normal");
}
/*La clasificación del IMC es la siguiente:
    • IMC <= 18,4 (Insuficiencia de peso)
    • 18,5<=IMC<=24,9 (Peso normal)
    • 25<=IMC<=29,9 (Sobrepeso)
    • 30<=IMC<=34,9 (Obesidad 1)
    • 35<=IMC<=39,9 (Obesidad 2)
    • IMC>=40 (Obesidad 3)
*/
?>