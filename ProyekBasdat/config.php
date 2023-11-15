<?php
$db=pg_connect('host=localhost dbname=liquid user=postgres password=janganlupa');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>