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

	function get_only_concursantes(){
		$id = "$this->id as id";
		$nombre = "$this->nombre as nombre";
		$categoria = "$this->categoria as categoria";
		return "SELECT $id, $nombre, $categoria FROM $this->table_name WHERE $this->status=1";
	}

	function create($nombre="Name", $categoria="Cat", $email="Sample Mail", $rfc="rfc mail", $status="Status"){
		$intro =  "INSERT INTO $this->table_name ( $this->nombre, $this->categoria, $this->email, $this->rfc, $this->status, $this->creado, $this->modificado)";
		$value = " VALUES ('$nombre', '$categoria', '$email', '$rfc', '$status', NOW(), NOW());";
		return $intro.' '.$value;
	}
	
	function update($id, $nombre, $categoria, $email, $rfc, $status){
		$query =  "UPDATE $this->table_name SET $this->nombre='$nombre', $this->categoria='$categoria', $this->email='$email', $this->rfc='$rfc', $this->status='$status' WHERE $this->id='$id';";
		return $query;
	}

	function delete($id=0){
		$query = "DELETE FROM $this->table_name WHERE $this->id=$id;";
		return $query;
	}

	function activate($id){
		$query = "UPDATE $this->table_name SET $this->status='1' WHERE $this->id=$id;";
		return $query;
	}

	function deactivate($id){
		$query = "UPDATE $this->table_name SET $this->status='0' WHERE $this->id=$id;";
		return $query;
	}

}

final class Noticias extends OTabla {
	protected $id = "not_num_ctrl";
	protected $titulo = "not_titulo";
	protected $noticia = "not_detalle";
	protected $fuente = "not_fuente";
	protected $imagen = "not_imagen";
	protected $creado = "not_fechacreacion";
	protected $modificado = "not_fechamodif";
	protected $table_name = "noticias";

	function create($titulo, $noticia, $fuente){
		$query = "INSERT INTO $this->table_name ( $this->titulo, $this->noticia, $this->fuente )";
		$values = " VALUES ( '$titulo', '$noticia', '$fuente')";
		return $query.' '.$values;
	}

	function get_all(){
		$id = "$this->id as id";
		$titulo = "$this->titulo as titulo";
		$noticia = "$this->noticia as noticia";
		$creado = "$this->creado as creado";
		$modificado = "$this->modificado as modificado";
		return "SELECT $id, $titulo, $noticia, $creado, $modificado FROM $this->table_name";
	}

	function get_all_list(){
		$id = "$this->id as id";
		$titulo = "$this->titulo as titulo";
		$noticia = "SUBSTRING($this->noticia, 1, 200) as noticia";
		$creado = "$this->creado as creado";
		$modificado = "$this->modificado as modificado";
		return "SELECT $id, $titulo, $noticia, $creado, $modificado FROM $this->table_name";
	}

	function get_one($id){
		$idin = "$this->id as id";
		$noticia = "$this->noticia as noticia";
		$titulo = "$this->titulo as titulo";
		$fuente = "$this->fuente as fuente";
		return "SELECT $idin, $titulo, $noticia, $fuente FROM $this->table_name WHERE $this->id='$id' LIMIT 1;";
	}

	function delete($id=0){
		$query = "DELETE FROM $this->table_name WHERE $this->id=$id;";
		return $query;
	}

	function update($id, $titulo, $fuente, $noticia){
		$query = "UPDATE $this->table_name SET $this->titulo='$titulo', $this->noticia='$noticia', $this->fuente='$fuente' WHERE $this->id='$id';";
		return $query;
	}
}


final class SplashImagenes extends OTabla {
	protected $id = "img_num_ctrl";
	protected $titulo = "img_titulo";
	protected $ruta = "img_ruta";
	protected $fecha_limite = "img_fecha_limite";
	protected $liga = "img_liga";
	protected $table_name = "images";

	function get_all(){
		$id = "$this->id as id";
		$titulo = "$this->titulo as titulo";
		$fecha_limite = "$this->fecha_limite as fecha_limite";
		$liga = "$this->liga as liga";
		$ruta = "$this->ruta as ruta";
		return "SELECT $id, $titulo, $fecha_limite, $liga, $ruta FROM $this->table_name";
	}

	function get_for_splash(){
		$titulo = "$this->titulo as titulo";
		$liga = "$this->liga as liga";
		$ruta = "$this->ruta as ruta";
		return "SELECT $titulo, $liga, $ruta FROM $this->table_name WHERE $this->fecha_limite > CURDATE();";
	}

	function get_one_random_splash(){
		$id = "$this->id as id";
		$titulo = "$this->titulo as titulo";
		$ruta = "$this->ruta as ruta";
		$liga = "$this->liga as liga";
		return "SELECT $id, $ruta, $titulo, $liga FROM $this->table_name WHERE $this->fecha_limite > CURDATE() ORDER BY RAND() LIMIT 1";
	}

	function create($titulo, $imagen, $fecha_limite, $liga){
		$query = "INSERT INTO $this->table_name ( $this->titulo, $this->ruta, $this->fecha_limite, $this->liga )";
		$values = " VALUES ( '$titulo', '$imagen', '$fecha_limite', '$liga')";
		return $query.' '.$values;
	}

