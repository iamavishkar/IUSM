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

<?php $title = "Timetable"; include('header_main.php'); ?>
<p class="timetable">
<?php
echo date("l") . ", ";
echo date("d") . " ";
echo date("F") . " ";
echo date("Y");
?></p>
<center>
<div class="container">   
  <table class="table table-striped">
    <tbody>
	<tr>
	<th>Period No.</th>
	<th>Subject Code</th>
      <tr>
        <td>P1</td>
        <td>CA 101</td>
      </tr>
      <tr>
        <td>P2</td>
        <td>CA 102</td>
      </tr>
      <tr>
        <td>P3</td>
        <td>CA 103</td>
      </tr>
<tr>
        <td>P4</td>
        <td>CA 104</td>
      </tr>
<tr>
        <td>P5</td>
        <td>LN 104</td>
      </tr>
<tr>
        <td>P6</td>
        <td>ES 115</td>
      </tr>
<tr>
        <td>P7</td>
        <td>MT 103</td>
      </tr>
    </tbody>
  </table>
</div>
</center>
<?php include("footer.php"); ?>