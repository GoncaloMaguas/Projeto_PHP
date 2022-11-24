<?php
require_once 'config.php'; 
$query = 'SELECT * FROM projeto_codemaster';
$sql = $pdo->prepare($query);

if ($sql->execute()) {
    $projeto_codemaster = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
    $projeto_codemaster = [];
}
?>
