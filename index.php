<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Sova-Chat </title>
    <meta name="description" content="Sova-Chat">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <script>
     if ( window.history.replaceState ) {
         window.history.replaceState( null, null, window.location.href );
     }
    </script> 
    </head>
    <body>
        
<?php

     function sc_load_chat() {
         $sc_log = fopen('sc_log', 'r');
         while ($line = fgets($sc_log)) {
             foreach (str_split($line) as $char) {
                 echo "";
             }
             echo $line . "\n";
         } 
         fclose($sc_log);
     }

     if ($_POST) {
         $sc_log = fopen("sc_log", "a");
         $msg= $_POST["mytextarea"];
         fwrite($sc_log, "<div class='sc_chatfield'>" . ".date=" . date("Y-m-dTH:i:s") . ".msg=" . $msg . "</div>" . "\n");
         sc_load_chat();
         fclose($sc_log);
     }

?>
    <form method="post">
     <textarea name="mytextarea"></textarea>
     <input type="submit" value="GO!" />
    </form>
        
    </body>
</html>
