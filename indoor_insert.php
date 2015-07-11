<?php
	echo "hello";
	$conn =  mysqli_connect("localhost", "root", "code4good", "jpmc11");
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	echo"Hi<br>";
	echo "Connected successfully<br>";

	$school_id = 309;
	echo"$school_id<br>";

	$class_floor = $_POST["classRating"];
	$books = $_POST["libBookRating"];
	$water = $_POST["drinkWaterRating"];
	$furniture = $_POST["furRating"];
	$toilets = $_POST["toiletRating"];
	$electricity = $_POST["elecRating"];
	$fan = $POST["fansRating"];

	echo "$class_floor $books<br><br>";

	if($class_floor=="ok") $class_floor=1;
	else $class_floor=0;

	
	if($books=="ok") $books=1;
	else $books=0;

	
	if($water=="ok") $water=1;
	else $water = 0;

	
	if($furniture=="ok") $furniture=1;
	else $furniture=0;

	
	if($toilets=="ok") $toilets=1;
	else $toilets=0;
	
	
	if($electricity=="ok") $electricity=1;
	else $electricity=0;


	$date = date("Y/m/d");
	
	
	if($fan=="ok") $fan=1;
	else $fan=0;



	$sql = "INSERT INTO `indoors_req` (`school_id` ,`class_floor` ,`books` ,`water` ,`furniture` ,`toilets` ,`electricity` ,`date` ,`fan`)
		VALUES ('$school_id','$class_floor', '$books', '$water', '$furniture', '$toilets', '$electricity', '$date', '$fan');";
	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}


	echo "Here";
	 $roof = $_POST["roofRating"];
	 $o_paint = $_POST["outWallRating"];
	 $p_area = $_POST["playAreaRating"];
	 $p_tools = $_POST["playPiecesRating"];
	 $o_walk = $_POST["outWalkRating"];
	 $canteen = $_POST["foodRating"];
	 echo "End";

	 if($roof=="ok") $roof="1";
	 else $roof="0";
 
	 if($o_paint=="ok") $o_paint="1";
	 else $o_paint="0";

	 if($p_area=="ok") $p_area="1";
	 else $p_area="0";

	 if($p_tools=="ok") $p_tools="1";
	 else $p_tools="0";

	 if($o_walk=="ok") $o_walk="1";
	 else $o_walk="0";

	 if($canteen=="ok") $canteen="1";
	 else $canteen="0";

	$sql1="INSERT INTO `outdoors` (`roof` ,`o_paint` ,`p_area` ,`p_tools` ,`o-walk` ,`canteen` ,`school_id`)
	VALUES ('$roof', '$o_paint', '$p_area', '$p_tools', '$o_walk', '$canteen', '$school_id');";

	if (mysqli_query($conn, $sql1)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}


?>


