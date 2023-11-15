<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:html-formulardaten.database.windows.net,1433; Database = fragebogen_HTML", "s54177", "{your_password_here}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "s54177", "pwd" => "wATER6WINE20131}", "Database" => "fragebogen_HTML", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:html-formulardaten.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
