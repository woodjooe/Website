<?php
    $pdo = new PDO('mysql:host=localhost;dbname=MTC_ENIS;charset=utf8', 'root', '');
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=MTC_ENIS;charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>