	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0"> 
<?

require('conexão.php');		// Exige configuração de conexão com o banco de dados.


$usuario=$_POST['user']; 	// Recebe nome de usuário
$input=$_POST['pass'];		// Recebe senha


require('criptografia.php');	// Exige algoritmo de criptografia.


// Enviadno dados ao MySQL

/* Os dados são salvos por meio da seguinte query em:
	TABELA: login
	COLUNA: "user", para usuário, e "senha", para a senha.
	databse é definida em "conexão.php"
*/

$consulta = "SELECT * FROM login WHERE user ='$usuario' AND senha = '$output' ";
$query = mysql_query($consulta) or die(mysql_error());
$dados  = mysql_num_rows($query);
if($dados == 0){

	$query="INSERT INTO `login` (`user`, `senha`)VALUES('$usuario','$output')";
	$enviar=mysql_query($query);

	if ($enviar) {
		print "<center><br><br>Bem Vindo.. faça seu login.<br></center>";
		//header('Location: /');
		require('login.html');
		
	}else{
		print "<br><br>Algo deu errado, usuário não cadastrado<br>";
		//header('Location: /');
		print '<meta http-equiv="refresh" content="2; url=.">';

}

}else{		
	print "<br><b>Usuário já existe, cadastre-se com um novo nome de usuário.</b>";
	print '<meta http-equiv="refresh" content="2; url=.">';
	
}


?>
