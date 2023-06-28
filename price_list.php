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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
  <script src="html2canvas.js"></script>
</head>
	<body>
		<div class="title">
			<h1>PRZYCHODNIA LEKARSKA ZDROWIE</h1>
			
		</div>
	
	<div class="header_dash" style="height:80vh;">	
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
			
                <h1 style="margin-top: 2%; font-size:x-large">Cennik usług medycznych</h1>
				<div class ="slide"></div>
                <img src="Images/budget.png" class="btn-img" style="margin-top: 30px;" alt="price_img">
                <div class="dash_1" style="margin-top: 1%;">
					
					<div class="prices_view">
                        <table id="price_table">
                            
                            <thead>
                              <tr>
                                <th style="background-color: blueviolet;">Usługa</th>
                                <th style="background-color: blueviolet;">Cena</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Badanie krwi</td>
                                <td>50 zł</td>
                              </tr>
                              <tr>
                                <td>Wizyta u lekarza rodzinnego</td>
                                <td>120 zł</td>
                              </tr>
                              <tr>
                                <td>Badanie moczu</td>
                                <td>30 zł</td>
                              </tr>
                              <tr>
                                <td>Porada specjalisty</td>
                                <td>150 zł</td>
                              </tr>
                            </tbody>
                          </table>
    
                    </div>
                    <button class="button" id="download-btn" style="margin-left: 47%; margin-bottom: 2%;">Pobierz PDF</button>
                    <script src="price_to_pdf.js"></script>
                </div>
				
        </div>
    </div>
	<footer>
		<h4 >Tomasz Sieńko    s103238</h4>
		<p>Informatyka Niestacjonarne  Rok 2  Grupa 2</p>
	 </footer>
     
     
 </body>
 
</html>