	function update($id, $titulo, $fecha_limite, $liga, $ruta_file){
		if ( $ruta_file == null ){
			return "UPDATE $this->table_name SET $this->titulo='$titulo', $this->fecha_limite='$fecha_limite', $this->liga='$liga' WHERE $this->id='$id';";
		} else {
			return "UPDATE $this->table_name SET $this->titulo='$titulo', $this->fecha_limite='$fecha_limite', $this->liga='$liga', $this->ruta='$ruta_file' WHERE $this->id='$id';";
		}		
	}

	function delete($id=0){
		$query = "DELETE FROM $this->table_name WHERE $this->id=$id;";
		return $query;
	}
}

final class Votacion extends OTabla {
	protected $id = "vot_num_ctrl";
	protected $activo = "vot_activo";
	protected $year = "vot_anio";
	protected $date_ini = "vot_fecha_inicio";
	protected $date_fin = "vot_fecha_fin";
	protected $ver_page_nomin = "actv_nominados";
	protected $ver_page_result = "actv_resultados";
	protected $mensaje = "vot_mensaje";
	protected $table_name = "votacion";

	function get(){
		$year = "$this->year as year";
		$activo = "$this->activo as activo";
		$date_ini = "$this->date_ini as date_ini";
		$date_fin = "$this->date_fin as date_fin";
		$ver_page_nomin = "$this->ver_page_nomin as ver_page_nomin";
		$ver_page_result = "$this->ver_page_result as ver_page_result";
		$mensaje = "$this->mensaje as mensaje";
		return "SELECT $year, $activo, $date_ini, $date_fin, $ver_page_nomin, $ver_page_result, $mensaje FROM $this->table_name";
	}

	function is_activo(){
		$activo = "$this->activo as activo";
		return "SELECT $activo FROM $this->table_name";
	}

