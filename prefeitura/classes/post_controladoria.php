<?PHP
include "conexao.php";

$cnpjControladoria = $_POST['cnpjControladoria'];
$telefoneControladoria = $_POST['telefoneControladoria'];
$emailControladoria = $_POST['emailControladoria'];
$horarioControladoria = $_POST['funcionamentoControladoria'];
$enderecoControladoria = $_POST['enderecoControladoria'];
$nomeControladoria = $_POST['nomeControladoria'];
$cargoControladoria = $_POST['cargoControladoria'];
$periodoControladoria = $_POST['periodoControladoria'];
$amparoControladoria = $_POST['amparoControladoria'];
$matriculaControladoria = $_POST['matriculaControladoria'];

$registro = false;
if ($cnpjControladoria != "" && $telefoneControladoria != "" && $emailControladoria != "" && $horarioControladoria != "" 
&& $enderecoControladoria != "" && $nomeControladoria != "" && $cargoControladoria != "" && $periodoControladoria != "" 
&& $amparoControladoria != "" && $matriculaControladoria != "") {
    $registro = true;
}else{
    echo "<script> alert('Existe algum campo não preenchido'); window.history.go(-1); </script>";
}

if($registro == true){
    mysqli_query($link, "INSERT INTO info_controladoria(cnpj_controladoria, telefone_controladoria,email_controladoria,
    horario_controladoria, endereco_controladoria, nome_controladoria, cargo_controladoria, periodo_controladoria,
    amparo_controladoria, matricula)VALUES
    ('$cnpjControladoria', '$telefoneControladoria', '$emailControladoria', '$horarioControladoria', '$enderecoControladoria',
    '$nomeControladoria', '$cargoControladoria', '$periodoControladoria', '$amparoControladoria', '$matriculaControladoria')");
        echo "<script> alert('adicionado com sucesso!'); window.location.href='../view/inicio.php' </script>";
    }else{
        echo "<script> window.history.go(-1) </script>";
    }
?>