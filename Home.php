<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">

</head>

<?php
require_once('cabecalho.php');
?>






<header class="header2">
    <div class="caixa-branca">
        <img src="desktop/imagens/FOTO-editada.jpg" class="imagem-bem-vindo" alt="">
        <div class="titulo-bem-vindo">Bem-vindo ao meu website
            <p class="texto-bem-vindo">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, reprehenderit incidunt, eum, quam enim molestiae dolorum minima fugit quisquam neque temporibus sunt necessitatibus! Libero eveniet inventore autem temporibus, quae enim! <br />
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, iusto accusamus temporibus deleniti assumenda mollitia doloremque, tempore sapiente quos quod corrupti numquam fugit enim explicabo error, voluptatem distinctio blanditiis illo. <br />
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, iusto accusamus temporibus deleniti assumenda mollitia doloremque, tempore sa piente quos quod corrupti numquam fugit enim explicabo error, voluptatem distinctio blanditiis illo. <br />
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, iusto accusamus temporibus deleniti assumenda mollitia doloremque, tempore sapiente quos quod corrupti numquam fugit enim explicabo error, voluptatem distinctio blanditiis illo. <br />
                <a href='http://localhost/projeto%20codemaster/autor.php'>  <button class="bem-vindo-botao-saber-mais">Saber mais</button></a>

            </p>
        </div>

    </div>
</header>
<header class="header3">
    <div class="titulo-area-ultimos-livros">Últimos livros</div>
    <p class="texto-area-ultimos-livros">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam mollitia, sint numquam fugiat quae delectus alias natus perspiciatis tempora harum perferendis sed nostrum quod consequuntur pariatur, doloremque repellendus vitae ea.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et, cum reiciendis? Fuga voluptates esse soluta aliquam. Magnam nobis quo laborum rem, sed earum consequatur non architecto voluptatem, excepturi, praesentium saepe.<br />
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias quo minima doloribus iste dolores! Eligendi est voluptatem officia qui animi ipsum. Repellat expedita possimus consequuntur nobis optio vel officia maiores!<br />
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias quo minima doloribus iste dolores! Eligendi est voluptatem officia qui animi ipsum. Repellat expedita possimus consequuntur nobis optio vel officia maiores! <br />
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias quo minima doloribus iste dolores! Eligendi est voluptatem officia qui animi ipsum. Repellat expedita possimus consequuntur nobis optio vel officia maiores! <br />
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias quo minima doloribus iste dolores! Eligendi est voluptatem officia qui animi ipsum. Repellat expedita possimus consequuntur nobis optio vel officia maiores!
    </p>
</header>


<div class="destaques">
    <div class="caixa1"> <img src="desktop/imagens/livro1.jpg" alt="">
        <div class="titulo-de-destaque">Senhora do amor e da guerra</div>
        <div class="espaçamento"></div>
        <div class="categoria-destaque">novidade</div>
        <p class="texto-destaque">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum eligendi accusamus tenetur veritatis neque nihil incidunt ratione esse corporis, quo voluptas eum non deleniti, tempore fuga dolorem reiciendis dicta alias!</p>
        <a href='http://localhost/projeto%20codemaster/livros-4.php'>  <button class="botao-destaques">Saber mais</button></a>
    </div>
    <div class="caixa2"> <img src="desktop/imagens/livro2.jpg" alt="">
        <div class="titulo-de-destaque">o velho que pensava que fugia</div>
        <div class="espaçamento"></div>
        <div class="categoria-destaque">mais vendido</div>
        <p class="texto-destaque">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum eligendi accusamus tenetur veritatis neque nihil incidunt ratione esse corporis, quo voluptas eum non deleniti, tempore fuga dolorem reiciendis dicta alias!</p>
        <a href='http://localhost/projeto%20codemaster/livros-3.php'> <button class="botao-destaques">Saber mais</button></a>
    </div>
    <div class="caixa3"> <img src="desktop/imagens/livro3.jpg" alt="">
        <div class="titulo-de-destaque">o coleccionador de amnésias</div>
        <div class="espaçamento"></div>
        <div class="categoria-destaque">em promoção</div>
        <p class="texto-destaque">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum eligendi accusamus tenetur veritatis neque nihil incidunt ratione esse corporis, quo voluptas eum non deleniti, tempore fuga dolorem reiciendis dicta alias!</p>
        <a href='http://localhost/projeto%20codemaster/livros-2.php'>  <button class="botao-destaques">Saber mais</button></a>
    </div>




</div>
<?php
require_once('rodape.php');
require_once('footer.php');
?>