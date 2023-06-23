<?php
  session_start();

  if(empty($_SESSION['nome']) || empty($_SESSION['id'])){
    header('location: ../index.php');
    exit();}

  include ('../conexao.php');
  $consulta = "SELECT * FROM cand_adms";
  $con = mysqli_query($conexao, $consulta);
  $dado = $con->fetch_array();
  
  //Voto de conselhoADM:  
  $candidatoadm = $_POST['candidatoadm'];
  $_SESSION['candidatoadm'] = $candidatoadm;
  $voto_adm = mysqli_real_escape_string($conexao, $_POST['candidatoadm']);

  $query = "SELECT * FROM `cand_adms` WHERE codigo = $voto_adm";
    $result = mysqli_query($conexao, $query);
    $dado = $result->fetch_array();
    $row = mysqli_num_rows($result);
    if($row == 1){
        $_SESSION['codigocandadm'] = $dado['codigo'];
        $_SESSION['nomecandadm'] = $dado['nome'];
        $_SESSION['idcandadm'] = $dado['id'];
        echo "Nome: " .$_SESSION['nomecandadm'] ."<br />";
        echo "Numero de Voto: " .$_SESSION['codigocandadm'] ."<br />";
        echo  "ID: " .$_SESSION['idcandadm'] ."<br />";
      ?><html><img width="20%" src="../img/<?php echo $_SESSION['codigocandadm']?>.jpg" alt="foto do candidato">

</html><?php
    }elseif( $votoadm =='111111' ){
        header('location: ../index.php.php');
        exit();
    }
    else{
        header('location: ../index.php');
        exit();
    }
?>

<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eleição da Chapa 2023</title>
    <link rel="stylesheet" href="../estilo.css" />
    <link rel="stylesheet" href="../botoes.css" />
    <script src="../script.js"></script>
</head>

<body>
    <div class="conteudo">

        <!-- <span>VOTO CONSELHO ADM:</span>< ?php echo $candidatoadm?> -->

        <div class="selecao">
            <form action="votoconsfisc.php" method="POST">
                <h2>Candidato escolhido para Conselho Administrativo:</h2><span>
                    <?php echo $_SESSION['nomecandadm'] ." - " .$candidatoadm?></span>
                <button class="botaovolta" type="reset"><a href="./votoconsadm.php"
                        style="text-decoration: none;">voltar</button></a>
                <button class="botaoconfirma" type="submit">Confirmar</button>
            </form>
        </div>
    </div>
</body>

</html>