<?php
  
    session_start();
    require_once "connection.php";

    $connection =@new mysqli($host, $db_user, $db_password, $db_name);

    if ($connection->connect_errno!=0)
    {
        echo "Error: ".$connection->connect_errno."Opis: ".$connection->connect_error;
    }
    else
    {
    $id = $_POST['id_wizyty'];


   $sql = "DELETE FROM Wizyty 
   WHERE id_wizyty='$id' ;";
    if ($connection->query($sql) === TRUE) {
        unset($_SESSION['CancelInfo']);
        header('Location: my_history.php');
        $_SESSION['CancelInfo']='<h2 style="color:green">Usunięto Wizyte!</h2>';
        
        exit;
      } 
        
        
      
    }
    
?>