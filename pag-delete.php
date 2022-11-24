<?php
require_once 'config.php';
if ( empty($_GET['id'])  ||  !((int)$_GET['id'])){
        echo('Identificação inválida, tente novamente');
       
    

} else{
    $query = 'DELETE FROM projeto_codemaster WHERE id = ?';
    // preparação 
    $sql = $pdo->prepare($query);

        // execução
     if ($sql->execute([$_GET['id']])) {
            $message = "Registo apagado com sucesso";
            echo($message);
            ?> 
            </br>
            </br>
            <a href='http://localhost/projeto%20codemaster/pag-backoffice.php'> <button>voltar para o backoffice</button></a>
            
            
            <?php


        } else {
          
            $message = "Não foi possivel apagar o registo, tente novamente";
            echo($message);
        }
}


 