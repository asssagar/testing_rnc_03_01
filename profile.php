<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>

</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<p>testing time</p>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>