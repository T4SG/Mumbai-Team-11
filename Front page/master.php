<?php

	/*Opening a connection to localhost, with hostname, user, password and db specified*/
	$conn =  mysqli_connect("localhost", "root", "code4good", "jpmc11");
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully<br>";

	/*Extracting school information from the form*/
	$name=$_POST["schoolname"];
	$location=$_POST["location"];
	$y_built=$_POST["yearrebuilt"];
	$disaster=$_POST["disaster"];
	$d_name=$_POST["directorname"];

	$type=$_POST["type"];
	if($type=="Government")$type="0"; //1 = Private, 0 = Government
	else $type="1";

	$teacher=$_POST["teacher"];
	$community=$_POST["community"];


	/*Inserting values to the school table*/
	$sql4 = "INSERT INTO school (name ,location ,y_rebuilt ,disaster ,d_name ,type, teacher, community)
			VALUES ('$name', '$location', '$y_built', '$disaster', '$d_name', '$type', '$teacher', '$community');";

	if (mysqli_query($conn, $sql4)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	$school_id = mysqli_insert_id($conn);

	//-----------------------

	/*Extracting information about indoor requiremnets table*/

	$class_floor = $_POST["classRating"];
	$books = $_POST["libBookRating"];
	$water = $_POST["drinkWaterRating"];
	$furniture = $_POST["furRating"];
	$toilets = $_POST["toiletRating"];
	$electricity = $_POST["elecRating"];
	$fan = $POST["fansRating"];

	echo "$class_floor $books<br><br>";

	/*Converting to binary terms*/

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


	/*Inserting values to indoor requiremnets table*/
	$sql = "INSERT INTO `indoors_req` (`school_id` ,`class_floor` ,`books` ,`water` ,`furniture` ,`toilets` ,`electricity` ,`date` ,`fan`)
		VALUES ('$school_id','$class_floor', '$books', '$water', '$furniture', '$toilets', '$electricity', '$date', '$fan');";
	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}


	//------------------

	/*Extracting information about the outdoor requirements*/
	 $roof = $_POST["roofRating"];
	 $o_paint = $_POST["outWallRating"];
	 $p_area = $_POST["playAreaRating"];
	 $p_tools = $_POST["playPiecesRating"];
	 $o_walk = $_POST["outWalkRating"];
	 $canteen = $_POST["foodRating"];
	 echo "End";

	 /*Converting to binary terms*/

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

	/*Inserting values to the outdoor requirements*/
	$sql1="INSERT INTO `outdoors` (`roof` ,`o_paint` ,`p_area` ,`p_tools` ,`o-walk` ,`canteen` ,`school_id`)
	VALUES ('$roof', '$o_paint', '$p_area', '$p_tools', '$o_walk', '$canteen', '$school_id');";

	if (mysqli_query($conn, $sql1)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	//------------------


	/*Extracting values*/
	 $roof = $_POST["roofRating"];
	 $o_paint = $_POST["outWallRating"];
	 $p_area = $_POST["playAreaRating"];
	 $p_tools = $_POST["playPiecesRating"];
	 $o_walk = $_POST["outWalkRating"];
	 $canteen = $_POST["foodRating"];
	 //echo "End";

	 /*Binary terms*/
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

	 /*Inserting values in the table*/
	$sql2="INSERT INTO `outdoors` (`roof` ,`o_paint` ,`p_area` ,`p_tools` ,`o-walk` ,`canteen` ,`school_id`)
	VALUES ('$roof', '$o_paint', '$p_area', '$p_tools', '$o_walk', '$canteen', '$school_id');";

	if (mysqli_query($conn, $sql2)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}


	//---------------

	/*Extracting values*/
	$date1=date("Y/m/d");
	$comp_max=$_POST["comp_max"];
	$comp_avail=$_POST["comp_avail"];
	$table_max=$_POST["table_max"];
	$table_avail=$_POST["table_avail"];
	$chair_max=$_POST["chair_max"];
	$chair_avail=$_POST["chair_avail"];

	/*Inserting values in the table*/
	$sql3= "INSERT INTO `equipment` (`school_id` ,`date` ,`comp_max` ,`comp_avail` ,`table_max` ,`table_avail` ,`chair_max` ,`chair_avail`)
	VALUES ('$school_id', '$date1', '$comp_max', '$comp_avail', '$table_max', '$table_avail', '$chair_max', '$chair_avail');";

	if (mysqli_query($conn, $sql3)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	//--------
	/*Redirecting to logout.php*/

	$message = "Thank you for your time!";
	echo "<script type='text/javascript'>alert('$message');</script>";
	header('Location: index.php');
?>