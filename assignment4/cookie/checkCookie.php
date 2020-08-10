<?php 
   echo $_COOKIE['username']; //retrieving cookie value for username
   setcookie('username', "" , time()-1); //destroying cookie