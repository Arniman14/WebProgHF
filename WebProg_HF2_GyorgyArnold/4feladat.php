<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
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
        atalakit($szinek, 'kisbetus');
        ?>
    </body>
</html>
