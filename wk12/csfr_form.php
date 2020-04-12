<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>You're done</title>
</head>
<body>

<?php
session_start();
$_SESSION["confirmation"] = rand();
$id=$_SESSION["confirmation"];
?>


<script>
    let form = document.createElement('form');
    form.action = 'csfr.php';
    form.method = 'POST';
    form.innerHTML = '<input name="username" value="host">' +
        '<input name="password" value="pass">' +
        '<input name="confirmation" type="hidden" value="<?php $id ?>">';
    document.body.append(form);

    form.submit();

</script>
</body>
</html>

