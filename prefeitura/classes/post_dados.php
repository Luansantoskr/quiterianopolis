<?PHP
include "conexao.php";

$titulo_dado = $_POST['titulo_dado'];
$conteudo_dado = $_POST['conteudo_dado'];
$data_dado = $_POST['data_dado'];

$registro = false;
if ($titulo_dado != "" && $conteudo_dado != "" && $data_dado) {
    $registro = true;
}else{
    echo "<script> alert('Existe algum campo não preenchido'); window.history.go(-1); </script>";
}

if($registro == true){
    mysqli_query($link, "INSERT INTO dados_municipio(titulo_dado, descricao_dado, data_dado)VALUES
    ('$titulo_dado', '$conteudo_dado', '$data_dado')");
        echo "<script> alert('adicionado com sucesso!'); window.location.href='../view/inicio.php' </script>";
    }else{
        echo "<script> window.history.go(-1) </script>";
    }
?>