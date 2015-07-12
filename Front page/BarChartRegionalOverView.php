<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>
    Bar Chart Example - HTML5 jQuery Chart Plugin by jqChart
</title>
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./Signin Template for Bootstrap_files/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
    <link rel="stylesheet" type="text/css" href="../../css/jquery.jqChart.css" />
    <link rel="stylesheet" type="text/css" href="../../css/jquery.jqRangeSlider.css" />
    <link rel="stylesheet" type="text/css" href="../../themes/smoothness/jquery-ui-1.10.4.css" />
    <script src="../../js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="../../js/jquery.mousewheel.js" type="text/javascript"></script>
    <script src="../../js/jquery.jqChart.min.js" type="text/javascript"></script>
    <script src="../../js/jquery.jqRangeSlider.min.js" type="text/javascript"></script>
    <!--[if IE]><script lang="javascript" type="text/javascript" src="../../js/excanvas.js"></script><![endif]-->
    
        <?php

$servername = "localhost";
$username = "root";
$password = "code4good";
$dbname = "jpmc11";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "";

$sql="select * from regional_overview;";
$sql2="select * from regional_overview_hhf ;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "child " . $row["cost_child"]. " employment : " . $row["employment_increase"]. " " . $row["employment_increase"]. "<br>";
        $attendance_rate=$row["attendence_rate"];
        $computer_literacy=$row["computer_literacy"];
        $language_literacy=$row["language_literacy"];
        $retention_rate=$row["retention_rate"];
        $tertiary=$row["tertiary"];
    }
} else {
    echo "0 results";
}


$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
       // echo "child " . $row2["attendence_rate"]. " employment : " . $row2["computer_literacy"]. " " . $row2["language_literacy"]. "<br>";
        $attendance_rate2=$row2["attendence_rate"];
        $computer_literacy2=$row2["computer_literacy"];
        $language_literacy2=$row2["language_literacy"];
        $retention_rate2=$row2["retention_rate"];
        $tertiary2=$row2["tertiary"];
    }
} else {
    echo "0 results";
}
$conn->close();


    ?>
    <script lang="javascript" type="text/javascript">
        $(document).ready(function () {
            $('#jqChart').jqChart({
                title: { text: 'Bar Chart Comparison for Regional Overview: ' },
                animation: { duration: 1 },
                shadows: {
                    enabled: true
                },
                series: [
                    {
                        type: 'bar',
                        title: 'Regional',
                        fillStyle: '#418CF0',
                        data: [['Attendance Rate' , <?php echo $attendance_rate?>], ['Computer Literacy', <?php echo $computer_literacy?>], ['Language Literacy', <?php echo $language_literacy?>],
                               ['Students Attending Tertiary College', <?php echo $tertiary ?>], ['Retention Rate', <?php echo $retention_rate?>]]
                    },
                    {
                        type: 'bar',
                        title: 'Happy Hearts Fund',
                        fillStyle: '#FCB441',
                        data: [['Attendance Rate' , <?php echo $attendance_rate2 ?>], ['Computer Literacy', <?php echo $computer_literacy2 ?>], ['Language Literacy', <?php echo $language_literacy2 ?>],
                               ['Students Attending Tertiary College', <?php echo $tertiary2 ?>], ['Retention Rate', <?php echo $retention_rate2 ?>]]
                    }
                ]
            });
        });
    </script>

</head>
<body>

  

    <div class="container">
<nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="nav" href="index.php"><img src="logo1.png" height="50"></img></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li ><a target="_blank" href="BarChartRegionalOverView.php">Bar Chart For Regional Overview</a></li>
                <li><a target="_blank" href="AcademicPerformance.php">Academic Performance</a></li>
                <li><a target="_blank" href="BarChartEconomicalImpact.php">Bar Chart Economic Impact</a></li>
                 
              </ul>
            </div>
          </div>
        </nav>

    </div>
    <div>
        <div id="jqChart" style="width: 800px; height: 300px;"></div>
    </div>
</body>
</html>
