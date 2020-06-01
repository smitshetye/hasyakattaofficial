<?php

$server ="sql305.epizy.com";
$username="epiz_25907310";
$pasword="aXGsy9AOcLXSHS";
$dbname="epiz_25907310_hasyakattaofficial";


$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$con){
    die(*Connection Failed:*.mysqli_connect_error());
}

?>