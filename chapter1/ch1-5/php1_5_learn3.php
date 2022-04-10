<html>
	<head>
	</head>
	<body>
		<?php
			echo is_finite(10); // 1
			// 10은 유한하기 때문에 is_finite함수는 유한한 수는 1을 리턴하기 때문에
			// 1이 출력
			echo "<br>";
			echo is_finite(1.9e411); // 아무것도 출력안됨
			// 1.9e411은 is_finite함수에서 무한하다고 인정하여 아무것도 출력을 안함
			echo "<br>";
			echo is_infinite(10); // 아무것도 출력안됨
			// is_finite함수와는 반대로 유한하면 아무것도 출력을 안함
			echo "<br>";
			echo is_infinite(1.9e411); // 1
			// is_finite함수와는 반대로 무한하면 1을 출력
		?>
	</body>
</html>