	function update($activo, $year, $date_ini, $date_fin, $seePageNom, $seePageResu, $mensaje){ 
		return "UPDATE $this->table_name SET $this->activo='$activo', $this->year='$year', $this->date_ini='$date_ini', $this->date_fin='$date_fin', $this->ver_page_nomin='$seePageNom', $this->ver_page_result='$seePageResu', $this->mensaje='$mensaje';";
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
	private $table_noticias;
	private $table_images;
	private $table_votacion;
	
	function __construct(){
		$this->table_usuarios  = new Usuarios();
		$this->table_nominados = new Nominados();
		$this->table_noticias = new Noticias();
		$this->table_images = new SplashImagenes();
		$this->table_votacion = new Votacion();
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

	private function query_execute_affected_rows($query){
		$con = $this->obtener_conexion();
		mysqli_query($con, $query);
		//echo "Error: ".mysqli_error($con);  // descomentar para ver errores de bd  ********************************************
		return mysqli_affected_rows($con);
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
		$result = $this->procesar_query($query, $conv_array=false);
		return $result;
	}

	// Principio de los socios

	function all_nominados(){
		$query = $this->table_nominados->get_all();
		$result = $this->procesar_query($query);
		return $result;
	}

	function get_nominados_concursantes(){
		$query = $this->table_nominados->get_only_concursantes();
		$result = $this->procesar_query($query);
		return $result;
	}

	function create_socio($nombre, $categoria, $email, $rfc, $status){
		$query = $this->table_nominados->create($nombre, $categoria, $email, $rfc, $status);
		return $this->insertar_datos($query);
	}
	
	function update_socio($id, $nombre, $categoria, $email, $rfc, $status){
		$query = $this->table_nominados->update($id, $nombre, $categoria, $email, $rfc, $status);
		return $this->query_execute_affected_rows($query);
	}

	function delete_socio($id){
		$query = $this->table_nominados->delete($id);
		$result = $this->query_execute_affected_rows($query);
		return $result;
	}

	function activate_socio($id){
		$query = $this->table_nominados->activate($id);
		$result = $this->query_execute_affected_rows($query);
		return $result;
	}

	function deactivate_socio($id){
		$query = $this->table_nominados->deactivate($id);
		$result = $this->query_execute_affected_rows($query);
		return $result;
	}

	// fin de los socios

	// Inicio de las noticias

	function create_noticia($titulo, $noticia, $fuente){
		$query = $this->table_noticias->create($titulo, $noticia, $fuente);
		$result = $this->query_execute_affected_rows($query);
		return $result;
	}

	function all_noticias(){
		$query = $this->table_noticias->get_all();
		$result = $this->procesar_query($query);
		return $result;
	}

	function get_all_list(){
		$query = $this->table_noticias->get_all_list();
		$result = $this->procesar_query($query);
		return $result;
	}

	function one_noticia( $id ){
		$query = $this->table_noticias->get_one($id);
		$result = $this->procesar_query($query, $conv_array=false);
		return $result;
	}

	function delete_noticia($id){
		$query = $this->table_noticias->delete($id);
		$result = $this->query_execute_affected_rows($query);
		return $result;
	}

	function update_noticia($id, $titulo, $fuente, $text){
		$query = $this->table_noticias->update($id, $titulo, $fuente, $text);
		$result = $this->query_execute_affected_rows($query);
		return $result;
	}

	// fin de las noticias

	// imagenes splash
	function all_images(){
		$query = $this->table_images->get_all();
		$result = $this->procesar_query($query);
		return $result;
	}

	function create_imagen($titulo, $ruta, $fecha_limite, $liga){
		$query = $this->table_images->create($titulo, $ruta, $fecha_limite, $liga);
		$result = $this->query_execute_affected_rows($query);
		return $result;
	}

	function delete_imagen($id){
		$query = $this->table_images->delete($id);
		$result = $this->query_execute_affected_rows($query);
		return $result;
	}

	function get_image_for_splash(){
		$query = $this->table_images->get_for_splash();
		$result = $this->procesar_query($query);
		return $result;
	}

	function update_image($id, $titulo, $fecha_limite, $liga, $ruta_file){
		$query = $this->table_images->update($id, $titulo, $fecha_limite, $liga, $ruta_file);
		$result = $this->query_execute_affected_rows($query);
		return $result;
	}

	function get_one_random_splash(){
		$query = $this->table_images->get_one_random_splash();
		$result = $this->procesar_query($query, $conv_array=false);
		return $result;
	}

	// fin de las imagenes splash

	// Inicio de las votacione

	function get_votacion(){
		$query = $this->table_votacion->get();
		$result = $this->procesar_query($query, $conv_array=false);
		return $result;
	}

	function votacion_is_activo(){
		$query = $this->table_votacion->is_activo();
		$result = $this->procesar_query($query, $conv_array=false);
		return $result;
	}

	function update_votacion($activo, $year, $date_ini, $date_fin, $seePageNom, $seePageResu, $mensaje){
		$query = $this->table_votacion->update($activo, $year, $date_ini, $date_fin, $seePageNom, $seePageResu, $mensaje);
		$result = $this->query_execute_affected_rows($query);
		return $result;
	}

	// Fin de las votaciones

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

	function get_nominados_concursantes(){
		return $this->bd->get_nominados_concursantes();
	}

	function comprobar_login($user, $pass){
		return $this->bd->comprobar_login($user, $pass);
	}

	// Socios

	function get_all_nominados(){
		return $this->bd->all_nominados();
	}

	function create_socio($nombre, $categoria, $email, $rfc, $status){
		return $this->bd->create_socio($nombre, $categoria, $email, $rfc, $status);
	}

	function update_socio($id, $nombre, $categoria, $email, $rfc, $status){
		return $this->bd->update_socio($id, $nombre, $categoria, $email, $rfc, $status);
	}

	function delete_socio($id){
		return $this->bd->delete_socio($id);
	}

	function activate_socio($id){
		return $this->bd->activate_socio($id);
	}

	function deactivate_socio($id){
		return $this->bd->deactivate_socio($id);
	}

	// Noticias 

	function create_noticia($titulo, $noticia, $fuente){
		return $this->bd->create_noticia($titulo, $noticia, $fuente);
	}

	function get_all_noticias(){
		return $this->bd->all_noticias();
	}

	function get_all_list(){
		return $this->bd->get_all_list();
	}

	function get_one_noticia($id){
		return $this->bd->one_noticia($id);
	}

	function update_noticia($id, $titulo, $fuente, $text){
		return $this->bd->update_noticia($id, $titulo, $fuente, $text);
	}

	function delete_noticia($id){
		return $this->bd->delete_noticia($id);
	}

	// Gestion de imagenes splash
	function get_all_images(){
		return $this->bd->all_images();
	}

	function create_images($titulo, $imagen, $fecha_limite, $liga){
		return $this->bd->create_imagen($titulo, $imagen, $fecha_limite, $liga);
	}

	function delete_imagen($id){
		return $this->bd->delete_imagen($id);
	}

	function get_image_for_splash(){
		return $this->bd->get_image_for_splash();
	}

	function update_image($id, $titulo, $fecha_limite, $liga, $ruta_file){
		return $this->bd->update_image($id, $titulo, $fecha_limite, $liga, $ruta_file);
	}
	function get_one_random_splash(){
		return $this->bd->get_one_random_splash();
	}
	// fin de la gestion de las imagenes splash

	// Inicio de la gestion de las votaciones

	function get_votacion(){
		return $this->bd->get_votacion();
	}

	function votacion_is_activo(){
		$result = $this->bd->votacion_is_activo();
		if ($result["activo"] == 1){
			return True;
		} else {
			return False;
		}
	}

	function update_votacion($activo, $year, $date_ini, $date_fin, $seePageNom, $seePageResu, $mensaje){
		return $this->bd->update_votacion($activo, $year, $date_ini, $date_fin, $seePageNom, $seePageResu, $mensaje);
	}

	// fin de las votaciones


}

$controller = new Controller();






//update_socio($id, $nombre, $categoria, $email, $rfc, $status);
//$r = $controller->update_socio("35", "Pepeonela", "0", "pepe@gmail.com", "rfc de prueba", "0");

//echo "Resultado es ".$r;
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