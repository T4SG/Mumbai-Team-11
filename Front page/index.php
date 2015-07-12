<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="logoTop.jpg">

    <title>HAPPY HEARTS FUNDS</title>

    <!-- Bootstrap core CSS -->
    <link href="cssFileMIN.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./Carousel Template for Bootstrap_files/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="cssFile.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body waid71fa0d88-5390-4b5b-a2f4-e45fa93d85e2="SA password protect entry checker">
    <?php
session_start();
$user=$_SESSION["username"];
$message=$_SESSION["message"];
if($message=="loggedin")
  echo"<h2>Welcome to HHF $user</h2>";
?>
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
              <a class="nav" href="index.php"><img src="logo1.png" height="50"></img></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="happyheartsfund.org/about">About</a></li>
                <li><a href="#">Contact</a></li>
                 <li><a href="Login.php">Sign-In</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              
              
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="img2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              
              </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="http://getbootstrap.com/examples/carousel/#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="http://getbootstrap.com/examples/carousel/#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="imgCircle1.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Story from INDONESIA</h2>
          <p>The Head Teacher at TK Pringan Adji, Indonesia

This new kindergarten is a great change especially for our children, who can now enjoy to learn in a comfortable place, they can improve their learning skills thanks to a variety of toys provided by donors. Also they really enjoy their nice and new playground, which help develop the children motor skills in a fun way.

The biggest change is that now more and more parents want to send their children to TK Priangan Adji. They are confident and proud of our kindergarten. We are very proud of that and very grateful to Happy Hearts Fund.</p>
          <p><a class="btn btn-default" href="http://getbootstrap.com/examples/carousel/#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="imgCircle2.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Story from Mexico</h2>
          <p>A student from 16 De Septiembre School in Veracruz, Mexico

I am 11 years old and I studied at a very poor school with very small rooms.

Now, thanks to Happy Hearts I have a large school in which we are all delighted. The school is very nice and everyone can study at ease.

When I grow up, I want to be a doctor because I like to help others. Now, in my new school there have been many changes, there are no accidents and classrooms are more spacious and we are more healthy.</p>
          <p><a class="btn btn-default" href="http://getbootstrap.com/examples/carousel/#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="imgCircle3.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="http://getbootstrap.com/examples/carousel/#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">REBUILDING AFTER THE SPOTLIGHT <span class="text-muted"></span></h2>
          <p class="lead"><B>Happy Hearts Fund rebuilds safe-resilient schools in areas impacted by natural disasters.</B>

			We work during the gap period when children are forgotten after emergency response is complete, bringing hope and empowerment to generations of children and entire communities.</p>
        </div>
        <div class="col-md-5">
		<br><br><br><br>
          <img src="middImage.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">HISTORY OF HAPPY HEARTS FUND <span class="text-muted"></span></h2>
          <p class="lead"><b>History of Happy Hearts Fund</b>
Founded in 2005 by Petra Nemcova in the wake of the 2004 Indian Ocean tsunami, Happy Hearts Fund works to restore hope and grant new opportunities to children and communities affected by natural disasters.  By the beginning of 2011, Happy Hearts Fund had rebuilt 50 schools in Indonesia, Thailand, Mexico and Peru. To commemorate the 10-year anniversary of the tsunami, Happy Hearts Fund will open its 100th school by the end of 2014.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img src="histo.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">SCHOOLS THAT NEED YOUR HELP
<span class="text-muted"></span></h2>
          <p class="lead"><b>DIVINO NINO JESUS SECONDARY SCHOOL<b>
<br>
Chincha, Peru
<br>
In August of 2007 a 8.0 magnitude earthquake struck Peru destroying the Divino Nino Jesus primary school in Chincha. Happy Hearts Fund, SURA  and Lexington Partners jointly rebuilt the school in 2012.</p>
        <p class="lead"><b>JOSE EMILIO PACHECO BERNY TELESECONDAY SCHOOL<b>
<br>
Coscomatepec, Veracruz Mexico<br>
Each year the Jose Emilio Pacheco Berny Telesecondary school is damaged by annual floods. This causes its 80 students to miss weeks of classes as the school recovers. The current structure is very old, unsafe and will continue to be flooded each year.</p>
        </div>
        <div class="col-md-5">
          <img src="peru.jpg" alt="Generic placeholder image">
          <img src="mexico.jpeg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="http://getbootstrap.com/examples/carousel/#">Back to top</a></p>
        <p>© 2014 Company, Inc. · <a href="http://getbootstrap.com/examples/carousel/#">Privacy</a> · <a href="http://getbootstrap.com/examples/carousel/#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Carousel Template for Bootstrap_files/jquery.min.js"></script>
    <script src="./Carousel Template for Bootstrap_files/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="./Carousel Template for Bootstrap_files/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Carousel Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script>
  

</body></html>