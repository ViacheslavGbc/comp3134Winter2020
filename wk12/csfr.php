
<!DOCTYPE HTML>
<html>
<head>

</head>
<body>


<?php
$message=":";
if(isset($_POST['password']) && isset($_POST['username']) && ($_POST['username']=='host')
&& $_POST['password']=='pass'){
  $message="Welcome Ben";
};
if(isset($_POST['password']) && isset($_POST['username']) && (($_POST['username']!='host')
    || $_POST['password']!='pass')){
    $message="Ooops, credentials are not correct, try again!";
};
?>


<form method="post" action="csfr.php">
    Username: <input type="text" name="username">

    <br><br>
    Password: <input type="password" name="password">

    <br><br>

    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>


<div>
    <p>
    <?php echo $message; ?>
    </p>
</div>

</body>
</html>