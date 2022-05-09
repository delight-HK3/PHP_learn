<!DOCTYPE html>
<html>
	<body>
		<?php
			var_dump(is_float(10.13)); // bool(true)
			// 10.13은 실수타입 이기 때문에 true출력
			echo "<br>";
			var_dump(is_float(9)); // bool(false)
			// 9는 정수타입 이기 때문에 false출력
			echo "<br>";
			var_dump(is_double(10.13)); // bool(true)
			// 10.13은 실수타입 이기 때문에 true출력
			echo "<br>";
			var_dump(is_double(9)); // bool(false)
			// 9는 정수타입 이기 때문에 false출력
		?>
	</body>
</html>
