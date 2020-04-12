  GNU nano 2.9.3                   login_part2.php

<?php
$whitelist = array('123456', '123456789', 'qwerty', 'password', '111111', '1234$

if (!isset($_GET['password']) || !in_array($_GET['password'], $whitelist)){
    print( "<h1>Weak Password</h1>
        <form method=\"get\">
         <label>Password</label>
         <input type=\"password\" name=\"password\">
         <input type=\"hidden\" name=\"login\" value=\"Ben\">
         <br/>
         <input type=\"submit\">
        </form>");
} else {
echo "</br>&nbsp<h2> Welcome {$_GET['login']} to Your Portal</h2>";
}

?>

