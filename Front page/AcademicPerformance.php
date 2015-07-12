<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>
    Line Chart on a DateTime Axis Example - HTML5 jQuery Chart Plugin by jqChart
</title>
 <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./Signin Template for Bootstrap_files/ie-emulation-modes-warning.js"></script>

  

    <link rel="stylesheet" type="text/css" href="../../css/jquery.jqChart.css" />
    <link rel="stylesheet" type="text/css" href="../../css/jquery.jqRangeSlider.css" />
    <link rel="stylesheet" type="text/css" href="../../themes/smoothness/jquery-ui-1.10.4.css" />
    <script src="../../js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="../../js/jquery.mousewheel.js" type="text/javascript"></script>
    <script src="../../js/jquery.jqChart.min.js" type="text/javascript"></script>
    <script src="../../js/jquery.jqRangeSlider.min.js" type="text/javascript"></script>
    <!--[if IE]><script lang="javascript" type="text/javascript" src="../../js/excanvas.js"></script><![endif]-->

     


    
    <script lang="javascript" type="text/javascript">
        $(document).ready(function () {
            $('#jqChart').jqChart({
                title: { text: 'Line Chart' },
                tooltips: { type: 'shared' },
                animation: { duration: 1 },
                axes: [
                    {
                        location: 'bottom',
                        type: 'dateTime',
                        labels: {
                            stringFormat: 'm/d/yy'
                        }
                    }
                ],
                series: [
                    {
                        type: 'line',
                        title: 'Academic Performance Impact Analysis',
                        strokeStyle: '#418CF0',
                        lineWidth: 2,
                        data: [
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
//echo "Connected successfully";

$sql="select * from student_enrollement;";

$count=0;
$result = $conn->query($sql);
//echo $count;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "child " . $row["cost_child"]. " employment : " . $row["employment_increase"]. " " . $row["employment_increase"]. "<br>";
       
        $nongrad=$row["total_nongrad"];
        $grad=$row["total_grad"];
        $year=$row["date"];
        $literacy=($grad*100/($grad+$nongrad));
        if($count!=0)
        echo ",";
                        echo "[" .$year." ," .$literacy."]";

 $count++;                              
}

    
} 
else {
    echo "0 results";
}


$conn->close();
?>
                               ]
                    }
                    
                ]
            });
        });
    </script>

</head>
<body>
    <div class="navbar-wrapper">
    </div>
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
        <div id="jqChart" style="width: 900px; height: 300px;">
        </div>
    </div>
</body>
</html>
