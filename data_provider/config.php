<?php

$api_key = '41665546c85a863bb0ce355f38eac7c1';
//$api_key = 'cf76a02638d60d065c009623df1b7be4';

$api_url = 'https://api.the-odds-api.com/v3';

/* Host name of the MySQL server */
$host = '127.0.0.1';

/* MySQL account username */
$user = 'root';

/* MySQL account password */
$passwd = '';

/* The schema you want to use */
$schema = 'laravel_betting';

/* The PDO object */
$pdo = NULL;

/* Connection string, or "data source name" */
$dsn = 'mysql:host=' . $host . ';dbname=' . $schema;

/* Connection inside a try/catch block */
try {
    /* PDO object creation */
    $pdo = new PDO($dsn, $user, $passwd);

    /* Enable exceptions on errors */
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    /* If there is an error an exception is thrown */
    echo 'Connection failed<br>';
    echo 'Error number: ' . $e->getCode() . '<br>';
    echo 'Error message: ' . $e->getMessage() . '<br>';
    die();
}

// Create connection
$connect = mysqli_connect($host, $user, $passwd, $schema);

