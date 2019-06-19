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
					<h1>Генерируем пароль</h1>

					<div class="box">
						<form method="post">
							<input type="text" name="number" value="10">
							<input type="submit" value="Генерировать">
							<form><br><br>
							<?php
							  // Параметр $number - сообщает число 
							  // символов в пароле
							  echo generate_password(intval($_POST['number']));

							  function generate_password($number)
							  {
							    $arr = array('a','b','c','d','e','f',
							                 'g','h','i','j','k','l',
							                 'm','n','o','p','r','s',
							                 't','u','v','x','y','z',
							                 'A','B','C','D','E','F',
							                 'G','H','I','J','K','L',
							                 'M','N','O','P','R','S',
							                 'T','U','V','X','Y','Z',
							                 '1','2','3','4','5','6',
							                 '7','8','9','0','.',',',
							                 '(',')','[',']','!','?',
							                 '&','^','%','@','*','$',
							                 '<','>','/','|','+','-',
							                 '{','}','`','~');
							    // Генерируем пароль
							    $pass = "";
							    for($i = 0; $i < $number; $i++)
							    {
							      // Вычисляем случайный индекс массива
							      $index = rand(0, count($arr) - 1);
							      $pass .= $arr[$index];
							    }
							    return $pass;
							  	}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="footer">

	Copyright &copy; Galkin Andrey
</div>


</body>
</html>