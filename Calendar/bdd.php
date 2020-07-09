<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=agenda_sirhu;charset=utf8', 'root', 'slack142');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}