<?php
// Controlar el flujo de pedidos a la bd y la lógica de negocios

setlocale(LC_TIME, 'es_ES', 'esp_esp');
date_default_timezone_set("America/Monterrey");

if (!function_exists('boolval')) {
        function boolval($val) {
                return (bool) $val;
        }
}

if (isset($controller)){ return; } // previendo error por importaciones innecesarias


// include config bd prod o dev
//include_once "all_config_bd_dev.php";
include_once "all_config_bd_prod.php";

// Controlador y BD juntos por ser un proyecto pequeño

// Mapear bd a objetos 

class OTabla {
	protected $table_name;

	public function filter_all(){
		return  "SELECT * FROM $this->table_name"; 
	}

	public function get_table_name(){
		return $this->table_name;
	}
}

final class Usuarios extends OTabla {
	protected $id = "usu_num_ctrl";
	protected $clave = "usu_clave";
	protected $usuario = "usu_nombre";
	protected $rol = "usu_rol"; // (1 admin, 2 capturista)
	protected $table_name = "usuarios";

	public function existe_user_passw($user='', $pass=''){
		return "SELECT $this->id as id, $this->rol as rol FROM $this->table_name WHERE $this->usuario='$user' AND $this->clave='$pass' LIMIT 1";
	}
}

final class Nominados extends OTabla {
	protected $id = "soc_num_ctrl";
	protected $nombre = "soc_nombre";
	protected $categoria = "cat_num_ctrl"; // ForeignKey Cotegoria
	protected $email = "soc_email";
	protected $rfc = "soc_rfc";
	protected $status = "soc_estatus";
	protected $creado_usuario = "soc_usuariocreacion";
	protected $creado = "soc_fechacreacion";
	protected $modificado_usuario = "soc_usuariomodif";
	protected $modificado = "soc_fechamodif";
	protected $table_name = "socios";

	function get_all(){
		$id = "$this->id as id";
		$nombre = "$this->nombre as nombre";
		$categoria = "$this->categoria as categoria";
		$email = "$this->email as email";
		$rfc = "$this->rfc as rfc";
		$status = "$this->status as status";
		$creado = "$this->creado as creado";
		$modificado = "$this->modificado as modificado";
		return "SELECT $id, $nombre, $categoria, $email, $rfc, $status, $creado, $modificado FROM $this->table_name";
	}

	function create($nombre="Name", $categoria="Cat", $email="Sample Mail", $rfc="rfc mail", $status="Status"){
		$intro =  "INSERT INTO $this->table_name ( $this->nombre, $this->categoria, $this->email, $this->rfc, $this->status, $this->creado, $this->modificado)";
		$value = " VALUES ('$nombre', '$categoria', '$email', '$rfc', '$status', NOW(), NOW()";
		return $intro.' '.$value;
	}

}

// La clase Bd implementa las tablas de la bd
class Bd {
	private $server   = SERVER; // Candidatos a eliminar y usar directamente las constantes en la cadena de conexion a mysql
	private $user     = USER;
	private $passw    = PASSW;
	private $bd_name  = BDNAME;

	private $table_usuarios;
	private $table_nominados;
	
	function __construct(){
		$this->table_usuarios  = new Usuarios();
		$this->table_nominados = new Nominados();
	}
	// funciones privadas

	private function obtener_conexion(){
	    try {
            $conexion = mysqli_connect($this->server, $this->user, $this->passw, $this->bd_name);
        } catch (Exception $e){
	        print "Error en la conexión a Base de Datos";
        };
		if (!$conexion){
			die('Error al conectarse a la bd');
		}
        mysqli_set_charset($conexion, 'utf8');

		return $conexion;
	}

	private function convertir_array($array_query=''){ 
		// array bidimensional para resultados tipo tabla
	    $rows = array();
		while($row = $array_query->fetch_array())
		{  $rows[] = $row; }
		return $rows;
	}

	private function convertir_array_uni($array_query=''){ 
		// array unidimensional para resultados de una fila limit 1
		return $rows[] = $array_query->fetch_array();
	}

	// para obtener un array de una sola fila pasar el argumento $conv_array a false
	private function procesar_query($query, $conv_array=true){ 
		$result = mysqli_query($this->obtener_conexion(), $query);

		if (!$result){
			return $row = array();
		}
		if ($conv_array)
			return $this->convertir_array($result);
		else
			return $this->convertir_array_uni($result);
	}

	private function insertar_datos($query){
		if (mysqli_query($this->obtener_conexion(), $query) === TRUE) {
		    return true;
		} else {
		    return false;
		}
	}

	//funciones públicas
	function all_usuarios(){
		$query = $this->table_usuarios->filter_all();
		return $this->procesar_query($query);	
	}

	function comprobar_login($user, $pass){
		$query = $this->table_usuarios->existe_user_passw($user, $pass);
		$result = $this->procesar_query($query, false);
		return $result;
	}

	function all_nominados(){
		$query = $this->table_nominados->get_all();
		$result = $this->procesar_query($query);
		return $result;
	}

	function create($nombre, $categoria, $email, $rfc, $status){
		$query = $this->table_nominados->e($nombre, $categoria, $email, $rfc, $status);
		return $this->insertar_datos($query);
	}

}

// El controller solo abstrae la clase bd y la mantiene oculta principio open/close de solid
class Controller {
	private $bd;

	function __construct(){
		$this->bd = new Bd();
	}

	function get_all_usuarios(){
		return $this->bd->all_usuarios();
	}

	function comprobar_login($user, $pass){
		return $this->bd->comprobar_login($user, $pass);
	}

	function get_all_nominados(){
		return $this->bd->all_nominados();
	}

	function create($nombre, $categoria, $email, $rfc, $status){
		return $this->bd->create($nombre, $categoria, $email, $rfc, $status);
	}

}

$controller = new Controller();


//$all_result = $controller->search_product_complete_word(utf8_decode("Módulo de comedor industrial"));
//var_dump($all_result);


//
//$array_palabra_con_vacios = explode(" ", "mobiliario");
//$array_palabra = array_filter($array_palabra_con_vacios, "strlen");
////
////
//$arreglo = $controller->multiple_search($array_palabra_con_vacios);
////
//echo "HOla";
//foreach ($controller->get_categoria_page("Repisas") as $key => $value) {
 //	echo $value['coincide'];
 //	echo var_dump($value);
// 	echo "<br>";
 //}

//$bd = new Bd();
//$num = $bd->get_tip_num_ctrl_mobiliario();
//echo "Hola";
//var_dump($num);

 //$all_rows = $controller->get_all_nominados();
 //var_dump($all_rows);
 //if ($all_rows){
//	 echo 'Si';
// } else {
//	 echo 'No';
 //}

 //foreach ($all_rows as $key => $row) {
// 	echo 'Clave: '.$row[2];
 //}

?>