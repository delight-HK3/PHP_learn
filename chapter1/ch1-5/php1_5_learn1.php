<html>
	<head>
	</head>
	<body>
		<?php
			var_dump(is_int(10)); // bool(true)
			// 10은 정수타입 이기 때문에 true가 출력
			echo "<br>"; 
			var_dump(is_integer(10.10)); // bool(false)
			// 10은 실수타입 이기 때문에 false가 출력
			echo "<br>";
			var_dump(is_long(10)); // bool(true)
			// 10은 정수타입 이기 때문에 true가 출력
			echo "<br>";
			var_dump(is_long(10.10)); // bool(false)
			// 10은 실수타입 이기 때문에 false가 출력
		?>
	</body>
</html>