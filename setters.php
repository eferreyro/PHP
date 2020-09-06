<?php 
class MenuRestaurant {
  public $nombre = 'nombre';
  public $precio = 0;
  //los Getters solo OBTIENEN un valor y por convencion se llaman GET y la variable. Ej getNombre

  /**
   * Get the value of nombre
   */ 
  public function getNombre()
  {
    return $this->nombre;
  }

  /**
   * Get the value of precio
   */ 
  public function getPrecio()
  {
    return $this->precio;
  }
}


$bebida = new MenuRestaurant();
$bebida->nombre = "jugo de Naranjas";
$bebida->precio = 30;
echo $bebida->getNombre();
echo $bebida->getPrecio();





