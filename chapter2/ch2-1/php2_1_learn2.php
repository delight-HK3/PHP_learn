<!DOCTYPE html>
<html>
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
			$Test = new test(); // $Test 객체 선언
			$Test->set_info(1, "test");// $num1, $str1에 1, 문자열 test 저장
			echo "str1 = ".$Test->get_str()."<br>"; // get_str() 함수를 통해 str1의 내용 호출
			echo "num1 = ".$Test->get_num(); // get_num() 함수를 통해 num1의 내용 호출
		?>
	</body>
</html>
