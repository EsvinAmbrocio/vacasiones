<?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=id11356523_vacasiones;charset=utf8','id11356523_vacasiones','(danilo)0308');
        //charser=utf8 esto funciona para mostrar todos los caracteres
    }
    catch(PDOException$e){
        echo "No se puede conectar a la base de datos Error:".$e;
    }
?>