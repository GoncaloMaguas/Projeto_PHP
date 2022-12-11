<?php
/*
Para aceder á página backoffice será nessecário inserir na barra de pesquisa do navegador o seguinte código: http://localhost/projeto%20codemaster/pag-backoffice.php
*/ 

require_once 'pag-create.php';
?>

<hr>

<?php require_once 'pag-read.php';

foreach ($projeto_codemaster as $projeto) : ?>
    <?php $i=$projeto['id']?>
    <tr>
    <td><img class="marg-esq-55 marg-cima-50px" width="200" height="200" src="<?php echo $projeto['picture'] ?>" alt="Não foi possivel mostrar a imagem"></td>
        <div class="blog-action flex flex-end">
        <a class="marg-esq-55" onclick="return confirm('Tem certeza?');" <?php echo 'href="pag-delete.php?id=' .$i.'">Apagar imagem com id='.$i.'?</a> '?>
        </div>
    </tr>
    <?php endforeach; ?>



    <?php



