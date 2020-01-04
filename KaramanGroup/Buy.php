<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Satın Al</title>
	<link rel="stylesheet" type="text/css" href="Karaman.css">
</head>

<body>
<div class="logo"><a href="Karaman.html"><img src="isim.png"></a></div>

<form method="post" action="">
	<p style="color: white; font-size: 20px; background-color: dimgray;"><strong>Lütfen iletişim bilgilerinizi giriniz</strong></p>
	<input type="text" placeholder="İsim" name="name">
	<input type="surname" placeholder="Soyad" name="surname">
	<input type="phone" placeholder="Telefon Numarası(5**)" name="phone">
	

	<select name="cars">
    	<option value="free">Model Seçiniz</option>
    	<option value="Volvo S90">Volvo S90</option>
    	<option value="Volvo XC90">Volvo XC90</option>
    	<option value="Volvo XC40">Volvo XC40</option>
    	<option value="Mercedes-Benz A200">Mercedes-Benz A200</option>
    	<option value="Benz S Class">Mercedes-Benz S Class</option>
    	<option value="Mercedes-Benz G Class">Mercedes-Benz G Class</option>
    </select>
	
	<button type="submit" name="submit">Gönder</button>
</form>

<div class="about" style="color: white">
<p style="color: white">©2019 Karaman Group All Rights Reserved</p>
</div>
</body>

<?php
$link=mysqli_connect('localhost','root','');
mysqli_select_db($link,'customer');
if (isset($_POST["submit"])) 
{
	$name=$_POST['name'];
	$surname=$_POST['surname'];
	$phone=$_POST['phone'];
	$cars=$_POST['cars'];
	$inserer=mysqli_query($link,"INSERT INTO musteri VALUES ('$name','$surname','$phone','$cars')");
}
?>
</html>