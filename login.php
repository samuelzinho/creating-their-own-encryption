	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0"> 
<?


require('conexão.php');

$usuario=$_POST['user'];
$input=$_POST['pass'];

require('criptografia.php');

$consulta = "SELECT * FROM login WHERE user ='$usuario' AND senha = '$output' ";
$query = mysql_query($consulta) or die(mysql_error());
$dados  = mysql_num_rows($query);
if($dados == 0){
	print "<br><b>Usuario NÃO logado, algo está errado seu noob</b>";
}else{		
	print "<br><b>Usuario logado, a criptografia foi equivalente e funcionou!</b>";
}


?>
