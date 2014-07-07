<?

	/* Conexão com o banco de dados!*/
	

$host="localhost";  // DB HOST
$user="root";		// DB USER
$name="cryp";		// DB NAME
$pass="admin";		// DB PASS


mysql_connect($host, $user, $pass) or die("Erro na conexão com o banco de dados");
mysql_select_db($name);

?>
