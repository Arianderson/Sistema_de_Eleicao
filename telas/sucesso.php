<?php
session_start();
//Voto de conselhoADM:

?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="5; url=http://localhost/eleicaovvh/index.php">
    <title>Eleição da Chapa 2023</title>
    <link rel="stylesheet" href="../estilo.css" />
    <script src="../script.js"> </script>
</head>

<body class="telasucesso">
    <div class="textoaviso">
        <h1>FIM!</h1>
        <h2>Votos registrados com sucesso!</h2>
        <h4><?php echo "Voto para Conselho Administrativo: " .$_SESSION['nomecandadm'];
echo "<br /> Voto para Conselho Fiscal: " .$_SESSION['nomecandfisc'];?></h4>
        <h2>Boa sorte!</h2>
    </div>
</body>

</html>