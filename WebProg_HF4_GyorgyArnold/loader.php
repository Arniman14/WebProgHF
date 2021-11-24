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
spl_autoload_register(/**
 * @throws Exception
 */ function ($className) {
    $parts = explode('\\', $className);
    $file = end($parts) . '.php';
    if(file_exists($file)) {
        include $file;
    } else {
        throw new Exception("Unable to load $file");
    }
});
    ?>
</html>
