<!DOCTYPE html>
<html>
	<body>
        <?php
            class mart{ // mart 클래스 선언
                function __construct(){ 
                // 생성자를 선언, 객체를 생성하면 제일먼저 실행
                    echo("construct 출력<br>");
                    // "construct 출력" 메세지 출력
                }
            }
        	$cash = new mart(); // 객체생성
	?>
	</body>
</html>
