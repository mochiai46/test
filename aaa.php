<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:koko.database.windows.net,1433; Database = kokoDataBase", "koko-sql", "Admintest1");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "koko-sql", "pwd" => "Admintest1", "Database" => "kokoDataBase", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:koko.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
