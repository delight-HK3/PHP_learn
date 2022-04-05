<html>
	<head>
	</head>
	<body>
		<?php
			$arraytest = array("phpArray1","phpArray1",10);
			// 다른 언어들과 다르게 php 배열에는 자료형 관계없이 배열에 내용을 넣는게 가능합니다.
			var_dump($arraytest);
            		// 결과 : array(3) { [0]=> string(9) "phpArray1" [1]=> string(9) "phpArray1" [2]=> int(10) }
			echo "<br>";
			var_dump($arraytest[0]); // 결과 : string(9) "phpArray1"
			// 배열내 들어있는 기본형의 종류와 크기를 알고싶으면 
			// var_dump($<배열명>[index]);
			// 이렇게 작성하면 됩니다.
			echo "<br>";
			var_dump($arraytest[2]); // 결과 : int(10)
		?>
	</body>
</html>