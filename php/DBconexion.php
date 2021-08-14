<?php
    //Definir atributos de la Clase
    $db=NULL;
    $hostname = 'localhost';
    $database = 'prueba';
    $username = 'root';
    $password = "Jocn@2019";
    $dsn = "mysql:host=$hostname;dbname=$database;charset=UTF8";
    try 
    {
        $db = new PDO($dsn, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    } catch (PDOException $e) 
    {
        echo 'Excepción capturada: ', $e->getMessage(), self::$dsn, "\n";
    }
?>