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
    $login = $_POST['login'];
    $password =$_POST['password'];
    
    $sql = "SELECT * FROM konta WHERE Login='$login' AND Haslo='$password'";
    if ($result = @$connection->query($sql))
    {
        $user_count = $result->num_rows;
        if($user_count>0)
        {
            $tab = $result->fetch_assoc();
            $_SESSION['is_loged']=true;
            $_SESSION['id']=$tab['id_konta'];
            $_SESSION['user'] = $tab['Imie'];

            unset($_SESSION['error']);
            $result->close();
            header('Location:menu.php');
        }
        else{

            $_SESSION['error']='<span style="color:red">Nieprawidłowy login lub hasło!</span>';
            header('Location:index.php');

        }

    }

    $connection->close();
    }
    
?>