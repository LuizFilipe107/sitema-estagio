<?php 
abstract class mySqlConn{
	
	private $servidor, $usuario, $senha, $banco, $conn, $sql, $qr, $data, $status, $totalCampos, $error;
	

 public function __construct(){
$this->servidor = 'localhost';
$this->usuario = 'root';
$this->senha = '';
$this->banco = 'db_estagio';

self::connect();

}
	
	protected function connect(){
		$this->conn =  new mysqli($this->servidor, $this->usuario, $this->senha, $this->banco) or die("<b><center>Erro ao selecionar o banco</br><center" .mysqli_connect_error()) ;
			mysqli_set_charset($conn, "utf8");
			    mysqli_query("SET NAMES 'utf8'");
    			mysqli_query('SET character_set_connection=utf8');
   				 mysqli_query('SET character_set_client=utf8');
    				mysqli_query('SET character_set_results=utf8');

	}
	
	protected function execSQL($sql) {
            $this->qr = $this->conn->query ( $sql )  or die ( "<b><center>Erro ao executar</br><center" . mysqli_error () );
				return $this->qr;
	}
}



?>