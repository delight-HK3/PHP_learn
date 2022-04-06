<html>
    <head>
    </head>
    <body>
        <?php
            echo strpos("Hello new world a w","new"); // 6
            // 문자열 내에서 같은 문자열이 있으면 문자의 위치를 반환 합니다.
            echo "<br>";
            echo strpos("Hello new world a w"," "); // 5
            // 공백으로 찾을 경우 가장 가까운 문자의 위치를 반환 합니다.
            echo "<br>";
            echo strpos("Hello new new world a w","new"); // 6
            // 문자열이 중복 될 경우 공백과 마찬가지로 가장 가까운 문자의 위치를 반환 합니다.
            echo "<br>";
            echo strpos("Hello new new world a w","test"); // 6
            // 찾는 문자가 없을 경우 false를 리턴합니다.
        ?>
    </body>
</html>