<?php
include ('conexao.php');
session_start();

if(empty($_POST['crm']) || empty($_POST['senha'])){
    header('location: index.php');
    exit();
}

$crm = mysqli_real_escape_string($conexao, $_POST['crm']);

$senha= mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT * FROM `acionistas` WHERE crm = $crm and senha = $senha";
$result = mysqli_query($conexao, $query);
$dado = $result->fetch_array();
$row = mysqli_num_rows($result);
//carrega os dados de administrador:
//$query_adm = "SELECT * FROM `acionistas` WHERE crm = 'feijao' and senha = '160999'";
//$result_adm = mysqli_query($conexao, $query_adm);
//$dado_adm = $result_adm->fetch_array();
//$row_adm = mysqli_num_rows($result_adm);


if($row == 1 and $crm != '111111'){
    $_SESSION['usuario'] = $crm;
    $_SESSION['nome'] = $dado["nome"];
    $_SESSION['id'] = $dado["id"];
    header('location: ./telas/votoconsadm.php');
exit();
}elseif( $crm == '111111' ){
    $_SESSION['nome'] = $dado["nome"];
    header('location: administrador.php');
    exit();
}
else{
    header('location: index.php?erro=dadoserrado');
    exit();
}

?>