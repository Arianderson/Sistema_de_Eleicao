<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eleição da Chapa 2023</title>
    <link rel="stylesheet" href="estilo.css" />
    <link rel="stylesheet" href="form.css" />
    <script src="./script.js"></script>
</head>

<body class="login" onload="secao()">

    <header>
        <h1>Eleição da Chapa <br /> 2023 </h1>
    </header>
    <main>

        <div class="center">
            <h2>Digite sua identificação</h2>
            <!--condição para averiguar se o crm ou senha são cadastrados ou não!-->
            <?php
            if (isset($_GET['erro'])) {
                if ($_GET['erro'] == "dadoserrado") {
                    echo "<style>a{color: red;}</style><a>CRM ou Senha estão incorretos!</a>";
                }
            }
            ?>
            <form name="form" action="auth.php" method="POST">
                <div class="campo">

                    <input type="text" id="crm" name="crm" placeholder="" aria-required="true" required />

                    <label for="crm">CRM </label>


                </div>

                <div class="campo">
                    <input type="password" id="senha" name="senha" placeholder="" aria-required="true" required />
                    <label for="senha">Senha </label>
                </div>

                <div class="campo">
                    <input type="submit" />
                </div>

            </form>

    </main>
    </div>
    <footer>2023 - Hospital</footer>
</body>

</html>