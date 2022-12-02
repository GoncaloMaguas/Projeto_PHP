<?php
require_once 'pag-read.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autor</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mobile.css">
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">

</head>



<?php
require_once('cabecalho.php');
?>


<header class="header4">
    <div class="caixa-branca-autor">
        <div class="autor">autor
            <div class="sobre-mim">Sobre mim
            </div>
        </div>

    </div>
</header>


<header class="header5">
    <img class="img-autor " src="desktop/imagens/conteudo.jpg" alt="">
    <p class="area-texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam mollitia, sint numquam fugiat quae delectus alias natus perspiciatis tempora harum perferendis sed nostrum quod consequuntur pariatur, doloremque repellendus vitae ea.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et, cum reiciendis? Fuga voluptates esse soluta aliquam. Magnam nobis quo laborum rem, sed earum consequatur non architecto voluptatem, excepturi, praesentium saepe.<br />
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias quo minima doloribus iste dolores! Eligendi est voluptatem officia qui animi ipsum. Repellat expedita possimus consequuntur nobis optio vel officia maiores!<br />
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias quo minima doloribus iste dolores! Eligendi est voluptatem officia qui animi ipsum. Repellat expedita possimus consequuntur nobis optio vel officia maiores! <br />
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias quo minima doloribus iste dolores! Eligendi est voluptatem officia qui animi ipsum. Repellat expedita possimus consequuntur nobis optio vel officia maiores! <span id="pontos">...</span> <br />
       <span id="mais"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias quo minima doloribus iste dolores! Eligendi est voluptatem officia qui animi ipsum. Repellat expedita possimus consequuntur nobis optio vel officia maiores!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae necessitatibus molestias vero animi nam laboriosam autem tenetur, consectetur at vel aut dicta blanditiis nesciunt numquam delectus soluta maxime, laudantium deserunt?
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias quo minima doloribus iste dolores! Eligendi est voluptatem officia qui animi ipsum. Repellat expedita possimus consequuntur nobis optio vel officia maiores! <br />
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias quo minima doloribus iste dolores! Eligendi est voluptatem officia qui animi ipsum. Repellat expedita possimus consequuntur nobis optio vel officia maiores! <br />
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero rerum aperiam in maxime mollitia nihil soluta porro quo excepturi, harum vero omnis at? Recusandae quod quo culpa debitis, et necessitatibus!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, numquam quia. Delectus corporis minus explicabo temporibus voluptas dicta voluptatum tenetur laborum fugiat illo? Ipsum quidem maxime dolorem quas explicabo porro!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore ullam consequatur magni quis rem vero a culpa. Quas fuga expedita voluptatibus assumenda sequi, perspiciatis atque laboriosam id vel dolor impedit.
        </span></p>
    <?php foreach ($projeto_codemaster as $projeto) : ?>
        <tr>
            <td><img class="marg-esq-55" width="200" height="200" src="<?php echo $projeto['picture'] ?>" alt="Não foi possivel mostrar a imagem"></td>
        </tr>
        <?php endforeach; ?>
    </br> 
    <button class="voltar-atras ver-mais-margin" onclick="leiaMais()" id="btnLerMais">ver mais</button></br>
    <a href='http://localhost/projeto%20codemaster/home.php'> <button class="voltar-atras voltar-atras-margin">voltar atrás</button></a>
</header>



<?php
require_once('rodape.php');
require_once('footer.php');
?>







