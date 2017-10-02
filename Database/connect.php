
<?php
//connect.php
session_start();
$server	    = 'HF--PC';
$username	= 'sudo';
$password	= 'Aa123456&';
$database	= 'Bilbasen';

if(!mysql_connect($server, $username, $password))
{
 	exit('Error: could not establish database connection');
}
if(!mysql_select_db($database))
{
 	exit('Error: could not select the database');
}
?>
