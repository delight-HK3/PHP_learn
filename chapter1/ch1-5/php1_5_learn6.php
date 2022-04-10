<html>
	<head>
	</head>
	<body>
		<?php
			$flo = 4154.768;
			$flo_cast = intval($flo); // intval함수를 사용해 소수점 부분은 버리고 정수부분만 $int_cast에 저장시킵니다.
			echo $flo_cast."<br>"; // 4154

			// Cast string to int
			$flo = "1.768";
			$flo_cast = (int)$flo; // 소수점 부분은 버리고 정수부분만 $int_cast에 저장시킵니다.
			echo $flo_cast; // 1
		?>
	</body>
</html>