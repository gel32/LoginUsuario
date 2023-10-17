<?php
   define('DB_SERVER', 'localhost:8889');
   define('DB_USERNAME', 'admin');
   define('DB_PASSWORD', 'admin123');
   define('DB_DATABASE', 'Clientes');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>