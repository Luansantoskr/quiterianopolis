<?PHP
include "conexao.php";

$tituloInControladoria = $_POST['tituloInControladoria'];
$conteudoInControladoria = $_POST['conteudoInControladoria'];
$dataInControladoria = $_POST['dataInControladoria'];

$registro = false;
if ($tituloInControladoria != "" && $conteudoInControladoria != "" && $dataInControladoria != "") {
    $registro = true;
}else{
    echo "<script> alert('Existe algum campo não preenchido'); window.history.go(-1); </script>";
}

if($registro == true){
    mysqli_query($link, "INSERT INTO in_controladoria(titulo_in_controladoria, conteudo_in_controladoria, data_in_controladoria)VALUES
    ('$tituloInControladoria', '$conteudoInControladoria', '$dataInControladoria')");
        echo "<script> alert('adicionado com sucesso!'); window.location.href='../view/inicio.php' </script>";
    }else{
        echo "<script> window.history.go(-1) </script>";
    }
?>