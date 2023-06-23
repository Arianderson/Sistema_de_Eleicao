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

        <!-- <span>VOTO CONSELHO ADM:</span>< ?php echo $candidatoadm?> -->

        <div class="selecao">
            <h2>Eleger para Conselho Financeiro</h2>
            <form action="confirmvotofisc.php" method="POST">
                <input class="input_search" id="candidatofisc" name="candidatofisc" placeholder="Pesquise seu candidato"
                    required />
                <h2>Candidato escolhido para Conselho Administrativo:</h2><span>
                    <?php echo $_SESSION['nomecandadm'] ." - " .$_SESSION['codigocandadm'];?></span>
                <button class="botaovolta" type="reset">Limpar</button>
                <button class="botaoconfirma" type="submit">Confirmar</button>
            </form>
        </div>
    </div>
</body>

</html>