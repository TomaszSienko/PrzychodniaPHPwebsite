<?php
    session_start();
    
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
		<div class="container" style="overflow: auto; margin-left:0px;">
			
                <h1 style="margin-top: 2%; font-size:x-large">Moje Wizyty</h1>
				<div class ="slide"></div>
                
                <div class="container" style="overflow: auto;">
                <div class="prices_view">
                        
                <h4 style="margin-top: 1%; font-size:x-large">Odbyte Wizyty</h4>
                          <?php

                            require_once "connection.php";

                            $connection =@new mysqli($host, $db_user, $db_password, $db_name);
                            
                            
                            if ($connection->connect_errno!=0)
                            {
                                echo "Error: ".$connection->connect_errno."Opis: ".$connection->connect_error;
                            }
                            else
                            $id = $_SESSION['id'];
                            $sql = "SELECT lekarz.Imie, lekarz.nazwisko, wizyty.data, wizyty.godzina,wizyty.id_wizyty
                            FROM pacjent
                            JOIN wizyty ON pacjent.id_pacjenta = wizyty.id_pacjenta
                            JOIN lekarz ON wizyty.id_lekarza = lekarz.id_lekarza
                            WHERE pacjent.id_pacjenta = '$id'";
                            $result = $connection->query($sql);

                            
                                    if ($result->num_rows > 0) {
                                        $timestampDzisiejszejDaty = strtotime(date("Y-m-d"));

                                        echo "<table>";
                                        echo<<<END
                                        <tr><th style="background-color: blueviolet;">Imie lekarza</th><th style="background-color: blueviolet;">Nazwisko lekarza</th><th style="background-color: blueviolet;">Data</th><th style="background-color: blueviolet;">Godzina</th></tr>
END;
                                        while ($row = $result->fetch_assoc()) {
                                            $timestampPrzechowywanejDaty = strtotime($row["data"]);
                                            if ($timestampPrzechowywanejDaty < $timestampDzisiejszejDaty)
                                            {
                                            echo "<tr>";
                                            echo "<td>" . $row["Imie"] . "</td>";
                                            echo "<td>" . $row["nazwisko"] . "</td>";
                                            echo "<td>" . $row["data"] . "</td>";
                                            echo "<td>" . $row["godzina"] . "</td>";
                                            echo "</tr>";
                                            }
                                        }

                                        echo "</table>";
                                    } else {
                                        echo "Brak danych do wyświetlenia.";
                                    }


echo<<<END
<h4 style="margin-top: 3%; font-size:x-large">Przyszłe Wizyty zarezerwowane</h4>
END;
                                    $result = $connection->query($sql);
                                    if ($result->num_rows > 0) {
                                        $timestampDzisiejszejDaty = strtotime(date("Y-m-d"));

                                        echo "<table>";
                                        echo<<<END
                                        <tr><th style="background-color: blueviolet;">Imie lekarza</th><th style="background-color: blueviolet;">Nazwisko lekarza</th><th style="background-color: blueviolet;">Data</th><th style="background-color: blueviolet;">Godzina</th><th style="background-color: blueviolet;"></th></tr>
                                    END;
                                        while ($row1 = $result->fetch_assoc()) {
                                            $timestampPrzechowywanejDaty = strtotime($row1["data"]);
                                            if ($timestampPrzechowywanejDaty >= $timestampDzisiejszejDaty)
                                            {
                                            echo "<tr>";
                                            echo "<td>" . $row1["Imie"] . "</td>";
                                            echo "<td>" . $row1["nazwisko"] . "</td>";
                                            echo "<td>" . $row1["data"] . "</td>";
                                            echo "<td>" . $row1["godzina"] . "</td>";
                                            //$id_wizyty = $row1["id_wizyty"];
                                            echo<<<HTML
                                             <form method="POST" action="cancel_visit.php">
                                             <input type="hidden" name="id_wizyty" value='{$row1["id_wizyty"]}'/>
                                             <td><button class="button" type="submit" name="submit_button"> Anuluj </button></td>
                                             </form>
                                             HTML;
                                            echo "</tr>";
                                            }
                                        }
                                        echo "</table>";
                                    } else {
                                        echo "Brak danych do wyświetlenia.";
                                    }

?>
                    </div>

                    <?php
							if(isset($_SESSION['CancelInfo'])) 
                            {echo $_SESSION['CancelInfo'];
                            }
						?>

                </div>
                
				
        </div>
    </div>
	<footer>
		<h4 >Tomasz Sieńko    s103238</h4>
		<p>Informatyka Niestacjonarne  Rok 2  Grupa 2</p>
	 </footer>
 </body>
 
</html>