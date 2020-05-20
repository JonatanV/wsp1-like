<?php

    include '../includes/dbcon.php';

    $dbInstance = DbConnection::getInstance();
    $dbh = $dbInstance->getConnection();

    if ($_GET['all']) {
        $sth = $dbh->prepare('SELECT * FROM likes');
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($result);
    } else if (isset($_GET['id'])) {
        echo json_encode('route for fetching resource by id');
    }

    if(isset($_GET['id'])) {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

        echo json_encode($id);
    } 


    
?>