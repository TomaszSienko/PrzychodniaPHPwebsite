
<?php
    session_start();
    require_once "connection.php";
    $id_lekarza = $_POST['id_lekarza'];
	if(!isset($_SESSION['is_loged']))
	{
		header('Location: index.php');
		exit();
	}
?>


<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="plikcss.css">
  <link rel="stylesheet" href="test.css">
  <title>Przychodnia Lekarska Online</title>
    
</head>
	<body>
		<div class="title">
			<h1>PRZYCHODNIA LEKARSKA ZDROWIE</h1>
			
		</div>
	
	<div class="header_dash">	
    <div class="side-nav">
			<a href="menu.php" class="logo" style="margin-bottom:2%;">
				<img src="Images/icon.ico" class="logo-img" alt="icon">
			</a>
			<ul class="nav-links" style="float: right; font-family: Arial, sans-serif; margin-bottom:50%; color:white;">
				
				<?php				
					echo "<p><h4 style='margin-bottom:2%;margin-left:16px;text-align:center;'>Witaj ".$_SESSION['user']." !</h4></p>";
				?>
				<p><button class="button_on_dash" style="margin-left:35%; padding:0;" onclick="location.href='basket.php'"><img src="Images/shopping-basket.png" class="btn-img" style="width:50px;" alt="visit"><span style="margin-top:6%;"></span></button></p>

				<p><button class="button" style="margin-left:16px;" onclick="location.href='logout.php'">Wyloguj się</button></p>
				
			</ul>
			<ul class="nav-links">
				<li><p><button class="button" onclick="location.href='dashboard.php'">Dashboard</button></p></li>
				<li><p><button class="button" onclick="location.href='doctors.html'">Lekarze</button></p></li>
				<li><p><button class="button" onclick="location.href='about.html'">O nas</button></p></li>
				<li><p><button class="button" onclick="location.href='f&q.html'">F&Q</button></p></li>
			</ul>
			
			<div class="nav-info">
				<p>Prawa autorskie © 2023 Przychodnia ZDROWIE</p>
			</div>
		</div>
		<div class="container" >
			
                <h1 style="margin-top: 2%; font-size:x-large">Nowa wizyta</h1>
				<div class ="slide"></div>
                
                <div class="container" style="overflow: auto;">
                <div class="logon_screen">     

<?php 
        $connection =@new mysqli($host, $db_user, $db_password, $db_name);
                            
                            
        if ($connection->connect_errno!=0)
        {
            echo "Error: ".$connection->connect_errno."Opis: ".$connection->connect_error;
        }
        else
        $sql = "SELECT * FROM lekarz WHERE id_lekarza = '$id_lekarza'";
        $result = $connection->query($sql);
                if ($result->num_rows > 0)
                {
                    $tab = $result->fetch_assoc();
                    echo "<h3>Wybrano lekarza: ";
                    echo $tab['Imie']." ".$tab['Nazwisko']."</h3>";

                }
                else
                {
                    echo "BŁĄD!!!";

                }                    
					
?>
        <form action="add_new_visit.php" method="post">
                            <h5>Wybierz date:</h5>
							<input type="date" name="date" placeholder="WYBIERZ DATE" style="background-color: rgba(108, 139, 240, 0.582); width:50%; border: 1px solid rgb(233, 227, 227);" />
                            <h5>Wybierz godzine:</h5>
							<input type="time" name="time" placeholder="WYBIERZ GOZDINE" style="background-color: rgba(108, 139, 240, 0.582); width:50%; border: 1px solid rgb(233, 227, 227);" /><br />

                            <?php echo<<<END
                             <input type="hidden" name="id_lekarza" value=$id_lekarza/>
END;?>
							<button type="submit" class="button" >Zatwierdź nową wizyte</button>
                            
						</form>
        </div>
                
				
        </div>
    </div>
            </div>
    <footer>
		<h4 >Tomasz Sieńko    s103238</h4>
		<p>Informatyka Niestacjonarne  Rok 2  Grupa 2</p>
	 </footer>  
 </body>
 
</html>