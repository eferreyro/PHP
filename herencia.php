<?php 
/*
HERENCIA
La herencia es una forma basica de extender de un constructor PADRE a otro constructor las propiedades de este.

*/
class MenuRestaurant{

  public $nombre;
  public $precio;

public function __construct($nombre, $precio)
{
  $this->nombre = $nombre;
  $this->precio = $precio;
}
  public function getNombre()
  {
    return $this->nombre;
  }
   public function getPrecio()
  {
    return $this->precio;
  }

}


class Bebida extends MenuRestaurant{
  public $medida;
  
  public function __construct($nombre, $rpecio, $medida)  {
      parent::__construct($nombre, $precio, $medida);
    $this->medida = $medida;
    $this->nombre = $nombre;
    $this->precio = $precio;
  }

  public function getMedida()
  {
    return $this->medida;
  }
}