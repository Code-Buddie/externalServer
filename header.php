<?php

require "./config.php";

try {
    $connection = new PDO($dsn, $username, $password, $options);

    $stmt = $connection->query("SELECT * FROM `users`");
    $row_count = $stmt->rowCount();

    $sttmt = $connection->query("SELECT * FROM `returningUsers`");
    $returning_row_count = $sttmt->rowCount();

} catch (PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}

?>

<?php

$url = $_SERVER['REQUEST_URI'];
$downloadLink = '';
if (strpos($url, 'member') !== false) {
    $downloadLink = "download";
}
if (strpos($url, 'return') !== false) {
    $downloadLink = "download_return";
}

?>

<?php
session_start();
$userstr = ' Guest';

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $loggedin = true;
    $userstr = "$user";
} else {
    $loggedin = false;
}

?>

