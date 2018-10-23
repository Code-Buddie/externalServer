<?php

$dbhost = 'localhost'; // Unlikely to require changing
$dbname = 'userDetails'; // Modify these...
$dbuser = 'root'; // ...variables according
$dbpass = ''; // ...to your installation
$dsn = "mysql:host=$dbhost;dbname=$dbname";
$appname = "Ziwa hotspot"; // ...and preference
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
);

try {
    $connection = new PDO($dsn, $dbuser, $dbpass, $options);

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

<?php // Example 26-2: header.php
session_start();

echo "<!DOCTYPE html>\n<html><head>";

// require_once 'functions.php';

$userstr = ' Guest';

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $loggedin = true;
    $userstr = "$user";
} else {
    $loggedin = false;
}

echo "<title>$appname: $userstr</title>" .
    "<meta charset='utf-8'>" .
    "<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>" .
    "<link rel='stylesheet' href='./css/bootstrap.css' type='text/css'>" .
    "<link rel='stylesheet' href='./css/main.css'>" .
    "<script type='text/javascript' src='./js/jquery.min.js'></script>".
    "</head><body>";
?>

<?php

if ($loggedin) {
    echo <<<EOT
    <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="members.php">$appname: $userstr</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="members.php">Home</a></li>
        <li><a href="members.php">Total visitors: $row_count</a></li>".
        <li><a href="returning.php">Returning visitors: $returning_row_count</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="$downloadLink.php">Download records</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
    </div>
  </nav>
EOT;

} else {
    echo <<<EOT
    <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="members.php">$appname: $userstr</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="members.php">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="admin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
    </div>
  </nav>
EOT;
}
?>


