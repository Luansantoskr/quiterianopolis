<?PHP
include "conexao.php";

$titulo_simbolo = $_POST['titulo_dado'];
$conteudo_simbolo = $_POST['conteudo_dado'];

$registro = false;
if ($titulo_simbolo != "" && $conteudo_simbolo != "") {
    $registro = true;
}else{
    echo "<script> alert('Existe algum campo não preenchido'); window.history.go(-1); </script>";
}

if($registro == true){
    mysqli_query($link, "INSERT INTO dados_municipio(titulo_simbolo, descricao_simbolo)VALUES
    ('$titulo_simbolo', '$conteudo_simbolo')");
        echo "<script> alert('adicionado com sucesso!'); window.location.href='../view/inicio.php' </script>";
    }else{
        echo "<script> window.history.go(-1) </script>";
    }
?>