<?php
$database = 'mysql:host=database:3306;dbname=docker;charset=utf8mb4';
return new PDO($database, username:'docker', password:'docker');