<?php
    
    session_start();
	if((isset($_SESSION['is_loged']))&&($_SESSION['is_loged']==true))
	{
		header('Location:menu.php');
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
  <link rel="stylesheet" href="test.css">
  <title>Przychodnia Lekarska Online</title> 
  
</head>
	<body>


		<div class="header" style=" position:relative; height:96vh">
			<main>
				<div class="title_1">
					<h1>PRZYCHODNIA LEKARSKA ZDROWIE</h1>
				</div>
					<div class="logon_screen">
							

						<img src="Images/icon.ico" class="logo-img" alt="icon">
						<h4>LOGOWANIE DO SYSTEMU</h4>
						<form action="logon.php" method="post">
							<input type="text" name="login" placeholder="Wpisz swój login"  />
							<input type="password" name="password" placeholder="Wpisz swoje hasło" />

					
							<button type="submit" class="button" style="margin-left: 0px;" >Zaloguj</button>
						
						</form>
						<?php
							if(isset($_SESSION['error'])) echo $_SESSION['error'];


						?>
</div>
				</div>
			</main>
	
		</div>




	<footer class="footer_1">
		<h4 >Tomasz Sieńko    s103238</h4>
		<p>Informatyka Niestacjonarne  Rok 2  Grupa 2</p>
	 </footer>

 
 </body>

</html>