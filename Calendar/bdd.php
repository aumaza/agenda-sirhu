<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=breaktime;charset=utf8', 'root', 'slack142');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}