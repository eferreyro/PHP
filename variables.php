<?php 
#Variable nombre que almacena un string
/* 
  Las variables empiezan con sigo $
  Las variables son Case Sensitive (mayusculas y minusculas)
  Las variables no pueden tener espacios, caracteres especiales como Ñ o punto . Y tampoco pueden empezar con NUMEROS (7pasos)

 */

#Podemos almacenar String (cadena de texto) Siempre deben llevar comillas dobles o simples (Las comillas DOBLES no permiten ejecutar variables dentro)
  $string = "Emmanuel";
# Numeros Enteros  
  $numero = 50;
# Numero Decimal o flotante
  $numero_decimal = 7.7;

#Booleano (true o false)
$booleano = false;

#Array o Arreglo

#Objetos

#Clases

#Null: Cuando una variable aun no se le asigna ningun valor
$nullable = null;


echo $string;

#concatenar
echo '<br> Hola ' . $string;


# Funcion para conocer el tipo de variable
echo '<br>';
echo 'El tipo de dato de la variabla numero_decimal es ' . gettype($numero_decimal);
?>