<?PHP
//Arquivo de conexão com o banco
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_hinode";

$link = mysqli_connect($host, $user, $pass, $db);
$banco = mysqli_connect_errno();
/*if ($banco == true){
    echo "erro de conexão";
}else{
    echo "conexão OK";
}
*/

?>