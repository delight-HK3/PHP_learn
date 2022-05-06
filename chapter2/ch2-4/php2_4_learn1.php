<!DOCTYPE html>
<html>
	<body>
  	<?php
    	class test {
      		public $num; // 클래스 변수
      		public $color; // 클래스 변수

      		function __construct($num, $color) {
        		$this->num = $num; 
            		// class num에 매개변수 num 저장
        		$this->color = $color;
                	// class num에 매개변수 num 저장
      		}// __construct end
      		function __destruct() {
      			for($i = 0; $i < $this->num; $i++){
                		echo "select color $this->color. <br>"; 
                    	// "select color red."를 세 번 출력
                	}// for end
      		}// destruct end
    	}// test class end
    	$apple = new test(3, "red"); 
        // $apple이름의 레퍼런스 변수 선언 및 test인스턴스를 저장
        // $apple레퍼런스 변수의 초기값을 3, "red"로 넣는다.
  	?>
	</body>
</html>
