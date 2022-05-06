<!DOCTYPE html>
<html>
	<body>
  	<?php
    	class test {
        	public $num1; // 클래스 변수 num1
            public $num2; // 클래스 변수 num2
            public $num3; // 클래스 변수 num3
            
      		function __construct($num1, $num2, $num3) {
     	   		$this->num1 = $num1;
                // class num1에 매개변수 num1을 저장
                $this->num2 = $num2;
                // class num2에 매개변수 num2을 저장
                $this->num3 = $num3;
                // class num3에 매개변수 num3을 저장
      		}// __construct end
            function add_num(){
            	echo $this->num1 + $this->num2 + $this->num3;
                // class num1, num2, num3에 저장되어있는 값을 리턴
            }
      		function __destruct() {
      			echo "num1 + num2 + num3 = ",$this->add_num();
                // 소멸자를 통해 문자열과 add_num()함수의 리턴 값을 출력
      		}// __destruct end
    	}// test class end
    	$apple = new test(3, 4, 5); 
        // $apple이름의 레퍼런스 변수 선언 및 test인스턴스를 저장
        // $apple레퍼런스 변수의 초기값을 3, 4, 5로 넣는다.
  	?>
	</body>
</html>
