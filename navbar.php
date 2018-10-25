<?php

$appname= "Ziwa";

echo "<!DOCTYPE html>\n<html><head>".
     "<title>$appname: $userstr</title>" .
    "<meta charset='utf-8'>" .
    "<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>" .
    "<link rel='stylesheet' href='./css/bootstrap.css' type='text/css'>" .
    "<link rel='stylesheet' href='./css/main.css'>" .
    "<script type='text/javascript' src='./js/jquery.min.js'></script>".
    "</head><body>";
    
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
echo "<div class='container my-3'>";
?>