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
		<div class="container" style="overflow: auto;">
			
                <h1 style="margin-top: 2%; font-size:x-large">DASHBOARD</h1>
				<div class ="slide"></div>
                <div class="dash_1">
					
						<div class="dash_2">
							<button class="button_on_dash" onclick="location.href='new_visit.php'"><img src="Images/doctor.png" class="btn-img" alt="visit"><span style="margin-top:6%;">Umów wizyte</span></button>
						</div>
						<div class="dash_2">
							<button class="button_on_dash" ><img src="Images/medical-invoice.png" class="btn-img" alt="test"><span style="margin-top:6%;">Moje</span><span style="margin-top:6%;">Recepty</span></button>
						</div>
						<div class="dash_2">
							<button class="button_on_dash" onclick="location.href='laboratory.php'"><img src="Images/Medicine.png" class="btn-img" alt="test2"><span style="margin-top:6%;">Badania</span><span style="margin-top:6%;">laboratoryjne</span></button>
						</div>
						<div class="dash_2">
							<button class="button_on_dash" onclick="location.href='my_history.php'"><img src="Images/business-card.png" class="btn-img" alt="job_med"><span style="margin-top:6%;">Moje wizyty</span></button>
						</div>
						<div class="dash_2">
							<button class="button_on_dash" onclick="location.href='price_list.php'"><img src="Images/budget.png" class="btn-img" alt="price_list"><span style="margin-top:6%;">Cennik</span></button>
						</div>
						<div class="dash_2">
							<button class="button_on_dash"><img src="Images/browser.png" class="btn-img" alt="setting"><span style="margin-top:6%;">Ustawienia Profilu</span></button>
						</div>
						<div class="dash_2">
							<button class="button_on_dash" onclick="location.href='//medicept.pl/'"><img src="Images/call.png" class="btn-img" alt="phonecall"><span style="margin-top:6%;">Teleporada</span></button>
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