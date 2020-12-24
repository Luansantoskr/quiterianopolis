<?PHP
include "conexao.php";

$fundacao = $_POST['fundacao'];
$emancipacao_politica = $_POST['emancipacao_politica'];
$gentilico= $_POST['gentilico'];
$unFederetiva = $_POST['unFederativa'];
$mesoregiao = $_POST['mesoregiao'];
$microregiao = $_POST['microregiao'];
$distancia_capital = $_POST['distancia_capital'];
$area = $_POST['area'];
$populacao_estimada = $_POST['populacao_estimada'];
$densidade = $_POST['densidade'];
$altitude = $_POST['altitude'];
$clima = $_POST['clima'];
$fuso_horario = $_POST['fuso_horario'];

$registro = false;
if ($fundacao != "" && $emancipacao_politica != "" && $gentilico && $unFederetiva != "" && $mesoregiao != "" && $microregiao
&& $distancia_capital != "" && $area != "" && $populacao_estimada && $densidade != "" && $altitude != "" && $clima && $fuso_horario) {
    $registro = true;
}else{
    echo "<script> alert('Existe algum campo não preenchido'); window.history.go(-1); </script>";
}

if($registro == true){
    mysqli_query($link, "INSERT INTO dados_mun(fundacao, emancipacao_politica, gentilico, unidade_federativa,
    mesoregiao, microregiao, distancia_capital, area, populacao_estimada, densidade, altitude, clima, fuso_horario)VALUES
    ('$fundacao', '$emancipacao_politica', '$gentilico', '$unFederetiva', '$mesoregiao', '$microregiao', '$distancia_capital', 
    '$area', '$populacao_estimada', '$densidade', '$altitude', '$clima', '$fuso_horario')");
        echo "<script> alert('adicionado com sucesso!'); window.location.href='../view/inicio.php' </script>";
    }else{
        echo "<script> window.history.go(-1) </script>";
    }
?>