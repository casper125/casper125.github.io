<!DOCTYPE html>
<html lang="us">
<head>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="author" content ="ruoxu wang">
<title>Condition 7</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery-ui.css" >
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="stylesheet" type="text/css" href="css/star.css" />
<link rel="stylesheet" type="text/css" href="css/switch.css" />

<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

<script>
//click Action's dropdown menu --> star rating
$( document ).ready(function() {
  // Handler for .ready() called.
	$('select').change(function(){
		var G = +($('#ActionG').find(":selected").val());
		var PG = +($('#ActionPG').find(":selected").val());
		var PG13 = +($('#ActionPG13').find(":selected").val());
		var R = +($('#ActionR').find(":selected").val());
		var NC17 = +($('#ActionNC17').find(":selected").val());
		value = G + PG + PG13 + R + NC17;
		if (value == 0) {$("#rating6").prop("checked", false);}
		if (value >=1 && value <=3) {$("#rating6").prop("checked", true);}
    	if (value >=4 && value <=6) {$("#rating7").prop("checked", true);}
    	if (value >=7 && value <=9) {$("#rating8").prop("checked", true);}
    	if (value >=10 && value <=12) {$("#rating9").prop("checked", true);}
    	if (value >=13 && value <=15) {$("#rating10").prop("checked", true);}
	});
});

//click Drama's dropdown menu --> star rating
$( document ).ready(function() {
  // Handler for .ready() called.
	$('select').change(function(){
		var G = +($('#DramaG').find(":selected").val());
		var PG = +($('#DramaPG').find(":selected").val());
		var PG13 = +($('#DramaPG13').find(":selected").val());
		var R = +($('#DramaR').find(":selected").val());
		var NC17 = +($('#DramaNC17').find(":selected").val());
		value = G + PG + PG13 + R + NC17;
		if (value == 0) {$("#rating11").prop("checked", false);}
		if (value >=1 && value <=3) {$("#rating11").prop("checked", true);}
    	if (value >=4 && value <=6) {$("#rating12").prop("checked", true);}
    	if (value >=7 && value <=9) {$("#rating13").prop("checked", true);}
    	if (value >=10 && value <=12) {$("#rating14").prop("checked", true);}
    	if (value >=13 && value <=15) {$("#rating15").prop("checked", true);}
	});
});

//click Comedy's dropdown menu --> star rating
$( document ).ready(function() {
  // Handler for .ready() called.
	$('select').change(function(){
		var G = +($('#ComedyG').find(":selected").val());
		var PG = +($('#ComedyPG').find(":selected").val());
		var PG13 = +($('#ComedyPG13').find(":selected").val());
		var R = +($('#ComedyR').find(":selected").val());
		var NC17 = +($('#ComedyNC17').find(":selected").val());
		value = G + PG + PG13 + R + NC17;
		if (value == 0) {$("#rating16").prop("checked", false);}
		if (value >=1 && value <=3) {$("#rating16").prop("checked", true);}
    	if (value >=4 && value <=6) {$("#rating17").prop("checked", true);}
    	if (value >=7 && value <=9) {$("#rating18").prop("checked", true);}
    	if (value >=10 && value <=12) {$("#rating19").prop("checked", true);}
    	if (value >=13 && value <=15) {$("#rating20").prop("checked", true);}
	});
});

//click Animation's dropdown menu --> star rating
$( document ).ready(function() {
  // Handler for .ready() called.
	$('select').change(function(){
		var G = +($('#AnimationG').find(":selected").val());
		var PG = +($('#AnimationPG').find(":selected").val());
		var PG13 = +($('#AnimationPG13').find(":selected").val());
		var R = +($('#AnimationR').find(":selected").val());
		var NC17 = +($('#AnimationNC17').find(":selected").val());
		value = G + PG + PG13 + R + NC17;
		if (value == 0) {$("#rating21").prop("checked", false);}
		if (value >=1 && value <=3) {$("#rating21").prop("checked", true);}
    	if (value >=4 && value <=6) {$("#rating22").prop("checked", true);}
    	if (value >=7 && value <=9) {$("#rating23").prop("checked", true);}
    	if (value >=10 && value <=12) {$("#rating24").prop("checked", true);}
    	if (value >=13 && value <=15) {$("#rating25").prop("checked", true);}
	});
});

//click Documentary's dropdown menu --> star rating
$( document ).ready(function() {
  // Handler for .ready() called.
	$('select').change(function(){
		var G = +($('#DocumentaryG').find(":selected").val());
		var PG = +($('#DocumentaryPG').find(":selected").val());
		var PG13 = +($('#DocumentaryPG13').find(":selected").val());
		var R = +($('#DocumentaryR').find(":selected").val());
		var NC17 = +($('#DocumentaryNC17').find(":selected").val());
		value = G + PG + PG13 + R + NC17;
		if (value == 0) {$("#rating26").prop("checked", false);}
		if (value >=1 && value <=3) {$("#rating26").prop("checked", true);}
    	if (value >=4 && value <=6) {$("#rating27").prop("checked", true);}
    	if (value >=7 && value <=9) {$("#rating28").prop("checked", true);}
    	if (value >=10 && value <=12) {$("#rating29").prop("checked", true);}
    	if (value >=13 && value <=15) {$("#rating30").prop("checked", true);}
	});
});

