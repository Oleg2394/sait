<?php
 /* Здесь проверяется существование переменных */
  if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
 if (isset($_POST['name'])) {$name = $_POST['name'];}
 if (isset($_POST['email'])) {$email = $_POST['other'];}


 $address = "maczak94@mail.ru";


 $mes = "Тема: Заказ обратного звонка!\nТелефон: $phone\nИмя: $name";


$sub='Заказ с сайта'; 
$email='<imperatrica.ru>'; 
 $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>Спасибо за вашу заявку</title>
<meta name="generator">
<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700|Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/select2.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/global.css"/>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/validator.min.js"></script>
	<script src="js/select2.full.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/scripts.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script type="text/javascript" src="js2/libs/modernizr-2.6.1.min.js"></script>  
   <script type="text/javascript" src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
    	<section id="header">
		<div class="section-table">
			<div class="section-row">
				<div class="section-cell">
					<div class="section-center">
						<p class="logo">
							<img src="img/logo2.png" alt="logo">
						</p>
						<h1>Спасибо за вашу заявку<</h1>
						<p>Ваш персональный менеджер свяжется с вами в ближайшие время </p>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<style type="text/css">
body
{
   
   background: #EDF5F7 url(img/lebed4.jpg) top -70% center no-repeat;
   
}

<script type="text/javascript">
setTimeout('location.replace("/index.html")', 3000);
</script> 
</head>
</body>
</html>