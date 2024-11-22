<?php
session_start();
session_destroy();
header("Location: ../loginregis/login.php");
exit;
