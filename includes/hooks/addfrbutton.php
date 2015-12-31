<?php

function addFRbutton($vars) {
	$uid = $vars['userid'];
	$result = select_query("tblclients","",array("id"=>$uid));
	$data = mysql_fetch_array($result);
	$lname = $data['lastname'];

	echo '<div style="float:right;"><form action="./addonmodules.php?module=fraudrecord&page=\'1\'" method="post"><input type="hidden" name="search_frc_text" value="'.$lname.'"><input type="submit" name="search_frc_button" value="Search FraudRecord Module" style="margin-left:10px;"/></form></div>';
}

add_hook("AdminAreaClientSummaryPage",1,"addFRbutton");

?>