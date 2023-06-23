<?php
session_start();
include ('conexao.php');
$consulta = "SELECT * FROM acionistas";
$con = mysqli_query($conexao, $consulta);
?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="5; url=http://localhost/eleicaovvh/administrador.php">
    <title>Eleição da Chapa 2023</title>
    <link rel="stylesheet" href="../estilo.css" />
    <script src="../script.js"></script>
</head>

<body>
    <div class="administrador">
        <h2>Bem vindo a tela de <?php echo "<u>" .$_SESSION['nome'] ."</u>";?></h2>

        <div style="background-color: transparent; width:30%; margin:auto; text-align:center;">

            <table border="1" align="center">
                <tr>
                    <td>ID</td>
                    <td>NOME</td>
                    <td>CRM</td>
                    <td>QUANT.VOTOS.ADM</td>
                    <td>QUANT.VOTOS.FISC</td>
                </tr>
                <?php while($dado = $con->fetch_array()){ ?>
                <tr>
                    <td><?php echo $dado["id"]?></td>
                    <td><?php echo $dado["nome"]?></td>
                    <td><?php echo $dado["crm"]?></td>
                    <td><?php echo $dado["voto_adm"]?></td>
                    <td><?php echo $dado["voto_fisc"]?></td>
                </tr>
                <?php } ?>
            </table>

            <option value="<?php echo $dado["crm"]?>">

                </datalist>

        </div>
    </div>
</body>

</html>