<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>
    Bar Chart Example - HTML5 jQuery Chart Plugin by jqChart
</title>
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
echo "Connected successfully";

$sql="select * from economic_impact_region;";
$sql2="select * from economic_impact_hhf ;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "child " . $row["cost_child"]. " employment : " . $row["employment_increase"]. " " . $row["employment_increase"]. "<br>";
        $cost_child=$row["cost_child"];
        $employment_increase=$row["employment_increase"];
        $income_increase=$row["income_increase"];
        $shelter_increase=$row["shelter_increase"];
        $volunteer_hours=$row["volunteer_hours"];
    }
} else {
    echo "0 results";
}


$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
        echo "child " . $row2["cost_child"]. " employment : " . $row2["employment_increase"]. " " . $row2["employment_increase"]. "<br>";
        $cost_child2=$row2["cost_child"];
        $employment_increase2=$row2["employment_increase"];
        $income_increase2=$row2["income_increase"];
        $shelter_increase2=$row2["shelter_increase"];
        $volunteer_hours2=$row2["volunteer_hours"];
    }
} else {
    echo "0 results";
}
$conn->close();


    ?>
    <script lang="javascript" type="text/javascript">
        $(document).ready(function () {
            $('#jqChart').jqChart({
                title: { text: 'Bar Chart Comparison for Economic Impacts: ' },
                animation: { duration: 1 },
                shadows: {
                    enabled: true
                },
                series: [
                    {
                        type: 'bar',
                        title: 'Regional',
                        fillStyle: '#418CF0',
                        data: [['Increase in Average household Income of Students Family' , <?php echo $income_increase?>], ['Increase in Villagers Employment', <?php echo $employment_increase?>], ['Number of Villagers Sheltering in HHF School', <?php echo $shelter_increase?>],
                               ['Cost per child', <?php echo $cost_child?>], ['Community_volunteers_hours', <?php echo $volunteer_hours?>]]
                    },
                    {
                        type: 'bar',
                        title: 'Happy Hearts Fund',
                        fillStyle: '#FCB441',
                        data: [['A', <?php echo $income_increase2?>], ['Increase in Villagers Employment', <?php echo $employment_increase2?>], ['Number of Villagers Sheltering in HHF School', <?php echo $shelter_increase2?>],
                               ['Cost per child', <?php echo $child_cost2?>], ['Community_volunteers_hours', <?php echo $volunteer_hours2?>]]
                    }
                ]
            });
        });
    </script>

</head>
<body>
    <div>
        <div id="jqChart" style="width: 500px; height: 300px;"></div>
    </div>
</body>
</html>
