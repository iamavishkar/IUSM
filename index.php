<?php session_start(); include('connection.php'); ?>

<?php
if(isset($_POST['submit']))
{
$enroll_num = $_POST['enrollnum'];
$pwd = $_POST['password'];
$query = "SELECT * FROM tble01_student WHERE student_enrollnum='$enroll_num' && student_password='$pwd'";
$data = mysqli_query($conn, $query);
$result = mysqli_num_rows($data);
if($result==1)
{
	$_SESSION['user']=$enroll_num;
	header('location: profile.php');
}
else
{
	$message = "Invalid enrollment number.\\nInvalid password.";
  	echo "<script type='text/javascript'>alert('$message');</script>";
}

}
?>

<?php include('header_index.php'); ?>
<center>
<form action="" method="post">
    <input type="text" class="form-control" name="enrollnum" placeholder="Enrollment Number" />
    <input type="password" class="form-control" name="password" placeholder="Password" />
  <button type="submit" value="login" name="submit" class="btn btn-default">Login</button>
</form>

<br />

<a href="parent.php">Parential login</a> <b>|</b> <a href="help.php">Forgot password?</a>
</center>
<br /><br />
<?php include('footer.php'); ?>