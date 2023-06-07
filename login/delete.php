<?php
include 'lavageesManager.php';
 
if(isset($_GET['id'])){

    $lavageesManager =  new lavageesManager();
    $id = $_GET['id'];
    $lavageesManager->deletelavagee($id);
    
    header('location:admin.php');
}

?>