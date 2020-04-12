GNU nano 2.9.3              sending_info_to_app_1.php

<?php

if (!isset($_GET['q'])) {

    print(" <form method=\"get\">
         <input name=\"q\" placeholder=\"Enter Text\">
         <br/>
         <input type=\"submit\" value=\"Go\">
        </form>");
}
    else {
        print("<h2>{$_GET['q']}</h2>");

}


?>
