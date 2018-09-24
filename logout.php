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
    <title>Mikrotik Hotspot | Logout</title>
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
                <div class="alert alert-success">You have just logged out.</div>
            </div>
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <td>user name</td>
                                <td><?php echo $username; ?></td>
                            </tr>
                            <tr>
                                <td>IP address</td>
                                <td><?php echo $ip; ?></td>
                            </tr>
                            <tr>
                                <td>MAC address</td>
                                <td><?php echo $mac; ?></td>
                            </tr>
                            <tr>
                                <td>session time</td>
                                <td><?php echo $uptime; ?></td>
                            </tr>
                            <?php if($sessiontimeleft) : ?>
                                <tr>
                                    <td>time left</td>
                                    <td><?php echo $sessiontimeleft; ?></td>
                                </tr>
                            <?php endif; ?>
                            <tr>
                                <td>bytes up/down:</td>
                                <td><?php echo $bytesinnice; ?> / <?php echo $bytesoutnice; ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>            
        </div>
        
    </div>

</div>

<div id="footer">
    <div class="container">
        <p class="text-muted">Powered by Mikrotik</a></p>
    </div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
