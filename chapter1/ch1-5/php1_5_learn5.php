<html>
	<head>
	</head>
	<body>
		<?php
			$x = 5985;
			echo $x."<br>";
			var_dump(is_numeric($x)); // bool(true) 출력
			echo "<br><br>";

			$x = "5985"; // 문자열이라해도 문자열이 숫자로 구성되어있으면 숫자로 취급
			echo $x."<br>";
			var_dump(is_numeric($x)); // bool(true) 출력
			echo "<br><br>";

			$x = "59.85" + 100; // 159.85
			echo $x."<br>";
			var_dump(is_numeric($x)); // bool(true) 출력
			echo "<br><br>";

			$x = "Hello"; // Hello
			echo $x."<br>";
			var_dump(is_numeric($x)); // bool(false)) 출력
			echo "<br><br>";
		?>
	</body>
</html>