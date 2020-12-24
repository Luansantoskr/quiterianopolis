<?PHP
include "conexao.php";

$titulo_guia = $_POST['tituloGuia'];
$conteudo_guia = $_POST['conteudoGuia'];

$registro = false;
if ($titulo_guia != "" && $conteudo_guia != "") {
    $registro = true;
}else{
    echo "<script> alert('Existe algum campo não preenchido'); window.history.go(-1); </script>";
}

if($registro == true){
    mysqli_query($link, "INSERT INTO guia_municipio(titulo_guia, conteudo_guia)VALUES
    ('$titulo_dado', '$conteudo_dado', '$data_dado')");
        echo "<script> alert('adicionado com sucesso!'); window.location.href='../view/inicio.php' </script>";
    }else{
        echo "<script> window.history.go(-1) </script>";
    }
?>