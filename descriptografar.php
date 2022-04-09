<!DOCTYPE html>
<html lang="en">
<head>
  <title>Encriptador</title>
  <link rel="shortcut icon" type="imagex/png" href="img/encryption.png">
  <link rel="stylesheet" href="styles.css">
  <meta charset="UTF-8">
  <meta name="description" content="Encriptador Básico, Feito em Base na Aula de Auditoria e Segurança de Sistemas">
  <meta name="author" content="Eduardo Garcia">
</head>
<body>
<a href="index.php">
    <button style="border-radius: 6px; border: none; cursor: pointer; font-size: 16px;">Encrypter</button>
</a>
<form action="decrypter.php" method="post">
    <div>
        <label for="chave">Chave:</label>
        <input type="text" id="chave" name="chave" />
    </div>

    <div>
        <label for="crypto">Criptografia:</label>
        <input type="text" id="crypto" name="crypto" />
    </div>

    <div class="button">
        <button type="submit">Descriptografar</button>
    </div>
</form>

</body>
</html>