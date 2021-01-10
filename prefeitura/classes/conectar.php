<?PHP
//Arquivo de conexão com o banco
$host = "localhost";
$user = "root";
$pass = "";
$db = "prefeitura";

$link = mysqli_connect($host, $user, $pass, $db);
$banco = mysqli_connect_errno();

?>