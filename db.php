<?php
$connection=mysqli_connect ("localhost", 'root', '','demo');
if (!$connection) {
    die('Not connected : ' . mysqli_connect_error());
}

