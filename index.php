<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site uploads</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    
    <header class="header" name="header"><h1> Uploads</h1>
    </header>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Selecione o arquivo:</label><br>
        <input type="file" id="file" neme="file" accept="image/* ,video/*"><br>

        <label for="legenda">Legenda</label><br>
        <input type="text" id="legenda" name="legenda"><br>

        <button type="submit">Enviar</button>
</form>


    <Footer class="footer">Trabalhando o visual do site em css.....
    </Footer>
    
</body>
</html>
