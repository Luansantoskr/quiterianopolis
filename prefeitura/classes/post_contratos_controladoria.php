<?PHP
include "conexao.php";

$tituloContratoControladoria = $_POST['tituloContratosControladoria'];
$conteudoContratoControladoria = $_POST['conteudoContratosControladoria'];
$dataContratoControladoria = $_POST['dataContratosControladoria'];
$credorContratoControladoria = $_POST['credorContratosControladoria'];

$registro = false;
if ($tituloContratoControladoria != "" && $conteudoContratoControladoria != "" && $dataContratoControladoria != "") {
    $registro = true;
}else{
    echo "<script> alert('Existe algum campo não preenchido'); window.history.go(-1); </script>";
}

if($registro == true){
    mysqli_query($link, "INSERT INTO contratos_controladoria(titulo_contrato_controladoria, conteudo_contrato_controladoria, data_contrato_controladoria, credor_contrato_controladoria)VALUES
    ('$tituloContratoControladoria', '$conteudoContratoControladoria', '$dataContratoControladoria','$credorContratoControladoria')");
        echo "<script> alert('adicionado com sucesso!'); window.location.href='../view/inicio.php' </script>";
    }else{
        echo "<script> window.history.go(-1) </script>";
    }
?>