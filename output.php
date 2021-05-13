<!DOCTYPE html>
<html>
<head>
	<?php
	$area=$_POST['area'];
	$radioVal = $_POST["radio"];
if($radioVal == "1")
{	$area=$area;}
else 
{   $area=$area*0.0929;}
if($area >= 110)
{	$mc=55000;}
else 
{   $mc=60000;}
//calculation for subsidy percentage
$sub=$_POST['p123'];
$cc=$_POST['cc'];
if($cc==1)
{	$sub=$sub/100;}	
else{	$sub=0;
}
	$pcent=($_POST['%area']/100);
	$cost=$_POST['cost'];
	$ss=$_POST['state'];
	$p_area=($area*$pcent);
	$a_area=($p_area/10);
	$wtc=($a_area*$mc);
	$stc=($wtc-($wtc*$sub));
	$teg=($a_area*300*$ss); //change 300>>>365
	$mfs=(($teg/12)*$cost);
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculated Output</title>
	<style>
		*{
			box-sizing: border-box;
		}
		body{
			background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url(images/texture4.jpg);
			background-repeat: no-repeat;
			background-position: center;
			background-size: 100% 100%;
			background-attachment: fixed;
			height: auto;
    	}
		.title{
			color: orange;
			font-size: 40px;
		}
		.table1{

		}
		.r1{
			font-size: 40px;
			font-family: times new roman;
			color:orange;
			word-spacing: 10px;
			font-weight: 100;
		}
		.tablet{
			width: 100%;
			margin-right: 20px;
			max-width: 100%;
		}
		.homelinkrow{
			margin-right: 20px;

		}
		.homelink{
			color: Tomato;  
			text-decoration: none;
		}
		.calculate{
			margin-right: 20px;
		}
		.calculatelink{
			color: Tomato; 
			text-decoration:none;
		}
		.tble2{
			border-top-width: 0px;
			max-width: 100%;
			width: 100%;
		}
		.opheading{
			font-size: 40px;
			margin-block-start:0cm;
			margin-block-end:0cm;
			width: 100%;	
		}
		.t1h1{
			color:white; 
			font-family:verdana; 
			font-weight:normal;  
			word-spacing: 2px;	
		}
		.table1{
			border-spacing: 0px; 
			font-family: verdana;
			max-width: 100%;
			width: 100%;	
		}
		.t2h2{
			color: white; 
			font-family: verdana; 
			font-weight: normal;  
			word-spacing: 2px;
		}
		.table3{
			border-spacing: 0px;
			font-family: verdana;
			max-width: 100%;
			width: 100%;
		}
		.t3h3{
			color: white; 
			font-family: verdana; 
			font-weight: normal;  
			word-spacing: 2px;
		}
		.nt1{
			border-spacing: 0px; 
			font-family: verdana;
			max-width: 100%;
			width: 100%;
		}
		.i1h1{
			margin-block-start: 0.1em;
    		margin-block-end: 0.1em;
		}
		.new1{
			color: white; 
			font-family: verdana; 
			font-weight: normal;  
			word-spacing: 2px;
		}
		.new2{
			margin-block-start: 0.1em;
    		margin-block-end: 0.1em;
		}
		.table4{
			border-spacing: 0px;
			font-family: verdana;
			max-width: 100%;
			width: 100%;
		}
	</style>
</head>
<body>
	<table border='0' align="center" class="tablet">
		<tr><td><img src="images/logo.png" height="80px" width="200px"></td>
			<td class="r1" align="center">SOLAR ROOFTOP CALCULATOR</td>
			<td class="homelinkrow"><a href="COMPANY WEBSITE LINK/" target="_blank" class="homelink"><h1>HOME</h1></td>	
			<td class="calculate"><a href="p1.html" class="calculatelink"><h1>CALCULATE AGAIN!</h1></td>	
		</tr>
	</table>
	
<table class="tble2" border="2">
	<caption><h3 align="left" class="opheading">COMPANY NAME Solar Rooftop Calculator predicts:</h3></caption>
	<tr align="left"><td>
	<h1 class="t1h1">1. Size of Power Plant</h1><br>
	<table width="100%" class="table1" border="2">
		<tr align="left">
			<th align="left"><h3>Total Roof Top Area: </h3></th>
			<td><b><?php echo ($area);?> Sq.m.</b></td>
		</tr>
		<tr align="left">
			<th align="left"><h3>Total Roof Top Area Available: </h3></th>
			<td><b> <?php echo ($p_area);?> Sq.m.</b></td>
		</tr>
		<tr align="left">
			<th align="left"><h3>Feasible plant size as per your Roof Top Area: </h3></th>
			<td><b><?php echo ($a_area); ?> kW</b></td> 
		</tr>
	</table>
	</td>
	<td>
	<h1 class="t2h2">3. Total Electricity Generation </h1><br>
	<table class="table3" border="2">
		<tr align="left">
			<th><h3>Monthly</h3></th>
			<td><b> <?php echo (($teg)/12); ?> kWh</b></td>
		</tr>
		<tr align="left">
			<th><h3>Annual: </h3></th>
			<td><b> <?php echo ($teg); ?> kWh</b></td>
		</tr>
		<tr align="left">
			<th><h3>Life-Time(25 years): </h3></th>
			<td> <b><?php echo (($teg)*25); ?> kWh</b></td>
		</tr>
	</table>
	</td></tr>
		<tr align="left">
			<td><h1 class="t3h3">2. Cost of the Plant</h1>
			<table class="nt1" border="2">
			<h3 class="i1h1">-- Based on current MNRE benchmark --</h3>
		<tr align="left">
			<th><h3>MNRE current Benchmark Cost: </h3></th>
			<td> <b><?php echo $mc ?> Rs./kW</b></td>
		</tr>
		<tr align="left">
			<th><h3>Without subsidy:</h3></th>
			<td> <b>Rs. <?php echo $wtc ?> </b></td>
		</tr>
		<tr align="left">
			<th><h3>With subsidy <?php echo (($_POST['p123'])) ?>%: </h3></th>
			<td> <b>Rs. <?php echo $stc ?></b></td>
		</tr>
	</table>
	</td><td>
	<h1 class="new1">4. Financial Savings</h1>
	<h3 class="new2">-- Tariff @Rs.x/kWh(for top slab of traffic) - No increase assumed over 25 years --</h3>
	<table class="table4" border="2">
		<tr align="left">
			<th><h3>Monthly: </h3></th>
			<td> <b>Rs. <?php echo ($mfs); ?></b>
			</td>
		</tr>
		<tr align="left">
			<th><h3>Annually:</h3></th>
			<td><b>Rs. <?php echo ($mfs*12); ?></b>
			</td>
		</tr>
		<tr align="left">
			<th><h3>Life-Time(25 years): </h3></th>
			<td> <b>Rs. <?php echo ($mfs*12*25); ?></b></td>
		</tr>
	</table>
	</td>
	</tr>
	</table>


</body>
</html>