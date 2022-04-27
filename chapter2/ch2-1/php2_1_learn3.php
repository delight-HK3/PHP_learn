<html>
	<head>
	</head>
	<body>
		<?php
			class test {
				public $num1; // property
				public $str1; // property

				function set_info($num1, $str1){
					$this->num1 = $num1;
					$this->str1 = $str1;
				}
				function get_str(){
					return $this->str1;
				}
				function get_num(){
					return $this->num1;
				}
			}
			$Test = new test();
			var_dump($Test instanceof test); // true
			// $Test는 test클래스에서 생성된 객체이기 때문에 true
		?>
	</body>
</html>
