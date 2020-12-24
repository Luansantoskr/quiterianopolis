<?PHP
include "conexao.php";

$prefeito = $_POST['nome_prefeito'];
$vice = $_POST['nome_vice'];

$registro = false;
if ($prefeito != "" && $vice != "") {
    $registro = true;
}else{
    echo "<script> alert('Existe algum campo não preenchido'); window.history.go(-1); </script>";
}

$dataCaptura = date('Y-m-d');

if($registro == true){
    mysqli_query($link, "INSERT INTO prefeito_vice(nome_prefeito, nome_vice, dataCaptura)VALUES
    ('$prefeito', '$vice', '$dataCaptura')");
        echo "<script> alert('adicionado com sucesso!'); window.location.href='../view/inicio.php' </script>";
    }else{
        echo "<script> window.history.go(-1) </script>";
    }



?>