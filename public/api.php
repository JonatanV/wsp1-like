<?php

    include '../includes/dbcon.php';

    $dbInstance = DbConnection::getInstance();
    $dbh = $dbInstance->getConnection();

    $sth = $dbh->prepare('SELECT * FROM likes');
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    header('Content-Type: application/json');
    echo json_encode($result);
    
?>