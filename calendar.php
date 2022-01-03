<?php
session_start();
include("connection.php");
?>

<?php
if(empty($_SESSION['user_name']))
{
header("Location: index.php");
}
?>

<?php $title = "Calendar"; include('header_main.php'); ?>
<p class="calendar">Odd semester academic calendar: 2018-19</p>
<center>
<iframe src="http://docs.google.com/gview?url=http://iul.ac.in/PDF/AcademicCalendarOdd%20Semester%282018-19%29.pdf&embedded=true" style="width:600px; height:450px;" frameborder="0"></iframe>
</center>
<br />
<?php include('footer.php'); ?>