<?PHP
include "conexao.php";

$tituloPortariaControladoria = $_POST['tituloPortariaControladoria'];
$conteudoPortariaControladoria = $_POST['conteudoPortariaControladoria'];
$dataPortariaControladoria = $_POST['dataPortariaControladoria'];

$registro = false;
if ($tituloPortariaControladoria != "" && $conteudoPortariaControladoria != "" && $dataPortariaControladoria != "") {
    $registro = true;
}else{
    echo "<script> alert('Existe algum campo não preenchido'); window.history.go(-1); </script>";
}

if($registro == true){
    mysqli_query($link, "INSERT INTO portarias_controladoria(titulo_portaria_controladoria, conteudo_portaria_controladoria, data_portaria_controladoria)VALUES
    ('$tituloPortariaControladoria', '$conteudoPortariaControladoria', '$dataPortariaControladoria')");
        echo "<script> alert('adicionado com sucesso!'); window.location.href='../view/inicio.php' </script>";
    }else{
        echo "<script> window.history.go(-1) </script>";
    }
?>