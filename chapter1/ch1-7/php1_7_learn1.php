<!DOCTYPE html>
<html>
    <body>
        <?php
            define("TEST", "define test2");
            echo TEST."<br>";
            // PHP 7.3.0 버전 전에는 대소문자를 구분하지 않아도 
            // 되는 설정을 할 수 있었지만 PHP 7.3.0 이후에는 
            // 선언한 그대로 사용해야한다.
        ?>
    </body>
</html>
