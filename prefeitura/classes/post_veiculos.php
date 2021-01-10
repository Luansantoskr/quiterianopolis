<?PHP
include "conexao.php";

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$placa = $_POST['placa'];
$renavam = $_POST['renavam'];
$secretaria = $_POST['secretariaV'];
$finalidade = $_POST['finalidade'];
$data_veiculo = $_POST['dataVeiculo'];
$situacao = $_POST['situacao'];
$tipo = $_POST['tipo'];
$mais = $_POST['maisVeiculo'];

$registro = false;
if ($marca != "" && $modelo != "" && $placa != "" && $renavam != "" && $secretaria != "" && $finalidade != ""
&& $data_veiculo != "" && $situacao != "" && $tipo != "") {
    $registro = true;
}else{
    echo "<script> alert('Existe algum campo não preenchido'); window.history.go(-1); </script>";
}

if($registro == true){
    mysqli_query($link, "INSERT INTO veiculos(marca_veiculo, modelo_veiculo, placa_veiculo, renavam_veiculo,
    secretaria_veiculo, finalidade_veiculo, data_veiculo, situacao_veiculo, tipo_veiculo, mais_veiculo)VALUES
    ('$marca', '$modelo', '$placa', '$renavam', '$secretaria', '$finalidade', '$data_veiculo', 
    '$situacao', '$tipo', '$mais')");
        echo "<script> alert('adicionado com sucesso!'); window.location.href='../view/inicio.php' </script>";
    }else{
        echo "<script> window.history.go(-1) </script>";
    }
?>