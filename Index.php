<?php
//Ejercicio 1
echo("Taller 1, Elaborado por Juan David Gomez Garcia <br><br>");
echo("Ejercicio 1 <br><br>");
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
/*La clasificación del IMC es la siguiente:
    • IMC <= 18,4 (Insuficiencia de peso)
    • 18,5<=IMC<=24,9 (Peso normal)
    • 25<=IMC<=29,9 (Sobrepeso)
    • 30<=IMC<=34,9 (Obesidad 1)
    • 35<=IMC<=39,9 (Obesidad 2)
    • IMC>=40 (Obesidad 3)
*/
echo("<br><br>Ejercicio 2 <br><br>");
echo("calcular el índice de masa corporal <br>");

$peso=85;
$altura=1.78;
echo("<br>El peso del usuario es =".$peso." kg <br>");
echo("<br>la altura del usuario es =".$altura." m <br>");
$imc=$peso/$altura;

echo("<br>El Indice de masa corporal del usuario es =".$imc."<br>");

if($imc<= 18.4){
    echo("El usuario tiene Insuficiencia de peso <br>");
}else if($imc>=18.5 && $imc<=24.9){
    echo("El usuario tiene Peso normal <br>");
}else if($imc>=25 && $imc<=29.9){
    echo("El usuario tiene sobrepeso <br>");
}else if($imc>=30 && $imc<=34.9){
    echo("El usuario tiene Obesidad 1 <br>");
}else if($imc>=35 && $imc<=39.9){
    echo("El usuario tiene Obesidad 2 <br>");
}else{
    echo("El usuario tiene Obesidad 3 <br>");
}

//Ejercicio 3
/*
3.Hacer un programa en PHP para la tienda Spring Step que tiene una promoción de descuento para vender al mayor, esta
dependerá del número de zapatos que se compren Si son 3 pares se les dará un 10 de descuento sobre el total de la
compra si el número de zapatos es mayor 3 pares pero menor o igual de 5 pares, se le otorga un 20 de descuento y si son
más 5 pares de zapatos se otorgará un 40 de descuento Defina la cantidad de variables que necesite, el precio de cada
par de zapatos 150 000 y establezca el valor total de una compra de 5 pares de zapatos
*/
echo("<br><br> Ejercicio 3 <br><br>");
echo("Promocion Descuentos <br>");

$Cantzapatosvendidos=5;
$Precioparzapatos=150000;

if($Cantzapatosvendidos== 3){
    $descuento=$Precioparzapatos*0.1;
    $valor=$Precioparzapatos-$descuento;
    echo("El valor a pagar es : $ ".$valor. " El descuento fue del 10% de : ".$descuento." <br>");
}else if($Cantzapatosvendidos> 3 && $Cantzapatosvendidos<= 5){
    $descuento=$Precioparzapatos*0.2;
    $valor=$Precioparzapatos-$descuento;
    echo("El valor a pagar es : $".$valor. " El descuento fue del 20% de : ".$descuento." <br>");
}else if($Cantzapatosvendidos> 5 ){
    $descuento=$Precioparzapatos*0.4;
    $valor=$Precioparzapatos-$descuento;
    echo("El valor a pagar es : $".$valor. " El descuento fue del 40% de : ".$descuento." <br>");
}else{
    echo("El valor a pagar es : $".$Precioparzapatos." <br>");
}

//Ejercicio 4
/*
4.Hacer un programa en PHP para ayudar a un trabajador de Postobón a saber cuál será su sueldo semanal, se sabe que si
trabaja 40 horas o menos, se le pagará 20000 por hora, pero si trabaja más de 40 horas entonces las horas extras se le
pagarán a 25 por hora Ejecute su código para calcular el salario con 36 horas trabajadas
*/
echo("<br><br> Ejercicio 4 <br><br>");
echo("Sueldo Semanal <br>");

$horaslaboradas=36;

if($horaslaboradas<=40){
    $pago=$horaslaboradas*20000;
    echo("Sueldo Semanal es : $".$pago."<br>");

}else{
    $pago=$horaslaboradas*25000;
    echo("Sueldo Semanal es : $".$pago."<br>");
}



//Ejercicio 5
/*
5.Bancolombia contrata sus servicios de desarrollador para realizar un programa en PHP que permita almacenar
información de nombre, teléfono dirección y salario de 5 usuarios de una sucursal llamada sucursal A Además, su
programa debe estar en la capacidad de sumar todos los salarios de los usuarios de la sucursal A en una sola variable
llamada sumatoriaSalarios y así poder comparar dicho valor con las sucursales B cuyo valor de salarios mensual es de
20 000 000 y la sucursal C cuyo valor de salarios mensuales es de 15 000 000 Permita que su código muestre cual sucursal
tiene la mejor sumatoria de salarios y además muestre en pantalla la información completa de los 5 usuarios de la sucursal
A
*/

echo("<br><br> Ejercicio 5 <br><br>");
echo("Almacenar Datos <br>");


?>