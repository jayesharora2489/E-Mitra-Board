<?php

include('config.php');

unset($_SESSION["id"]);
unset($_SESSION["loginid"]);
echo('<script>window.location="index.php";</script>');
?>