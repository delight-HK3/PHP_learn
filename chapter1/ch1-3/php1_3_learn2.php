<html>
	<head>
	</head>
	<body>
		<?php
			$x1 = -5985;
			$x2 = 0x11; 
			// 16진수 0x11은 아스키코드표를 보면 10진 17입니다.
			$x3 = 050;
			// 8진수 050은 아스키코드표를 보면 10진수 40입니다.
			$x4 = decbin(10);
			// 10을 2진수로 바꿔 1010을 x3에 저장했습니다.  

			var_dump($x1); // int(5985)
            		//var_dump함수는 변수의 자료형을 알려주는 함수입니다.
			echo "<br>";
			var_dump($x2); // int(17)
			echo "<br>";
			var_dump($x3); // int(40)
			echo "<br>";
			echo $x4; // 1010
		?>
	</body>
</html>