<?php 
//ini_set("display_errors", "on");
	if (isset($_REQUEST['appversion'])) {

		global $db;
		global $current_user;
 		$current_user_id = $current_user->id;
		$appversion=$_REQUEST['appversion'];
		
		$old_version ="SELECT version FROM mobileapp_version WHERE 1"; 
	  	$r = $db->query($old_version);
	  	$ver=$db->fetchByAssoc($r);

	  

		if ($appversion=='') {
			$show='<h3>Add some value</h3>';

		}else{

				$update="UPDATE mobileapp_version SET version='$appversion',modified_by='$current_user_id',modified_date=current_timestamp(),old_version='".$ver['version']."'";

				echo $update;

				$result=$db->query($update);
				if ($result > 0) {
					$show='<h3>App Version updated</h3>';
				}else{
					$show='<h3>Failed to update</h3>';

				}


		}

		

		
		
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Mobile App Version</title>
</head>
<body align="center">
<h1>Insert Mobile App Version Here</h1>
<h3><?php echo $show; ?></h3>
<form method="post" action="index.php?module=Administration&action=configureMobileAppVersionSettings">
	<div class="form-group">
		<input type="text" name="appversion" id="appversion" name="appversion" placeholder="Mobile App Version">
	</div>
	<div>

		<button type="submit" id="btnAppversion" class="btn btn-info" name="btnAppversion">Update</button>
		 <a href="index.php?module=Administration&action=index" style="text-decoration:none !important;">
			<input type="submit"  value="Cancel" class="btn btn-info" style="height:34px;width:70px;"></a>
	</div>
	
</form>
</body>
</html> 