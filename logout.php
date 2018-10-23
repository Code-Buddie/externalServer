<?php // Example 26-12: logout.php
require_once './header.php';

if (isset($_SESSION['user'])) {
    session_destroy();
    header('Location: index.php');
} else header('Location: index.php');
?>

<br><br></div>
</body>
</html>
