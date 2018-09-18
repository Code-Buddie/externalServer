<?php
    $mac=$_POST['mac'];
    $ip=$_POST['ip'];
    $username=$_POST['username'];
    $linklogin=$_POST['link-login'];
    $linkorig=$_POST['link-orig'];
    $error=$_POST['error'];
    $trial=$_POST['trial'];
    $loginby=$_POST['login-by'];
    $chapid=$_POST['chap-id'];
    $chapchallenge=$_POST['chap-challenge'];
    $linkloginonly=$_POST['link-login-only'];
    $linkorigesc=$_POST['link-orig-esc'];
    $macesc=$_POST['mac-esc'];
    $identity=$_POST['identity'];
    $bytesinnice=$_POST['bytes-in-nice'];
    $bytesoutnice=$_POST['bytes-out-nice'];
    $sessiontimeleft=$_POST['session-time-left'];
    $uptime=$_POST['uptime'];
    $refreshtimeout=$_POST['refresh-timeout'];   
    $linkstatus=$_POST['link-status'];  
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
                <?php if($error) : ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php endif; ?>

                <div class="alert alert-info">Please log on to use the hotspot service.</div>
                <?php if($trial == 'yes') : ?> 
                    <div class="alert alert-info">
                        Free trial available, <a href="<?php echo $linkloginonly; ?>?dst=<?php echo $linkorigesc; ?>&amp;username=T-<?php echo $macesc; ?>">click here</a>.
                    </div>
                <?php endif; ?>
            </div>            
                <div class="panel panel-default">
                    
                    <div class="panel-body">

                        <form id="loginForm" class="form-horizontal" role="form" action="<?php echo $linkloginonly; ?>" method="post">
                            <input type="hidden" name="dst" value="<?php echo $linkorig; ?>"/>
                            <input type="hidden" name="popup" value="true"/>

                            <div class="form-group">
                                <label for="inputLogin" class="col-sm-2 control-label">Login</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-lg" id="inputLogin" name="username"
                                           placeholder="Login" autofocus required>
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
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


<?php if($chapid) : ?> 
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
<?php endif; ?>

<script type="text/javascript">
  document.login.username.focus();
</script>

</body>
</html>
