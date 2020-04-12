  GNU nano 2.9.3              sending_info_to_app_2.php

<?php

if (!isset($_GET['q'])) {

    print(" <form method=\"get\">
         <input name=\"q\" placeholder=\"Enter Text\">
         <br/>
         <input type=\"submit\" value=\"Go\">
        </form>");
}
    else {
        $outpt=strip_tags($_GET['q']);
        print("<h2>{$outpt}</h2>");
        $outpt2=htmlentities($_GET['q']);
        print("<h2>{$outpt2}</h2>");

}

