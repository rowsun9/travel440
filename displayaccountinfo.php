<?php
require("ourdatabase.php");

function getUsersData($id)
{
	$array = array();
	$q = mysql_query("SELECT * FROM "users" WHERE "id"=".$id);
	while($r = mysql_fetch_assoc($q))
	{
		$array['id'] = $row['id'];
		$array['id'] = $row['id'];
		$array['id'] = $row['id'];
		$array['id'] = $row['id'];
		$array['id'] = $row['id'];
		$array['id'] = $row['id'];
		$array['id'] = $row['id'];
		$array['id'] = $row['id'];
		// change these to the name of the attributes in our database tables
	}
	
	return $array;
?>