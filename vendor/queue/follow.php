<?php

	include("/nfs/c08/h02/mnt/119066/domains/joshuavaage.com/html/projects/freeathena.com/vendor/queue/dbcon.php");
	$user_ip = $_SERVER['REMOTE_ADDR'];
	
	$user_id = 100;
	
	$res = mysql_query("select * from wha_pins where user_ip = '$user_ip' AND pinned_id = ".@$_REQUEST['id']);
	$check_result = @mysql_num_rows(@$res);
	
	if($check_result > 0)
	{
		@mysql_query("delete from wha_pins where user_ip = '$user_ip' AND pinned_id = ".@$_REQUEST['id']);
		echo '<a class="btn-follow" href="#"></a>';
	}	
	else
	{
		@mysql_query("INSERT INTO wha_pins (user_id,user_ip,pinned_id) VALUES('".$user_id."','".$user_ip."','".@$_REQUEST['id']."')");
		echo '<a class="btn-following" href="#"></a>';
	}		
					

?>