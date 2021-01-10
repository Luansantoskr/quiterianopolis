<?PHP
include "conexao.php";

$tituloLicitacaoControladoria = $_POST['tituloLicitacaoControladoria'];
$conteudoLicitacaoControladoria = $_POST['conteudoLicitacaoControladoria'];
$dataLicitacaoControladoria = $_POST['dataLicitacaoControladoria'];

$registro = false;
if ($tituloLicitacaoControladoria != "" && $conteudoLicitacaoControladoria != "" && $dataLicitacaoControladoria != "") {
    $registro = true;
}else{
    echo "<script> alert('Existe algum campo não preenchido'); window.history.go(-1); </script>";
}

if($registro == true){
    mysqli_query($link, "INSERT INTO licitacoes_controladoria(titulo_portaria_controladoria, conteudo_portaria_controladoria, data_portaria_controladoria)VALUES
    ('$tituloPortariaControladoria', '$conteudoPortariaControladoria', '$dataPortariaControladoria')");
        echo "<script> alert('adicionado com sucesso!'); window.location.href='../view/inicio.php' </script>";
    }else{
        echo "<script> window.history.go(-1) </script>";
    }
?>