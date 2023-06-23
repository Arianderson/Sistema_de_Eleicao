<?php
  session_start();

  if(empty($_SESSION['nome']) || empty($_SESSION['id'])){
    header('location: ../index.php');
    exit();}

  include ('../conexao.php');
  echo "Nome: " .$_SESSION['nomecandadm'] ."<br />";
  echo "Numero de Voto: " .$_SESSION['codigocandadm'] ."<br />";
  echo  "ID: " .$_SESSION['idcandadm'] ."<br />";
?><html><img width="20%" src="../img/<?php echo $_SESSION['codigocandadm']?>.jpg" alt="foto do candidato">

</html>
<?php
  $consulta = "SELECT * FROM cand_fisc";
  $con = mysqli_query($conexao, $consulta);
  $dado = $con->fetch_array();
  
  //Voto de conselhoFISC:  
  $candidatofisc = $_POST['candidatofisc'];
  $voto_fisc = mysqli_real_escape_string($conexao, $_POST['candidatofisc']);

  $query = "SELECT * FROM `cand_adms` WHERE codigo = $voto_fisc";
    $result = mysqli_query($conexao, $query);
    $dado = $result->fetch_array();
    $row = mysqli_num_rows($result);
    if($row == 1){
        $_SESSION['codigocandfisc'] = $dado['codigo'];
        $_SESSION['nomecandfisc'] = $dado['nome'];
        $_SESSION['idcandfisc'] = $dado['id'];
        echo "<br />" ."Nome: " .$_SESSION['nomecandfisc'] ."<br />";
        echo "Numero de Voto: " .$_SESSION['codigocandfisc'] ."<br />";
        echo  "ID: " .$_SESSION['idcandfisc'] ."<br />";
      ?><html><img width="20%" src="../img/<?php echo $_SESSION['codigocandfisc']?>.jpg" alt="foto do candidato">

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
            <form action="sucesso.php" method="POST">
                <h2>Candidato escolhido para Conselho Administrativo:</h2><span>
                    <?php echo $_SESSION['nomecandadm'] ." - " .$_SESSION['codigocandadm']?></span>
                <h2>Candidato escolhido para Conselho Fiscal:</h2><span>
                    <?php echo $_SESSION['nomecandfisc'] ." - " .$candidatofisc?></span>
                <button class="botaovolta" type="reset"><a href="./votoconsadm.php"
                        style="text-decoration: none;">voltar</button></a>
                <button class="botaoconfirma" type="submit">Confirmar</button>
            </form>
        </div>
    </div>
</body>

</html>