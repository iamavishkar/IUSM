<!Doctype html>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
<title>IUSMS - <?php echo $title; ?></title>
<head>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.1.0/css/all.css">

<script src="js/jquery.js"></script>
<script src="js/sidenav.js"></script>
<script src="js/validate.js"></script>
<script src="js/active.js"></script>
<script src="js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-default" id="header_main">
  <div class="container-fluid">
    <div class="navbar-header">
    <div class="togBtn">
    <button type="button" class="navbar-toggle" data-toggle="collapse"  onclick="openNav()">
      <i class="fal fa-bars"></i>
      </button>
    </div>
     
      <div class="title"><?php echo $title; ?></div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li class="active"><a href="profile.php"><i class="fal fa-user"></i> Profile</a></li>
      <li><a href="timetable.php"><i class="fal fa-clock"></i> Timetable</a></li>
      <li><a href="attendance.php"><i class="fal fa-user-check"></i> Attendance</a></li>
      <li><a href="notices.php"><i class="fal fa-bell"></i> News & Notices</a></li>
      <li><a href="ccgdnews.php"><i class="fal fa-bullhorn"></i> CCG&D News</a></li>
      <li><a href="dues.php"><i class="fal fa-rupee-sign"></i> Fees & Dues</a></li>
      <li><a href="papers.php"><i class="fal fa-file-alt"></i> Question Papers</a></li>
      <li><a href="calendar.php"><i class="fal fa-calendar-alt"></i> Calendar</a></li>
      <li><a href="logout.php"><i class="fal fa-sign-out"></i> Logout</a></li>
      </ul>
      
    </div>
  </div>
</nav>

<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
  <div class="sidenav_icon"><i class="fal fa-times"></i></div></a>

<a href="profile.php"><i class="fal fa-user"></i> Profile</a>
<a href="timetable.php"><i class="fal fa-clock"></i> Timetable</a>
<a href="attendance.php"><i class="fal fa-user-check"></i> Attendance</a>
<a href="notices.php"><i class="fal fa-bell"></i> News & Notices</a>
<a href="ccgdnews.php"><i class="fal fa-bullhorn"></i> CCG&D News</a>
<a href="dues.php"><i class="fal fa-rupee-sign"></i> Fees & Dues</a>
<a href="papers.php"><i class="fal fa-file-alt"></i> Question Papers</a>
<a href="calendar.php"><i class="fal fa-calendar-alt"></i> Calendar</a>
<a href="logout.php"><i class="fal fa-sign-out"></i> Logout</a>

  </div>
</div>
