
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
$id="";
if(isset($_POST['confirmation'])){
        $id=trim($_POST['confirmation']);
        $id = stripslashes($id);
        $id = htmlspecialchars($id);
    } else {
    $message="Sorry, something went terribly wrong..";
    };

if(!isset($_SESSION['confirmation']) || ($id != $_SESSION['confirmation'])){
    $message="Sorry, something went terribly wrong..";
};

?>


<form method="post" action="scratch.php">
    Username: <input type="text" name="username">

    <br><br>
    Password: <input type="password" name="password">

    <br><br>

    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>


<div>
    <p>
    <?php echo($message); ?>
    </p>
</div>




</body>
</html>