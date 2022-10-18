<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre seu texto</title>
    <link rel="stylesheet" href="../aulaphp5/css/resultado.css">
</head>
<body>
  <?php
    $dbemail = 'ETEC';
    $dbpassword = 'etec';
    // setcookie('user',$user,time()+ 3600)

    session_start();

    if(isset($_POST['email']) && isset($_POST['password'])){
    $email= $_POST["email"];
    $password= $_POST["password"];

      if ($email== "" && $password== ""){
        echo "Preencha todos os campos";
      }elseif ($email == $dbemail && $password == $dbpassword){
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
  ?>
    <header>
      <h1>
        Cadastre seu texto
      </h1>
    </header>
      <form action="view.php" method="post">
        Titulo: <input class="titulo" type="text" name="titulo"><br>
        Conteudo:<br>
        <textarea class="texto" name="texto" placeholder="Digite seu texto" id="" maxlength="200" cols="30" rows="10"></textarea><br>
        Autor: <input class="autor" type="text" name="autor"><br>
        <input class= "autor" type="submit" value="Cadastrar">
      </form>  
  <?php
      }else{
        echo "Usuário ou senha incorretos";
      }
    
    }else{
      echo "Acesso negado.";
    }
  ?>
</body>
</html>
