<?php
	$con = new mysqli("localhost", "root", "", "add_rem_field");
	$qry = $con->query("SELECT * FROM user");
	while($row = $qry->fetch_object()){
		echo '<li id="row'. $row->id . '" >' . $row->name . '<span class="remove" id="'. $row->id . '">x</span></li>';
	}
?>