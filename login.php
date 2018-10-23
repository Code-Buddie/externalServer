<?php
$mac = $_POST['mac'];
$ip = $_POST['ip'];
$username = $_POST['username'];
$linklogin = $_POST['link-login'];
$linkorig = $_POST['link-orig'];
$error = $_POST['error'];
$chapid = $_POST['chap-id'];
$chapchallenge = $_POST['chap-challenge'];
$linkloginonly = $_POST['link-login-only'];
$linkorigesc = $_POST['link-orig-esc'];
$macesc = $_POST['mac-esc'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mikrotik Hotspot | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>

<div id="wrap">
    <div class="container">
        <div class="col-md-6 col-sm-12">

            <div class="row">
                <?php if ($error): ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php endif;?>

                <div class="alert alert-info">Please log on to use the hotspot service.</div>                
            </div>
                <div class="panel panel-default">

                    <div class="panel-body">

                        <form name="sendin" id="loginForm" class="form-horizontal" role="form" action="<?php echo $linkloginonly; ?>" method="post" onSubmit="return doLogin()">
                            <input type="hidden" name="dst" value="<?php echo $linkorig; ?>"/>
                            <input type="hidden" name="popup" value="true"/>

                            <div class="form-group" id="nameContainer">
                                <label for="inputLogin" class="col-sm-2 control-label">Name</label>

                                <div class="col-sm-10">
                                    <input type="test" class="form-control input-lg" id="name" name="name"
                                           placeholder="name" autofocus required>
                                </div>
                            </div>

                            <div class="form-group" id="emailContainer">
                                <label for="inputLogin" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                    <input type="email" class="form-control input-lg" id="email" name="email"
                                           placeholder="email" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputLogin" class="col-sm-2 control-label">Username</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-lg" id="inputLogin" name="username"
                                           placeholder="username" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-sm-2 control-label">Password</label>

                                <div class="col-sm-10">
                                    <input type="password" class="form-control input-lg" id="inputPassword" name="password"
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
                <div id="automatedformContainer">
                    <iframe width="0" height="0" border="0" name="dummyframe" id="dummyframe"></iframe>
                    <form id="automatedLoginForm" class="form-horizontal hidden" role="form" target="dummyframe" action="server/create.php" method="post">
                    <input type="test" class="form-control input-lg" id="automatedName" name="automatedName" placeholder="name" required>
                    <input type="text" class="form-control input-lg" id="automatedEmail" name="automatedEmail" placeholder="email" required>
                    <input type="text" class="form-control input-lg" id="automatedUsername" name="automatedUsername" placeholder="username" required>
                    <button type="submit" class="btn btn-primary btn-block btn-lg" id="automatedSubmitButton">OK</button>
                    </form>
                    </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/newTab.js"></script>


<?php if ($chapid): ?>
<script type="text/javascript" src="js/md5.js"></script>
<script type="text/javascript">
	<!--
	    function doLogin() {
                <?php if(strlen($chapid) < 1) echo "return true;\n"; ?>
		document.sendin.username.value = document.login.username.value;
		document.sendin.password.value = hexMD5('<?php echo $chapid; ?>' + document.login.password.value + '<?php echo $chapchallenge; ?>');
		document.sendin.submit();
		return false;
	    }
	//-->
	</script>
<?php endif;?>
</body>
</html>
