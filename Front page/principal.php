<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Survey</title>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background: #eee;
        }
        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin .checkbox {
            font-weight: normal;
        }
        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>

<body>
    <?php session_start(); $user=$_SESSION[ "username"]; $message=$_SESSION[ "message"]; if($message=="loggedin" ) echo "
                        <h2>Welcome to HHF $user</h2>"; ?>
    <!-- NAVBAR
      ================================================== -->

    <body waid71fa0d88-5390-4b5b-a2f4-e45fa93d85e2="SA password protect entry checker">
        <div class="navbar-wrapper">
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
                            <a class="nav" href="hhf.html"></a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Principal</a>
                                </li>
                                <li>
                                    <a href="logout.php">Logout</a>
                                </li>
                                <li class="dropdown">
                                    <a href="http://getbootstrap.com/examples/carousel/#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown 
                                                            <span class="caret"></span>
                                                        </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Carousel
    ================================================== -->
        <div class="container">
            <div class="well">
                <p>Please Enter the form to help us assist you in the rehabilitation process.</p>
            </div>
            <form role="form-signin" method="POST" action="master.php">
                <!--form-->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="contacts">
                                <u>
                                                        <b> Contacts and Data  
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="school-name">School Name:</label>
                                                        <input type="text" required class="form-control" name ="schoolname" id="schoolname">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="location">Location:</label>
                                                            <input type="text" required class="form-control" name="location" id="location">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="Year Rebuilt">Year Rebuilt:</label>
                                                                <input type="text" required  class="form-control" name="yearrebuilt" id="yearrebuilt">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="Year Rebuilt">Type of Disaster:</label>
                                                                    <input type="text" required  class="form-control" name="disaster" id="disaster">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="Year Rebuilt">Disaster Year :</label>
                                                                        <input type="text"  required class="form-control" name="disasteryear" id="disasteryear">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="Year Rebuilt">Director's Name:</label>
                                                                            <input type="text" required  class="form-control" name="directorname" id="directorname">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="Year Rebuilt">Director's Contact Information:</label>
                                                                                <input type="text" required  class="form-control" name="directorcontact" id="directorcontact">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label for="contacts">
                                                                                        <u>
                                                                                            <b> Numbers  
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="teacher">No of teachers:</label>
                                                                                            <input type="text" required  class="form-control" name ="teacher" id="teacher">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="no-children">
                                                                                                    <b>
                                                                                                        <u> No of children:
                                                                                                        </label>
                                                                                                        <input type="text" required  class="form-control" name="no-children" id="no-children">
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                            <label for="community">No of Community members:</label>
                                                                                                            <input type="text" required  class="form-control" name="community" id="community">
                                                                                                            </div>
                                                                                                            <div class="form-group">
                                                                                                                <label for="year">Year:</label>
                                                                                                                <input type="text" required  class="form-control" name ="year" id="year">
                                                                                                                </div>
                                                                                                                <div class="form-group">
                                                                                                                    <label for="no_students8">Total No of Students:</label>
                                                                                                                    <input type="text"  required class="form-control" name ="no_students8" id="no_students8">
                                                                                                                    </div>
                                                                                                                    <div class="form-group">
                                                                                                                        <label for="no_students9">Total No of Graduated:</label>
                                                                                                                        <input type="text"  required class="form-control" name ="no_students9" id="no_students9">
                                                                                                                        </div>
                                                                                                                        <div class="form-group">
                                                                                                                            <label for="pp">School:</label>
                                                                                                                            <label for="p5"> Government </label>
                                                                                                                            <input type="radio"  name="type" value="Government">
                                                                                                                                <label for="p4"> Private </label>
                                                                                                                                <input type="radio"  name="type" value="Private">
                                                                                                                                </div>
                                                                                                                                <div>
                                                                                                                                    <button type="submit" class="btn btn-default">Submit</button>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <!--end of clumn 2-->
                                                                                                                            <div class="col-md-4">
                                                                                                                                <div class="form-group">
                                                                                                                                    <label for="contacts">
                                                                                                                                        <u>
                                                                                                                                            <b> EQUIPMENT INFORMATION  
                                                                                                                                            </label>
                                                                                                                                        </div>
                                                                                                                                        <div class="form-group">
                                                                                                                                            <table border="0">
                                                                                                                                                <tr>
                                                                                                                                                    <th>Equipments&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                                                                                                                                    <th>Availability</th>
                                                                                                                                                    <th>Max</th>
                                                                                                                                                </tr>
                                                                                                                                                <tr>
                                                                                                                                                    <td>Computers</td>
                                                                                                                                                    <td>
                                                                                                                                                        <input type="number" class="form-control" min="0" id="comp_avail" name = "comp_avail"  required >
                                                                                                                                                        </td>
                                                                                                                                                        <td>
                                                                                                                                                            <input type="number" class="form-control" min="0" id="comp_max" name = "comp_max"  required >
                                                                                                                                                            </td>
                                                                                                                                                        </tr>
                                                                                                                                                        <tr>
                                                                                                                                                            <td>Tables</td>
                                                                                                                                                            <td>
                                                                                                                                                                <input type="number" class="form-control" min="0" id="table_avail" name = "table_avail"  required >
                                                                                                                                                                </td>
                                                                                                                                                                <td>
                                                                                                                                                                    <input type="number" class="form-control" min="0" id="table_max" name = "table_max"  required >
                                                                                                                                                                    </td>
                                                                                                                                                                </tr>
                                                                                                                                                                <tr>
                                                                                                                                                                    <td>Chairs</td>
                                                                                                                                                                    <td>
                                                                                                                                                                        <input type="number" class="form-control" min="0" id="chair_avail" name = "chair_avail"  required >
                                                                                                                                                                        </td>
                                                                                                                                                                        <td>
                                                                                                                                                                            <input type="number" class="form-control" min="0" id="chair_max" name = "chair_max"  required >
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>
                                                                                                                                                                        <tr>
                                                                                                                                                                        </table>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                            <center>
                                                                                                                                                                <div class="form-group">
                                                                                                                                                                    <label for="contacts">
                                                                                                                                                                        <u>
                                                                                                                                                                            <b> Condition and Adequacy  
                                                                                                                                                                            </label>
                                                                                                                                                                        </div>
                                                                                                                                                                    </center>
                                                                                                                                                                    <div class="row">
                                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                                            <table class="table "border="0">
                                                                                                                                                                                <tr>
                                                                                                                                                                                    <th>AREA</th>
                                                                                                                                                                                    <th>RATING
                                                                                                                                                                                    </b>
                                                                                                                                                                                </th>
                                                                                                                                                                            </tr>
                                                                                                                                                                        </thead>
                                                                                                                                                                        <tbody>
                                                                                                                                                                            <tr>
                                                                                                                                                                                <td>ROOF</td>
                                                                                                                                                                                <td>OK
                                                                                                                                                                                    <input type="radio" name="roofRating" value="ok" required />&nbsp;&nbsp;&nbsp; NEED FIXING
                                                                                                                                                                                    <input type="radio" name="roofRating" value="Need Fixing" />
                                                                                                                                                                                </td>
                                                                                                                                                                            </tr>
                                                                                                                                                                            <tr>
                                                                                                                                                                                <td>OUTSIDE WALL's PaINTING</td>
                                                                                                                                                                                <td>OK
                                                                                                                                                                                    <input type="radio" name="outWallRating" value="ok" required/>&nbsp;&nbsp;&nbsp;&nbsp; NEED FIXING
                                                                                                                                                                                    <input type="radio" name="outWallRating" value="Need Fixing" />
                                                                                                                                                                                </td>
                                                                                                                                                                            </tr>
                                                                                                                                                                            <tr>
                                                                                                                                                                                <td>INTERNAL WALL's PAINTING</td>
                                                                                                                                                                                <td>OK
                                                                                                                                                                                    <input type="radio" name="intWallRating" value="ok" required/> &nbsp;&nbsp;&nbsp;NEED FIXING
                                                                                                                                                                                    <input type="radio" name="intWallRating" value="Need Fixing" />
                                                                                                                                                                                </td>
                                                                                                                                                                            </tr>
                                                                                                                                                                            <tr>
                                                                                                                                                                                <td>CLASSROOM FLOOR</td>
                                                                                                                                                                                <td>OK
                                                                                                                                                                                    <input type="radio" name="classRating" value="ok" required/> &nbsp;&nbsp;&nbsp;NEED FIXING
                                                                                                                                                                                    <input type="radio" name="classRating" value="Need Fixing" />
                                                                                                                                                                                </td>
                                                                                                                                                                            </tr>
                                                                                                                                                                            <tr>
                                                                                                                                                                                <td>PLAY AREA(sport pitch ground)</td>
                                                                                                                                                                                <td>OK
                                                                                                                                                                                    <input type="radio" name="playAreaRating" value="ok" required/> &nbsp;&nbsp;&nbsp;NEED FIXING
                                                                                                                                                                                    <input type="radio" name="playAreaRating" value="Need Fixing" />
                                                                                                                                                                                </td>
                                                                                                                                                                            </tr>
                                                                                                                                                                            <tr>
                                                                                                                                                                                <td>PLAYGROUND PIECES</td>
                                                                                                                                                                                <td>OK
                                                                                                                                                                                    <input type="radio" name="playPiecesRating" value="ok" required/> &nbsp;&nbsp;&nbsp;NEED FIXING
                                                                                                                                                                                    <input type="radio" name="playPiecesRating" value="Need Fixing" />
                                                                                                                                                                                </td>
                                                                                                                                                                            </tr>
                                                                                                                                                                            <tr>
                                                                                                                                                                                <td>OUTSIDE WALKWAYS FLOOR</td>
                                                                                                                                                                                <td>OK
                                                                                                                                                                                    <input type="radio" name="outWalkRating" value="ok" required/> &nbsp;&nbsp;&nbsp;NEED FIXING
                                                                                                                                                                                    <input type="radio" name="outWalkRating" value="Need Fixing" />
                                                                                                                                                                                </td>
                                                                                                                                                                            </tr>
                                                                                                                                                                            <tr>
                                                                                                                                                                                <td>TEACHER's ROOM</td>
                                                                                                                                                                                <td>OK
                                                                                                                                                                                    <input type="radio" name="techRoomRating" value="ok" required/>&nbsp;&nbsp;&nbsp; NEED FIXING
                                                                                                                                                                                    <input type="radio" name="techRoomRating" value="Need Fixing" />
                                                                                                                                                                                </td>
                                                                                                                                                                            </tr>
                                                                                                                                                                            <tr>
                                                                                                                                                                                <td>TOILETS</td>
                                                                                                                                                                                <td>OK
                                                                                                                                                                                    <input type="radio" name="toiletRating" value="ok" required/>&nbsp;&nbsp;&nbsp; NEED FIXING
                                                                                                                                                                                    <input type="radio" name="toiletRating" value="Need Fixing" />
                                                                                                                                                                                </td>
                                                                                                                                                                            </tr>
                                                                                                                                                                        </table>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="col-md-6">
                                                                                                                                                                        <table class="table "border="0">
                                                                                                                                                                            <tr>
                                                                                                                                                                                <th>AREA</th>
                                                                                                                                                                                <th>RATING
                                                                                                                                                                                </b>
                                                                                                                                                                            </th>
                                                                                                                                                                        </tr>
                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>DRINKING WATER</td>
                                                                                                                                                                            <td>OK
                                                                                                                                                                                <input type="radio" name="drinkWaterRating" value="ok" required/>&nbsp;&nbsp;&nbsp; NEED FIXING
                                                                                                                                                                                <input type="radio" name="drinkWaterRating" value="Need Fixing" />
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>
                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>FURNITURE (DESK/CHAIR)</td>
                                                                                                                                                                            <td>OK
                                                                                                                                                                                <input type="radio" name="furRating" value="ok" required/>&nbsp;&nbsp;&nbsp; NEED FIXING
                                                                                                                                                                                <input type="radio" name="furRating" value="Need Fixing" />
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>
                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>EDUCATIONAL STRUCTURE</td>
                                                                                                                                                                            <td>OK
                                                                                                                                                                                <input type="radio" name="eduStructRating" value="ok" required/> &nbsp;&nbsp;&nbsp;NEED FIXING
                                                                                                                                                                                <input type="radio" name="eduStructRating" value="Need Fixing" />
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>
                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>EDUCATIONAL MATERIALS(textbooks,pencils,etc.)</td>
                                                                                                                                                                            <td>OK
                                                                                                                                                                                <input type="radio" name="eduStructMaterial" value="ok" required/> &nbsp;&nbsp;&nbsp;NEED FIXING
                                                                                                                                                                                <input type="radio" name="eduStructMaterial" value="Need Fixing" />
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>
                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>LIBRARY BOOKS(if any)</td>
                                                                                                                                                                            <td>OK
                                                                                                                                                                                <input type="radio" name="libBookRating" value="ok" required/>&nbsp;&nbsp;&nbsp; NEED FIXING
                                                                                                                                                                                <input type="radio" name="libBookRating" value="Need Fixing" />
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>
                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>FOOD AREAS/CAFETERIAS</td>
                                                                                                                                                                            <td>OK
                                                                                                                                                                                <input type="radio" name="foodRating" value="ok" required/> &nbsp;&nbsp;&nbsp;NEED FIXING
                                                                                                                                                                                <input type="radio" name="foodRating" value="Need Fixing" />
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>
                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>FANS(if any)</td>
                                                                                                                                                                            <td>OK
                                                                                                                                                                                <input type="radio" name="fansRating" value="ok" required/>&nbsp;&nbsp;&nbsp; NEED FIXING
                                                                                                                                                                                <input type="radio" name="fansRating" value="Need Fixing" />
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>
                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>ELECTRICITY</td>
                                                                                                                                                                            <td>OK
                                                                                                                                                                                <input type="radio" name="elecRating" value="ok" required/>&nbsp;&nbsp;&nbsp; NEED FIXING
                                                                                                                                                                                <input type="radio" name="elecRating" value="Need Fixing" />
                                                                                                                                                                            </td>
                                                                                                                                                                        </tr>
                                                                                                                                                                    </tbody>
                                                                                                                                                                </table>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </form>
                                                                                                                                                    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                                                                                                                                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                                                                                                                                                    <!-- Include all compiled plugins (below), or include individual files as needed -->
                                                                                                                                                    <script src="js/bootstrap.min.js"></script>
                                                                                                                                                </body>
                                                                                                                                            </html>