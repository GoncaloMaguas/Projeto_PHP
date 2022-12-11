<?php

// Define as configurações de acesso à base de dados.
define('DB_HOST', '38.242.141.223');
define('DB_NAME', 'goncalo');
define('DB_USER', 'goncalo');
define('DB_PASS', '12345');
define('DB_PORT', '3306');

/**
 * A palavra DSN significa "Data Source Name", que contém toda
 * a informação necessária para o PHP fazer uma conexão a base de dados.
 *
 * O que as constantes abaixo significam?
 *
 * DB_HOST - O endereço/IP de ligação a base de dados.
 * DB_NAME - Nome da base de dados
 * DB_USER - O utilizador de ligação a base de dados.
 * DB_PASS - A senha de ligação a base de dados.
 * DB_PORT - Porta de ligação a base de dados.
 *
 * Iremos concatenar a string abaixo com os valores das
 * constantes definidas no ficheiro config.php e atribuir
 * o resultado da concatenação dentro da variável $dsn.
 */
$dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST.';port='. DB_PORT;
$pdo = new PDO($dsn, DB_USER, DB_PASS);