</script>

<style>
.ui-accordion .ui-accordion-content {
	border-top: 0;
	height:30%;
	padding:20px;
	overflow: hidden;
}
</style>

</head>
<body>
<main>

<!--logo -->
<table style ="width:100%; margin:0px auto;">
<tr>
<td style ="float:left;">
<img src ="images/logo.png" />
</td>

<td style ="color:#fff; text-align:center; width:100px;">
<h4>  
<script type="text/javascript">
<!--
var currentTime = new Date()
var month = currentTime.getMonth() + 1
var day = currentTime.getDate()
var year = currentTime.getFullYear()
document.write(month + "/" + day + "/" + year)
//-->
</script>
</h4>
</td>

<td style ="color:#fff; text-align:center; width:100px;">
<h4>
<script type="text/javascript">
<!--
var currentTime = new Date()
var hours = currentTime.getHours()
var minutes = currentTime.getMinutes()
if (minutes < 10){
minutes = "0" + minutes
}
document.write(hours + ":" + minutes + " ")
if(hours > 11){
document.write("PM")
} else {
document.write("AM")
}
//-->
</script>
</h4>
</td>

<td style ="color:#fff; text-align:center; width:100px;">
<h4>
80°F
</h4>
</td>
</tr>
</table>
<!-- end of logo -->

<!-- Description -->
<p style ="width:100%; margin:0px auto; color:#fff; text-shadow: 0 0 5px #000;">The TV requests access to your program watching data. </p>
<br />

<!-- Accordion -->
<div id="accordion">

<!-- level 1 -->
    <h3>Action</h3>

	<div style ="padding-left:5%;">

	<h3>Maturity Rating</h3>
	
	<p>G (General Audience)</p>
	<p>PG (Partial Guidance Suggested)</p>
	<p>PG-13 (Parents Strongly Cautioned)</p>
	<p>R (Restricted)</p>
	<p>NC-17 (No One 17 and Under Admitted)</p>

	</div>

<!-- level 2 -->

	<h3>Drama</h3>

	<div style ="padding-left:50px">
    
    <h3>Maturity Rating</h3>
	
	<p>G (General Audience)</p>
	<p>PG (Partial Guidance Suggested)</p>
	<p>PG-13 (Parents Strongly Cautioned)</p>
	<p>R (Restricted)</p>
	<p>NC-17 (No One 17 and Under Admitted)</p>


	</div>

<!-- level 3 -->

	<h3>Comedy</h3>

	<div style ="padding-left:50px">

	<h3>Maturity Rating</h3>
	
	<p>G (General Audience)</p>
	<p>PG (Partial Guidance Suggested)</p>
	<p>PG-13 (Parents Strongly Cautioned)</p>
	<p>R (Restricted)</p>
	<p>NC-17 (No One 17 and Under Admitted)</p>

		
	</div>

<!-- level 4 -->

	<h3>Animation</h3>

    <div style ="padding-left:50px">

    <h3>Maturity Rating</h3>
	
	<p>G (General Audience)</p>
	<p>PG (Partial Guidance Suggested)</p>
	<p>PG-13 (Parents Strongly Cautioned)</p>
	<p>R (Restricted)</p>
	<p>NC-17 (No One 17 and Under Admitted)</p>

		
	</div>

<!-- level 5 -->

	<h3>Documentary</h3>

	<div style ="padding-left:50px">
	
	<h3>Maturity Rating</h3>
	
	<p>G (General Audience)</p>
	<p>PG (Partial Guidance Suggested)</p>
	<p>PG-13 (Parents Strongly Cautioned)</p>
	<p>R (Restricted)</p>
	<p>NC-17 (No One 17 and Under Admitted)</p>

	
	</div>

</div>

<form id="contactForm" method="post" action="redirect_post.php">
    <input id="starttime" type="hidden" name="starttime" value='<?php echo date("H:i:s"); ?>' />
    <input id="dcondition" type="hidden" name="dcondition" value="7" />
    <input id="ResponseID_pre" type="hidden" name="ResponseID_pre" value='<?php echo $_GET["ResponseID_pre"]; ?>' />
    <input style ="float:right; margin-top:20px; background:#2779aa; color:#fff; font-weight:bold; width:100px; height:40px; font-size:16px; border:none; border-radius: 5px;" type="submit" class="button" value="Next" />
</form>

</main>

<script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.js"></script>

<script>

$( "#accordion" ).accordion();

var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];

</script>
</body>
</html>