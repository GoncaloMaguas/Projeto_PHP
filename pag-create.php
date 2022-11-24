<?php

require_once 'config.php';  //coloquei aqui o require pois n estava a reconhecer a variavel $pdo que se encontra no config.php
if (
    !empty($_POST['picture'])

) {
    // declaração
    $query = 'INSERT INTO projeto_codemaster (picture) VALUES (?)';
    // preparação 
    $sql = $pdo->prepare($query);
    // execução
    if ($sql->execute([
        $_POST['picture']

    ])) {
        $message = "Nova imagem criada com sucesso com sucesso";
    } else {
        $message = "Não foi possível criar a imagem, tente novamente";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Criar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">

</head>

<div class="page container">
    <section>
        <h3>Adicionar imagem</h3>
        <form class="form" method="POST" action="pag-backoffice.php">
            <div class="form-group flex flex-col">
                <label for="picture"> Imagem</label>

                <input type="text" name="picture" >
            
            </div>

            <div class="form-field">
            </br>
                <button>Adicionar</button>
            </div>
        </form>
    </section>
</div>