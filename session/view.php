<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto do autor - Cadastrado</title>
    <link rel="stylesheet" href="../aulaphp5/css/resultado.css">
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION ['email']) && isset($_SESSION['password'])){
        $email = $_SESSION['email'];
        $password = $_SESSION['password'];
        
        if($_POST != []){
            $titulo= $_POST["titulo"];
            $texto= $_POST["texto"];
            $autor= $_POST["autor"];
            if ($titulo == '' || $conteudo == '' || $autor == '') {
                echo "<p>Preencha todos os campos!</p>";   
            } else {
        ?>
            <header>
                <section class="titulo">
                    <img src="./imagem/ilustracao-escritorio.png" class= "image" alt="Uma ilustração de uma moça no escritório">
                    <h1> <?php echo "Titulo: $titulo" ?> </h1>
                </section>
            </header>
            <main>
                <section>
                    <h2>
                        Conteudo:
                    </h2>
                    <p>
                        <textarea name="texto" class="area" readonly cols="30" rows="10">
                            <?php
                                echo $texto
                            ?>
                        </textarea>
                    </p>
                </section>
            </main>
            <footer>
                <section>
                    <p>
                        <?php
                            echo "Autor: $autor"
                        ?>
                    </p>
                </section>
            </footer>
        <?php
        }} 
        if (isset($_SESSION['email']) == false || $_POST == []){
            echo "É necessário fazer Login para acessar essa página";
        } 
    
    }else{
        echo "Acesso negado";
    }
    ?>
</body>
</html>

