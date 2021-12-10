<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //1.
            /date('n');
            if(date('n') == 1){
                echo "Ma hetfo";
            }
            else if(date('n') == 2){
                echo "Ma kedd";
            }
            else if(date('n') == 3){
                echo "Ma szerda";
            }
            else if(date('n') == 4){
                echo "Ma csutortok";
            }
            else if(date('n') == 5){
                echo "Ma pentek";
            }
            else if(date('n') == 6){
                echo "Ma szombat";
            }
            else if(date('n') == 0){
                echo "Ma vasarnap";
            }*/
        ?>
        <?php
            //2.
            /*function osszeadd(int $a, int $b) {
                return $a + $b;
            }
    
            function kivont(int $a, int $b) {
                return $a - $b;
            }
    
            function szoroz(int $a, int $b) {
                return $a * $b;
            }
    
            function oszt(int $a, int $b) {
                if ($b != 0) {
                    return $a / $b;
                } else {
                    return 0;
                }
            }
    
            $x = 3;
            $y = 12;
            echo osszeadd($x, $y) . "<br>" . kivont($y, $x) . "<br>" . szoroz($y, $x) . "<br>" . oszt($y, $x) . "<br>";
            */
            <?php 
            //3.
            /*echo ("<br>");
            function OsztoTabla($szam){
                for ($i = 1; $i <= 10; $i++) {
                    $oszt = $i*$szam;
                    echo "$oszt : $szam = " . ($oszt / $szam) . "<br>";
                }
            }
            OsztoTabla(1);
            echo ("<br>");
            OsztoTabla(2);
            echo ("<br>");
            OsztoTabla(3);
            echo ("<br>");
            OsztoTabla(4);
            echo ("<br>");
            OsztoTabla(5);
            echo ("<br>");
            OsztoTabla(6);
            echo ("<br>");
            OsztoTabla(7);
            echo ("<br>");
            OsztoTabla(8);
            echo ("<br>");
            OsztoTabla(9);
            echo ("<br>");
            OsztoTabla(10);*/
        ?>
    </body>
</html>