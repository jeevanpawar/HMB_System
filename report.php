<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anmol Water Tank</title>
<style type="text/css">
.heading
{
	font-size:36px;
	font-family:"MS Serif", "New York", serif;
	text-decoration:underline;
}
.sub_heading
{
	font-size:20px;
	font-family:"MS Serif", "New York", serif;
}
.quotation
{
	font-size:24px;
	font-weight:bold;
	text-decoration:underline;
}
.date
{	
	margin-left:80%;
}
.description ul
{
	border:1px solid #000; 
}
.description ul li
{	
	list-style:none;
	display:inline;
	padding:20px;
}
</style>
</head>

<body>
<div class="heading"><center>ANMOL WATER TANK CLEANERS</center></div>
<div class="sub_heading"><center>Shop No 4, Vaibhavlakshmi Appt, Behind Prakash Petrol Pump</center></div>
<div class="sub_heading"><center>Govind Nagar, Nashik-422009</center></div>
<div class="sub_heading"><center>Ph:&nbsp;9970301010 / 9175299779</center></div>
<br><br>
<div class="quotation"><center>QUOTATION FOR AMC</center></div>
<div class="date">Date:<label>&nbsp;</label></div>
<div class="date">Quo No:<label>&nbsp;</label></div>
<div>To</div>
<div><textarea>Name:<br>Address</textarea></div>
<br><br>
<div>Kind Attn:<label></label></div>
<div>Mob No:<label></label></div>

<div class="description">
<ul><li>Description</li><li>Capacity</li><li>Quantity</li><li>Rate</li><li>Service in a Year</li><li>Amount</li></ul>
</div>
<div class="description">
<ul><li><label></label></li><li><label></label></li><li><label></label></li><li><label></label></li><li><label></label></li><li><label></label></li></ul>
</div>
<div class="description">
<ul><li><label></label></li><li><label></label></li><li><label></label></li><li><label></label></li><li><label></label></li><li><label></label></li></ul>
</div>
<div class="description">
<ul><li><label></label></li><li><label></label></li><li><label></label></li><li><label></label></li><li><label></label></li><li><label></label></li></ul>
</div>
<div class="description">
<ul><li><label></label></li><li><label></label></li><li><label></label></li><li><label></label></li><li><label></label></li><li><label></label></li></ul>
</div>

<div class="description">
<ul><li><label>Amount in Words:</label></li><li><label></label></li><li><label></label></li><li><label></label></li><li><label></label></li><li><label></label></li></ul>
</div>

<br><br><br>

<div>Terms & Conditions</div>
</body>
</html>

<?php
$htmlcontent=ob_get_clean();

include("dompdf/dompdf_config.inc.php");


  $htmlcontent = stripslashes($htmlcontent);
  $dompdf = new DOMPDF();
  $dompdf->load_html($htmlcontent);
  $dompdf->set_paper("folio", "portrait");
  $dompdf->render();
  $dompdf->stream($filename, array("Attachment" => false));	
  exit(0);
?>