<?php // Example 26-7: login.php
require_once './header.php';
echo "<div class='container my-3'>";
$error = $user = $pass = "";

try {

    if (isset($_POST['user'])) {
        $user = ($_POST['user']);
        // $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $pass = sha1($_POST['pass']);

        if ($user == "" || $pass == "") {
            $error = "Not all fields were entered<br>";
        } else {

            $stmt = $connection->query("SELECT user,pass FROM `admin` WHERE user='$user' AND pass='$pass'");
            $row_count = $stmt->rowCount();

            if ($row_count == 0) {
                $error = "<span class='error'>Username/Password
                  invalid</span>";
            } else {
                $_SESSION['user'] = $user;
                $_SESSION['pass'] = $pass;
                die(header('Location: members.php'));
            }
        }
    }
} catch (PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}

// echo $pass;
?>
<div class="container centered text-center">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <?php if ($error): ?>
                <div class="alert alert-danger">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <div class="alert alert-info">Please log on to use the Admin service.</div>

            <div class="panel panel-default">
                <div class="panel-body">
                    <form name="sendin" id="loginForm" class="form-horizontal" role="form" action="admin.php"
                          method="post">
                        <p class="lead">Ziwa hotspot Admin portal</p>

                        <div class="form-group">
                            <label for="inputLogin" class="col-sm-2 control-label">Username</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control input-lg" id="inputLogin" name="user"
                                       placeholder="Admin Username" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-2 control-label">Password</label>

                            <div class="col-sm-10">
                                <input type="password" class="form-control input-lg" id="inputPassword" name="pass"
                                       placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary btn-block btn-lg">OK</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
