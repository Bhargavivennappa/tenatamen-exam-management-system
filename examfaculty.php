<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!--<link rel="icon" href="img/favicon.png" type="image/png" />-->
    <title>exam seating::student</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area white-header">
      <div class="main_menu">
        <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
              <input
                type="text"
                class="form-control"
                id="search_input"
                placeholder="Search Here"
              />
              <button type="submit" class="btn"></button>
              <span
                class="ti-close"
                id="close_search"
                title="Close Search"
              ></span>
            </form>
          </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand" href="index.html">
              <b><p style="color:orange;font-size:40px;padding:45px 30px;">TenTamen</p></b>
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
			  <li class="nav-item">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="examabout.html">About</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="examstudent.html">Student</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="examfaculty.php">Faculty</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
				
				<li class="nav-item">
                  <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Exam seating</h2><br>
                <div class="page_link">
                  <a style="font-size:20px;" href="index.html">Home</a>
                  <a style="font-size:20px;"href="examfaculty.php">Faculty</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
	<div class="con">
<!--Forms-->
	
   <div class="loginscene"><div class="page-header">
        <h1>Faculty</h1>
	
      </div>
  <div class="bs-example" data-example-id="simple-horizontal-form">
    <form class="form-horizontal" action="" method="POST">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Enter your name:</label>
        <div class="col-sm-10">
           	<input type="text" class="form-control" name="faculty" autofocus=""
           	value="<?php 
           	if(isset($_POST["faculty"])){
           		echo $_POST["faculty"];
           	}
           	?>">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default btn-info">Submit</button>
        </div>
    </form>
  </div>
</div>

	<h3>
		<?php
		if (isset($_POST["faculty"])){
			require ('connect.inc.php');
			$faculty = $_POST['faculty'];
			$sql = "SELECT * FROM room WHERE faculty = '$faculty' OR faculty2 = '$faculty'";
			$result = $connect->query($sql);
			
			if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
			        echo "You are alloted in<br>
					building:".$row["build"]."<br>
					floor:".$row["floor"]."<br>
	
			        ROOM No: " . $row["room"]. "<br>
			        Timing: " . $row["timing"]."<br><br>
			        Invigilator 1: ". $row["faculty"]."<br>
			        Invigilator 2: ". $row["faculty2"];
			    }
			} else {
			    echo "No Allotment found...!!!Check ur spelling";
			}
		}
		?>
	</h3>









	</div>

    </section>
    <!--================Contact Area =================-->

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/theme.js"></script>
  </body>
</html>
