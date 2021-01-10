<?PHP
include "conexao.php";

$nomeOrdenadorControladoria = $_POST['nomeOrdenadorControladoria'];
$dataInicioOrdenadorControladoria = $_POST['dataInicioOrdenadorControladoria'];
$dataFimOrdenadorControladoria = $_POST['dataFimOrdenadorControladoria'];

$registro = false;
if ($nomeOrdenadorControladoria != "" && $dataInicioOrdenadorControladoria != "" && $dataFimOrdenadorControladoria != "") {
    $registro = true;
}else{
    echo "<script> alert('Existe algum campo não preenchido'); window.history.go(-1); </script>";
}

if($registro == true){
    mysqli_query($link, "INSERT INTO ordenadores_controladoria(nome_ordenador_controladoria, dataInicio_ordenador_controladoria, dataFim_ordenador_controladoria)VALUES
    ('$nomeOrdenadorControladoria', '$dataInicioOrdenadorControladoria', '$dataFimOrdenadorControladoria')");
        echo "<script> alert('adicionado com sucesso!'); window.location.href='../view/inicio.php' </script>";
    }else{
        echo "<script> window.history.go(-1) </script>";
    }
?>