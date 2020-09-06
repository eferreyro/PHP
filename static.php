<?php 
class DB {
  public static function conectarDB()
  {
    echo "Aca va el codigo de la conexion a la DB";
  }
}

class Email {
  public static function enviarEmail()
  {
    echo "Aca va todo el codigo del envio del email";
  
  }
}
DB::conectarDB();

echo "<br>";

Email::enviarEmail();

