<?php
  session_start();
  include ('../conexao.php');
  $consulta = "SELECT * FROM acionistas";
  $con = mysqli_query($conexao, $consulta);

  if(empty($_SESSION['nome']) || empty($_SESSION['id'])){
    header('location: ../index.php');
    exit();}
?>
<!DOCTYPE html>
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
        <span>Nome: <?php echo $_SESSION['nome'];?></span>
        <br /><br />
        <span>ID: <?php echo $_SESSION['id'];?></span>
        <br />
        <div class="selecao">
            <h2>Eleger para Conselho Administrativo</h2>
            <form action="confirmvotoadm.php" method="POST">
                <input class="input_search" id="candidatoadm" name="candidatoadm" placeholder="Pesquise seu candidato"
                    required />
                <h2>Escolha:</h2><br />
                <button class="botaovolta" type="reset">Limpar</button>
                <button class="botaoconfirma" type="submit">Confirmar</button>
            </form>
        </div>
    </div>
</body>

</html>