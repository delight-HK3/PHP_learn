<!DOCTYPE html>
<html>
	<body>
        <?php
            class mart{ // mart 클래스 선언
            	public $fish; // public 타입 변수 $fish 선언
                public $meet; // public 타입 변수 $fish 선언
                public $vegetable; // public 타입 변수 $fish 선언
                
                function __construct($fish, $meet, $vegetable){ 
                // 생성자를 선언, 객체를 생성하면 제일먼저 실행
                	$this->fish = $fish; // 입력된 생성자를 멤버변수 $fish에 저장
                    $this->meet = $meet; // 입력된 생성자를 멤버변수 $meet에 저장
                    $this->vegetable = $vegetable;
                    // 입력된 생성자를 멤버변수 $vegetable에 저장
                    echo("construct 마침<br>");
                    // "construct 출력" 메세지 출력
                } // construct end 
                function sale(){
                	return array( // 배열 형태로 리턴
                    		$this->fish, // 멤버변수 $fish
                        	$this->meet, // 멤버변수 $meet
                        	$this->vegetable // 멤버변수 $vegetable
                    	);// array end
                } // sale function end
            } // mart class end
            
            $cash = new mart("beef","salmon","potato"); 
	    // 객체 cash를 mart형으로 생성및 선언한 후 초기화
            list($food1,$food2,$food3) = $cash->sale(); // 리턴된 배열을 list에 저장
           	
            echo $food1."<br>".$food2."<br>".$food3;
            // beef, salmon, potato에 저장되어있는 값을 출력
	?>
	</body>
</html>
