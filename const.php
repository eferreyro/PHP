<?php 
/*
para definir constantes se utiliza la palabra reservada CONST
Por convencion se escriben TODA LA PALABRA CON MAYUSCULA
*/
class MenuRestaurant {
  public $nombre = 'nombre';
  public $precio = 0;
  public $medida = 100;
  //Definir una constante

  const CON_ALCOHOL = 1;
  CONST SIN_ALCOHOL = 0;

  public function __construct($nombre, $precio){
    parent::__construct($nombre,$precio);
    $this->medida=$medida;

  public function getMedida()
  {
    return $this->medida;
  }
interface RestauranteInterface
{
  public function getNombre();

  public function gerPrecio();
}
  /**
   * Get the value of precio
   */ 
  public function getPrecio()
  {
    return $this->precio;
  }
  }

  
echo Bebida::SIN_ALCOHOL;
echo $bebida->getPrecio();





