<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="global.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <title>Acompanha Série</title>
</head>
<body>
    <div class="logo">
        <nobr style="color:#E5E5E5;">Acompanha</nobr>
        <nobr style="color:#EC625F;">Série</nobr>
    </div>
    <div class="box">
        <div class="left-box">
            <img src="eren.png"/>
        </div>
        <div class="right-box">
            <h1>Entrar</h1>
            <form class="formulario" action="index.php" method="post">
                <input class="entrada entrarCampos" type="text" name="email" placeholder="Email">
                <input class="entrada entrarCampos" type="password" name="senha" placeholder="Senha">
                <input class="entrada entrarBotao" type="submit" name="enviar" value="Entrar">  
                <div class="checkbox">
                    <input type="checkbox" id="lembrarLogin" name="lembrarLogin">
                    <label for="lembrarLogin">Lembre-se de mim</label>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>