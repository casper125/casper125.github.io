
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
	$dcondition=$_POST["dcondition"];
	$control1 = $_POST["control1"];
    $control2 = $_POST["control2"];
 	$control3 = $_POST["control3"];
	$control4 = $_POST["control4"];
	$control5 = $_POST["control5"];
	$control6 = $_POST["control6"];
	$control7 = $_POST["control7"];
	$control8 = $_POST["control8"];
	$control9 = $_POST["control9"];
	$control10 = $_POST["control10"];
	$control11 = $_POST["control11"];
	$control12 = $_POST["control12"];
	$control13 = $_POST["control13"];
	$control14 = $_POST["control14"];
	$control15 = $_POST["control15"];
	$control16 = $_POST["control16"];
	$control17 = $_POST["control17"];
	$control18 = $_POST["control18"];
	$control19 = $_POST["control19"];
	$control20 = $_POST["control20"];
	$control21 = $_POST["control21"];
	$control22 = $_POST["control22"];
	$control23 = $_POST["control23"];
	$control24 = $_POST["control24"];
	$control25 = $_POST["control25"];
	$control26 = $_POST["control26"];
	$control27 = $_POST["control27"];
	$control28 = $_POST["control28"];
	$control29 = $_POST["control29"];
	$control30 = $_POST["control30"];
	$control31 = $_POST["control31"];
	$control32 = $_POST["control32"];
	$control33 = $_POST["control33"];
	$control34 = $_POST["control34"];
	$control35 = $_POST["control35"];
	$control36 = $_POST["control36"];
	$control37 = $_POST["control37"];
	$control38 = $_POST["control38"];
	$control39 = $_POST["control39"];
	$control40 = $_POST["control40"];
	$control41 = $_POST["control41"];
	$control42 = $_POST["control42"];
	$control43 = $_POST["control43"];
	$control44 = $_POST["control44"];
	$control45 = $_POST["control45"];
	$control46 = $_POST["control46"];

	$con = mysql_connect('localhost','pal','s9ErAjas6uT7');
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("pal", $con);
	 

	$sql="INSERT INTO smarttv (ResponseID_pre, dcondition, starttime, control1, control2, control3, control4, control5, control6, control7, control8, control9, control10, control11, control12, control13, control14, control15, control16, control17, control18, control19, control20, control21, control22, control23, control24, control25, control26, control27, control28, control29, control30, control31, control32, control33, control34, control35, control36, control37, control38, control39, control40, control41, control42, control43, control44, control45, control46)
	VALUES
	('$ResponseID_pre', '$dcondition', '$starttime', '$control1', '$control2', '$control3', '$control4', '$control5', '$control6', '$control7', '$control8', '$control9','$control10','$control11','$control12','$control13','$control14','$control15','$control16','$control17','$control18','$control19','$control20','$control21','$control22','$control23','$control24', '$control25', '$control26', '$control27', '$control28', '$control29', '$control30', '$control31', '$control32', '$control33','$control34','$control35','$control36','$control37','$control38','$control39', '$control40', '$control41', '$control42', '$control43', '$control44', '$control45', '$control46')";
	
	if (!mysql_query($sql,$con))
	{
	die('Error:' . mysql_error());
	}
	//echo "1 record added";

	mysql_close($con);
	
	
	$url="https://pennstate.qualtrics.com/SE/?SID=SV_73DbjnzOPmBVp1b"; //qualtrics post-questionnaire URL
	$url.="&dcondition=".$dcondition."&ResponseID_pre=".$ResponseID_pre;

	echo $url;
	
	header("Location: $url");
	
?>