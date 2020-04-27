<?php
session_start();

try {
    if($_SERVER['REQUEST_METHOD'] == 'GET') {

        if($_GET['endpoint'] == 'getAllShippers') {

            include('./../Handlers/shipperHandler.php');
            // $shipper = $_SESSION['shipper'];       /// THE ERROR IS HERE!!!! what key value is sent?!
            $result = getAllShippers();
            echo json_encode($result); 

        } else {
            throw new Exception('Not a valid endpoint', 501);
    }
    }
} catch(Exception $e) {
    echo json_encode(array('Message' => $e->getMessage(), 'status' => $e->getCode()));
}

    
   

?>