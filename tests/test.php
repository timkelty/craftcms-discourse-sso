<?php
$pdo = new PDO('mysql:host=db;dbname=database', 'username', 'password');
exit(var_dump($pdo));
