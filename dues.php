<?php
session_start();
include("connection.php");
$temp = $_SESSION['user_name'];
$query = "SELECT * FROM STUDENT WHERE enroll_no='$temp'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
?>

<?php
if(empty($_SESSION['user_name']))
{
header("Location: index.php");
}
?>

<?php $title = "Fees & Dues"; include('header_main.php'); ?>
<br />
<p class="dues">
Your balanced fee amount is&nbsp;&nbsp;&#8377;<?php echo "".$result['fees_1']; ?>
<br /><br />
Your current due amount is&nbsp;&nbsp;&#8377;<?php echo "".$result['fees_2']; ?></p>
<br /><br />
<?php include('footer.php'); ?>