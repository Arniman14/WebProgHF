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
        $napok = array(
            "HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
            "EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
            "DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
        );
        foreach ($napok as $kulcs => $ertek) {
            echo "$kulcs: ";
            foreach ($ertek as $nap) {
                print "$nap, ";
            }
            print "<br>";
        }
        ?>
    </body>
</html>
