<?php
use Clases\Facultad;
use Clases\Programa;

include_once "config/autoload.php";
include_once "menu.php";
?>
    <h1>Registrar facultad</h1>
    <form method="post" action="#">
        
        <input type="text" name="nombres" placeholder="Nombres" required/><br>
       
        <input type="submit" name="submit" value="Guardar">

    </form>

<?php
if (isset($_POST["submit"])) {
        $nombre = $_POST["nombre"];
   
  

    $estudiante = new Estudiante($nombre);
    if ($estudiante->crearEstudiante()) {
        echo "Datos guardados";
    } else {
        echo "Error: Los datos no se guardaron";
    }

}