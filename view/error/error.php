<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../global.css" rel="stylesheet">
    <link href="error.css" rel="stylesheet">
    <title>Acompanha Série</title>
    <?php 
        $error = $_GET['e'];
        $mensagem = $_GET['m'];
    ?>
</head>
<body>
    <div class="container">
        <div class="logo">
            <nobr style="color:#E5E5E5;">Acompanha</nobr>
            <nobr style="color:#EC625F;">Série</nobr>
        </div>
        <div class="box">
            <h1>Erro <?php echo $error ?></h1>
            <p>Ocorreu um erro inesperado ao processar seus dados.</p>
            <?php                 
                echo"<p>";
                print_r('Mensagem: '. $mensagem);
                echo "</p>";
             ?>
        </div>
    </div>
</body>
</html>