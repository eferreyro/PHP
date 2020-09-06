<?php 
/*
CLASES
Las clases definen como un OBJETO y por este medio obtiene atibutos como PROPIEDADES ( constantes o variables) y METODOS (funciones) 
Una clase se compone de la palabra reservada class, un nombre en Capital Letter y llaves. dentro de estas debe ir su definicion. 
 */

 class MenuRestaurant {
   //Declaro PROPIEDADES
    public $nombre = '';
    public $precio = 0;

  //Declaro METODOS
    public function obtenerProductoyNombre()
    {
      echo "Desde un Metodo";
    }
 }

 //Para crear un objeto hay que INSTANCIAR UNA CLASE 
 $postre = new MenuRestaurant();
 $bebida->obtenerProductoyNombre();
 
//En el caso de los OBJETOS, podemos acceder a la propiedad o al nombre de la propiedad con una sintaxis de flecha
$bebida->nombre = 'Jugo de Naranjas';
$bebida->precio = 30;
 
//para acceder a un valor y mostrarlo usamos echo
echo $bebida->nombre;
echo $bebida->precio;


$bebida = new MenuRestaurant ();
$bebida->nombre = 'Jugo de mandarinas';
$bebida->precio = 60;

 //Muestro las propiedades de los objetos
 var_dump($bebida);
 var_dump($postre);