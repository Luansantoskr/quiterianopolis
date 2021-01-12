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
    mysqli_query($link, "INSERT INTO licitacoes_controladoria(titulo_licitacao_controladoria, conteudo_licitacao_controladoria, data_licitacao_controladoria)VALUES
    ('$tituloLicitacaoControladoria', '$conteudoLicitacaoControladoria', '$dataLicitacaoControladoria')");
        echo "<script> alert('adicionado com sucesso!'); window.location.href='../view/inicio.php' </script>";
    }else{
        echo "<script> window.history.go(-1) </script>";
    }
?>