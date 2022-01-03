<?php
session_start();
include("connection.php");
if(empty($_SESSION['user']))
{
header("Location: index.php");
}
$temp = $_SESSION['user'];
$query = "SELECT * FROM tble01_student WHERE student_enrollnum='$temp'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
?>

<?php $title = "Profile"; include('header_main.php'); ?>
<center><img src="<?php echo "".$result['student_avatar']; ?>" alt="avatar" class="img-circle" height=92 width="92" /></center>
<br />
<center>
<div class="container">   
  <table class="table table-striped">
    <tbody>
      <tr>
        <td><b>Student Name</b></td>
        <td class="mid-td"><?php echo $result['student_fname']. " " .$result['student_lname']; ?></td>
      </tr>
      <tr>
        <td><b>Father Name</b></td>
        <td class="mid-td"><?php echo "".$result['student_fathername']; ?></td>
      </tr>
<tr>
        <td><b>Mother Name</b></td>
        <td class="mid-td"><?php echo "".$result['student_mothername']; ?></td>
      </tr>
<tr>
        <td><b>Enrollment No.</b></td>
        <td class="mid-td"><?php echo "".$result['student_enrollnum']; ?></td>
      </tr>
<tr>
        <td><b>Roll No.</b></td>
        <td class="mid-td"><?php echo "".$result['student_rollnum']; ?></td>
      </tr>
<tr>
<?php
$temp1=$result['student_id'];
$query1 = "SELECT * FROM tble02_course WHERE student_id='$temp1'";
$data1 = mysqli_query($conn, $query1);
$result1 = mysqli_fetch_assoc($data1);
?>
        <td><b>Branch Name</b></td>
        <td class="mid-td"><?php echo $result1['course_name']; ?></td>
      </tr>
<tr>
        <td><b>Semester</b></td>
        <td class="mid-td"><?php echo "".$result1['course_semester']; ?></td>
      </tr>
<tr>
        <td><b>Date of Birth</b></td>
        <td class="mid-td"><?php echo "".$result['student_dob']; ?></td>
      </tr>
    </tbody>
  </table>
</div>
</center>
<?php include('footer.php'); ?>