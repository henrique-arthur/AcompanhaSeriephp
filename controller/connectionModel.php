<?php

    $dsn = 'mysql:server=localhost;dbname=acompanhaserie;port=3306';
    $user = 'root';
    $pass = '';
    
    try{
        $con = new PDO($dsn, $user, $pass);
    }catch(PDOException $e ){
        header('Location: view\error\error.php?e='.$e->getCode().'&m='.$e->getMessage().'');

    }
    
    


    

