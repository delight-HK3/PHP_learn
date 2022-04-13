<html>
    <head>
    </head>
    <body>
        <?php
            define("Test", "define test");
            
            function myTest(){
                echo Test;
                // define은 전역이기 때문에 함수내부에서도 사용이 가능
            }
            myTest();
            // myTest() 함수를 호출하면 define test가 화면에 출력 
        ?>
    </body>
</html>