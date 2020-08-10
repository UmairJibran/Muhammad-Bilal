<?php
   session_start();
   echo $_SESSION['userName'];
   session_unset();