<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
	
	</head>
	<body>

	<div class="content">
		<?php
		include "menu.php";
		?>

		<div class="contentWrap">
			<div class="content">
				<div class ="center">

				<h1>Игра в загадки</h1>

				<div class="box">

				<?php

					if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3'])){

					
					$userAnswer = $_GET["userAnswer1"];
					
					if($userAnswer == "Чиполлино" || $userAnswer == "чиполлино"){
						$score++;
					}
					$userAnswer = $_GET["userAnswer2"];
					
					if($userAnswer == "Дюймовочка" || $userAnswer == "дюймовочка"){
						$score++;
					}
					$userAnswer = $_GET["userAnswer3"];
					
					if($userAnswer == "шахматный" || $userAnswer == "мертвый"){
						$score++;
					}
					echo "Вы угадали " . $score . " загадок";
				}
				?>
				<form method ="GET">
				<p>Он в Италии родился,Он своей семьёй гордился.Он не просто мальчик—лук,Он надёжный, верный друг.</p>
				<input type="text" name="userAnswer1">

				<p>Родилась у мамы дочка из прекрасного цветочка. Хороша, малютка просто! С дюйм была малышка ростом.Если сказку вы читали, Знаете, как дочку звали.</p>
				<input type="text" name="userAnswer2">

				<p>Какой конь не ест овса?</p>
				<input type="text" name="userAnswer3">

				<br>
				<input type="submit" value="Ответить" name="">
				</form>
			</div>
		</div>
	</div>
</div>


<div class="footer">

	Copyright &copy; Galkin Andrey
</div>


</body>
</html>