<html>
	<head>
	</head>
	<body>
		<?php
			class test {
				public $num1; // property
				public $str1; // property

				function set_info($num1, $str1){ // method
					$this->num1 = $num1;
					$this->str1 = $str1;
				}
				function get_str(){ // method
					return $this->str1;
				}
				function get_num(){ // method
					return $this->num1;
				}
			}
		?>
	</body>
</html>
