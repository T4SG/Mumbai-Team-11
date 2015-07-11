<? php
	$conn =  mysqli_connect("http://ec2-52-74-235-163.ap-southeast-1.compute.amazonaws.com", "root", "root", "jpmc11");
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully<br>";

	$name = $_POST["schoolname"];
	$location = $_POST["location"];
	$y_built = $_POST["yearrebuilt"];
	$disaster = $_POST["disaster"];
	$d_name = $_POST["directorname"];
	$contact = $_POST["directorcontact"];
	$type = $_POST["type"];

	$sql = "INSERT INTO school (name ,location ,y_rebuilt ,disaster ,d_name ,contact ,type)
			VALUES ('$name', '$location', '$y_built', '$disaster', '$d_name', '$contact', '$type');";
	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}?>