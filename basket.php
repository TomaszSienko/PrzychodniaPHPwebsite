<?php
    session_start();
	if(!isset($_SESSION['is_loged']))
	{
		header('Location: index.php');
		exit();
	}
    class ShoppingCart {
        private $items = [];
        
        public function addToCart($product, $quantity) {
          if (isset($this->items[$product])) {
            $this->items[$product] += $quantity;
          } else {
            $this->items[$product] = $quantity;
          }
        }

        public function removeFromCart($product, $quantity) {
            if (isset($this->items[$product])) {
              $this->items[$product] -= $quantity;
            } else {
              
            }
          }

        public function getCartContents() {
          return $this->items;
        }
      }


      if(isset($_SESSION['cart']))
      {
        
      }else
      {
      $_SESSION['cart'] = new ShoppingCart();
      }
      if(isset($_POST['nazwa_badania']))
      {
        if($_POST['ilosc']>0)
        {
        $_SESSION['cart']->addToCart($_POST['nazwa_badania'], $_POST['ilosc']);
        $_SESSION['price_total']=$_SESSION['price_total']+$_POST['cena']*$_POST['ilosc'];
        unset($_POST['nazwa_badania']);
        header('Location:laboratory.php');
        }
        else{
            header('Location:laboratory.php');
        }
      }else
      {
    
      }
?>


<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="plikcss.css">
  <link rel="stylesheet" href="test.css">
  <link rel="stylesheet" href="basket.css">
  <title>Przychodnia Lekarska Online</title>
  <script src="increment.js"></script>
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
			
                <h1 style="margin-top: 2%; font-size:x-large">KOSZYK</h1>
				<div class ="slide"></div>
                <div class ="container_1" style="background-color: rgba(131, 123, 248, 0.836);; border: 1px solid rgb(233, 227, 227); padding:3%;">
                <div class ="container_1" style="margin:0; margin-left:30%; align-self:center;width:600px; background-color: rgba(97, 87, 243, 0.836); ; border: 1px solid rgb(233, 227, 227); padding:1%;">

                <?php
echo "<h3>Zawartość koszyka: </h3><br>";
$cartContents = $_SESSION['cart']->getCartContents();

foreach ($cartContents as $product => $quantity) {
    echo<<<HTML
        <div style="border: 1px solid rgb(233, 227, 227);background-color: rgba(131, 123, 248, 0.836); padding:2%;">
        <h4 style='margin:0.5%;'>$product: </h4>
        <input type="text" name="ilosc" class="quantity-input" style="width:20px;" value=$quantity>

        <button type="button" onclick='decrement(this)'>-</button>
        <button type="button" onclick='increment(this)'>+</button>

        </div>
HTML;

}
echo<<<HTML
<button class="button" style="margin-top:5%;">Zapisz</button>

HTML;
?>
                
</div>
  <div class ="container_1" style="margin:0; margin-left:30%; align-self:center;width:600px;background-color: rgba(97, 87, 243, 0.836) ; border: 1px solid rgb(233, 227, 227); padding:1%;">
  <h3 style='margin:0'>Cena: </h3><br>
  <?php
  if(isset($_SESSION['price_total']))
  {
  echo "<h4 style='margin:0' >".$_SESSION['price_total']." "."ZŁ</h4>";
  }else
  {
    echo"<h4> Brak wybranych produktów</h4>";
  }
  ?>
  </div>


        <div class="container_1" style="margin-left: 8%;">
        <button class="button" style="margin-top:5%; background-color:LightGreen; color:FloralWhite">Akceptuj Zamówienie</button>
        <button class="button" style="margin-top:5%; background-color:LightCoral; color:FloralWhite" onclick="location.href='basket_clear.php'">Wyczyść koszyk</button>
        </div>  
      </div>
    </div>
	<footer>
		<h4 >Tomasz Sieńko    s103238</h4>
		<p>Informatyka Niestacjonarne  Rok 2  Grupa 2</p>
	 </footer>
 </body>
 
</html>