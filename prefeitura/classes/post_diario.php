<?PHP
include "conexao.php";

$titulo_diario = $_POST['titulo_diario'];
$conteudo_diario = $_POST['conteudo_diario'];

$registro = false;
if ($titulo_diario != "" && $conteudo_diario != "") {
    $registro = true;
}else{
    echo "<script> alert('Existe algum campo não preenchido'); window.history.go(-1); </script>";
}

$data_diario = date('Y-m-d');

if($registro == true){
    mysqli_query($link, "INSERT INTO diario(titulo_diario, conteudo_diario, data_diario)VALUES
    ('$titulo_diario', '$conteudo_diario', '$data_diario')");
        echo "<script> alert('adicionado com sucesso!'); window.location.href='../view/inicio.php' </script>";
    }else{
        echo "<script> window.history.go(-1) </script>";
    }



?>