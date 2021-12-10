<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
        //1.
        /*$data = array(5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200');
        foreach ($data as $value){
            if (is_numeric($value)){
                echo gettype($value) . " " . "Igen" . "<br>";
            }
            else{
                echo gettype($value) . " " . "Nem" . "<br>";
            }
        }*/
        //2.
        /*$orszagok = array( " Magyarország "=>" Budapest", " Románia"=>" Bukarest", "Belgium"=> "Brussels", "Austria" => "Vienna", "Poland"=>"Warsaw");

            foreach ( $orszagok as $orsz => $varos )
                {
                    print "$orsz fővárosa $varos<br>";
                }
        */
        //3.
        /*$napok = array(
            "HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
            "EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
            "DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
        );
        foreach ($napok as $kulcs =>$ertek){
            echo $kulcs.": ";
            foreach($ertek as $nap){
                echo $nap.", ";
            }
            echo"<br>";
        }
        */
        //4.
        $szinek = array('A' => 'Kek', 'B' => 'Zold', 'C' => 'Piros');

        function atalakit($tomb, $meret) {
            if ($meret == 'nagybetus') {
                foreach ($tomb as $kulcs => $ertek) {
                    echo strtoupper($ertek) . " ";
                }
            } else if ($meret == 'kisbetus') {
                foreach ($tomb as $kulcs => $ertek) {
                    echo strtolower($ertek) . " ";
                }
            } else {
                echo "nem helyes meret";
            }
        }

        atalakit($szinek, 'nagybetus');
        echo"<br>";
        atalakit($szinek, 'kisbetus');

    ?>
    </body>
</html>