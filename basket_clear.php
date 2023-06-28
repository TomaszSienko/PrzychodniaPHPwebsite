<?php
    session_start();
	if(!isset($_SESSION['is_loged']))
	{
		header('Location: index.php');
		exit();
	}
    unset($_SESSION['cart']);
	unset($_SESSION['price_total']);
    header('Location:basket.php');

?>