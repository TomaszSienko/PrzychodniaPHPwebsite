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
  <meta http-equiv= "X-Ua-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="plikcss.css">
  <script src="cart.js"></script>
  <title>Przychodnia Lekarska Online</title> 
  
</head>
	<body>
		<div class="title" style="text-align: center;">
			<h1 style="display: inline-block;">PRZYCHODNIA LEKARSKA ZDROWIE</h1>
			
		</div>
	
	<div class="header">	
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
		<div class="container">
			<div class="container_1">
	

 			
			<h2>Witaj na stronie głównej naszej Przychodni Zdrowie</h2>

			<p>SP. Z O.O. 45-332 OPOLE UL.Słowackiego 12/4</p>
			<h3>Otwarte od:</h3>
			<h4>Poniedziałek - Piątek </h4>
			<h3>7:00 - 17:00</h3>
			<p style="margin-top: 20px; text-align: center; margin-bottom: 20px;">
				Zapraszamy do zapoznania się z naszą ofertą ! 
			</p>
			</div>
			<div class="slide"></div>
			<div class="container_2">
				<img src="Images/Outside2-1.png" class="outside2-1" alt="outside">

				<h2 class="textinside">Zapoznajcie się z naszymi letnimi promocjami!</h2>
				<div class="container_3">
					<p>
						Wakacyjna oferta 2023 oferuje zniżki na większoszść badań laboratoryjnych oraz diagonstycznych.
					</p>
					<p>
						Przygotuj się na twoje wymarzone wakacje już teraz !
					</p>
				</div>
				
				
			</div>
			<div class="container_4">
				<h2>
					Rejestracja dla pacjentów ubezpieczonych w NFZ:
				</h2>
				<div class="container_4_1">	
					<h3>Rejestracja online</h3>
					<p>
						- Pacjenci mogą zarejestrować się online za pomocą formularza na stronie internetowej przychodni. W formularzu pacjenci podają swoje dane osobowe, numer PESEL, adres zamieszkania oraz preferowany termin wizyty. Po dokonaniu rejestracji, pacjenci otrzymują potwierdzenie rejestracji wraz z datą i godziną wizyty.
					</p>
					<h3>Rejestracja telefoniczna</h3>
					<p>
						- Pacjenci mogą zadzwonić do przychodni i dokonać rejestracji telefonicznie. Przyjazny i kompetentny personel obsługi przyjmie wszystkie niezbędne informacje i umówi pacjenta na wizytę w dogodnym dla niego terminie.
					</p>
					<h3>Rejestracja na miejscu</h3>
					<p>
						- Pacjenci mogą zarejestrować się na miejscu w recepcji przychodni. Przyjazna obsługa pomoże pacjentom w wypełnieniu formularza rejestracyjnego i umówi ich na wizytę w dogodnym dla nich terminie.
					</p>
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