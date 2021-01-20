<?php
    include_once 'connectionModel.php';
    $email = $_POST['email'];
    $b = $_POST['senha'];

    try{
        $query = 'select email from usuario where email='.$email. '';
        $stmt = $con->query($query);
        print_r($stmt);
        echo '<p>DPS DAQUI É O FETCHALL</p>';
        $lista = $stmt->fetchAll();
        print_r($lista);
    }catch(PDOException $e){
        echo $e;
    }