<?php
$databasePath = 'E:\\wamp\\www\\mdb\\dbUser.mdb'; // to be used in wamp
$databasePath = 'C:\xampp\htdocs\mdb_crud\dbUser.mdb';// to be used in xampp
// $dsn = 'odbc:Driver={Microsoft Access Driver (*.mdb,*.accdb)};Dbq=C:\xampp\htdocs\mdb_crud\dbUser.mdb';
// $username = ''; // Your database username (if applicable)
// $password = '5s6rDB*&6'; // Your database password (if applicable)

try {
    $pdo = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=$databasePath; uid=; pwd=5s6rDB*&6");
    echo "Connected to the database successfully.";
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}
