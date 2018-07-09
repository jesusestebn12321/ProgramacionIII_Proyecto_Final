<?php
class myDBC {
 
    public $mysqli = null;
 
    public function __construct() {
        
        $con=mysql_connect("localhost","root","") or die ("problemas al conectar con el servidor");
        mysql_select_db("proyectoprogramcion3",$con);

        $this->mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
 
        if ($this->mysqli->connect_errno) {
            echo "Error MySQLi: ("&nbsp. $this->mysqli->connect_errno.") " . $this->mysqli->connect_error;
            exit();
        }
        $this->mysqli->set_charset("utf8");
    }
 
    public function __destruct() {
        $this->CloseDB();
    }
 
    public function runQuery($qry) {
        $result = $this->mysqli->query($qry);
        return $result;
    }
 
    public function CloseDB() {
        $this->mysqli->close();
    }
 
    public function clearText($text) {
        $text = trim($text);
        return $this->mysqli->real_escape_string($text);
    }
 
    public function seleccionar_persona($matricula){
        
        $q = "SELECT * FROM empleado";
 
        $result = $this->mysqli->query($q);
        //Array asociativo que contendrá los datos
        $valores = array();
                //Si no hay resultados
                //Se avisa al usuario y se redirige al index de la aplicación
        if( $result->num_rows == 0)
        {
            echo"<script type='text/javascript'>
              alert('Ningun registro');
              window.location='http://localhost/pdfenphpupdate/index.php'
            </script>";
        }
          //En otro caso, se recibe la información y se
          //se regresa un array con los datos de la consulta
      else{
            while($row = mysqli_fetch_assoc($result))
            {
                //Se agrega cada valor en el array
                array_push($valores, $row);
            }
          }
        //Regresa array asociativo
        return $valores;
    }
}
?>
