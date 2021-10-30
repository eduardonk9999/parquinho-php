<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forms</title>
  <style>
    .error{
      color: red;
    }
  </style>
</head>
<body>
  <form action="" method="post">
    <h1>Formulário com PHP</h1>

    Nome: <input type="text" name="nome"><br><br>
    E-mail: <input type="text" name="email"><br><br>
    Website: <input type="text" name="website"><br><br>
    Comentário:
    <textarea name="comentario" cols="30" rows="3"></textarea>
    <br><br>
    Gênero: 
    <br><br>
    <input type="radio" name="genero" value="masulino"> Masculino
    <input type="radio" name="generp" value="feminino"> Feminino
    <input type="radio" name="genero" value="outro"> Outro
    <br>
    <button type="submit" name="enviado">Enviar</button>
    <h2>Dados enviados:</h2>

    <?php
      if(isset($_POST['enviado'])) {
        echo '<p><b>Nome: </b>' . $_POST['nome'] . '</p>';
        echo '<p><b>E-mail: </b>' . $_POST['email'] . '</p>';
        echo '<p><b>Website: </b>' . $_POST['website'] . '</p>';
        echo '<p><b>Comentário: </b>' . $_POST['comentario'] . '</p>';
        echo '<p><b>Gênero: </b>' . $_POST['genero'] . '</p>';
      }
    
    
    ?>
  </form>
</body>
</html>