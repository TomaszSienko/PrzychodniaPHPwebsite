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
    $date = $_POST['date'];
    $time =$_POST['time'];
    $user_id = $_SESSION['id'];
    $doc_id = $_POST['id_lekarza'];
   $sql = "INSERT INTO WIZYTY (id_pacjenta, id_lekarza, data, godzina)
    VALUES ('$user_id', '$doc_id', STR_TO_DATE('$date', '%Y-%m-%d'), STR_TO_DATE('$time', '%H:%i'));";
    if ($connection->query($sql) === TRUE) {
        unset($_SESSION['InserInfo']);
        unset($_SESSION['error2']);
        header('Location: new_visit.php');
        $_SESSION['InserInfo']='<h3 style="color:green">Dodano Wizyte!</h3>';
        
        exit;
      } else {
        
        $_SESSION['error2'] = 'Wystąpił błąd podczas rejestracji. Spróbuj ponownie.';
      }
    }
    
?>