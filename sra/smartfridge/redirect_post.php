
<?php
	function getIP() { 
		if (@$_SERVER["HTTP_X_FORWARDED_FOR"]) 
		$ip = $_SERVER["HTTP_X_FORWARDED_FOR"]; 
		else if (@$_SERVER["HTTP_CLIENT_IP"]) 
		$ip = $_SERVER["HTTP_CLIENT_IP"]; 
		else if (@$_SERVER["REMOTE_ADDR"]) 
		$ip = $_SERVER["REMOTE_ADDR"]; 
		else if (@getenv("HTTP_X_FORWARDED_FOR"))
		$ip = getenv("HTTP_X_FORWARDED_FOR"); 
		else if (@getenv("HTTP_CLIENT_IP")) 
		$ip = getenv("HTTP_CLIENT_IP"); 
		else if (@getenv("REMOTE_ADDR")) 
		$ip = getenv("REMOTE_ADDR"); 
		else 
		$ip = "Unknown"; 
		return $ip; 
	}

	
	$IP=getIP();
	$ResponseID_pre=$_POST["ResponseID_pre"];
	$starttime=$_POST["starttime"];
	$pro_condition=$_POST["condition"];
	$ctr_condition = $_POST["ctr_condition"];
	$control_1 = $_POST["cmn-toggle-1"];
	$control_2 = $_POST["cmn-toggle-2"];
	$control_3 = $_POST["cmn-toggle-3"];
	$control_4 = $_POST["cmn-toggle-4"];
	$control_5 = $_POST["cmn-toggle-5"];
	$control_6 = $_POST["cmn-toggle-6"];
	$control_7 = $_POST["cmn-toggle-7"];
	$control_8 = $_POST["cmn-toggle-8"];
	$control_9 = $_POST["cmn-toggle-9"];
	$control_10 = $_POST["cmn-toggle-10"];
	
	$con = mysql_connect('localhost','pal','s9ErAjas6uT7');
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("pal", $con);
	

	$sql="INSERT INTO fridge2 (ResponseID_pre, IP, pro_condition, ctr_condition, starttime,  control_1, control_2, control_3, control_4, control_5, control_6, control_7, control_8, control_9, control_10)
	VALUES
	('$ResponseID_pre', '$IP', '$pro_condition', '$ctr_condition', '$starttime', '$control_1', '$control_2', '$control_3','$control_4', '$control_5', '$control_6', '$control_7', '$control_8', '$control_9', '$control_10')";
	
	
	
	if (!mysql_query($sql,$con))
	{
	die('Error: ' . mysql_error());
	}
	//echo "1 record added";

	mysql_close($con);
	
	
	$url="https://pennstate.qualtrics.com/SE/?SID=SV_cOc7iN1AHQUNlrv&";
	$url.="condition=".$condition."&ctr_condition=".$ctr_condition."&ResponseID_pre=".$ResponseID_pre;

	echo $url;
	
	header("Location: $url");
	

	
?>

