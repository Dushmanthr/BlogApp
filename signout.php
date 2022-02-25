<?php

       session_start();

       $_SESSION = array();

       if(isset($_COOKIE[session_name()])){// expire the cookie in given time

          setcookie(session_name(), '', time()-86400, '/');  //no of seconds in the day 86400
       }
          
       session_destroy();

       header("Location: index.php");
?>