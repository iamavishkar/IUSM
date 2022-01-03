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

<?php $title = "Attendance"; include('header_main.php'); ?>
<p class="attendance">
Your classroom attendance percentage is: 73.49%</p>

<center>
<div class="container">   
  <table class="table table-striped">
    <tbody>
	<tr>
	<th><center>Subject Name</center></th>
	<th>Held</th>
	<th>Present</th>
      <tr>
        <td>Essential Professional Communication</td>
        <td>30</td>
        <td>25</td>
      </tr>
<tr>
        <td>Fundamental of Environment Science</td>
        <td>37</td>
        <td>23</td>
      </tr>
<tr>
        <td>Mathematics</td>
        <td>34</td>
        <td>12</td>
      </tr>
<tr>
        <td>Programming in C</td>
        <td>24</td>
        <td>22</td>
      </tr>
<tr>
        <td>Fundamental of Computers</td>
        <td>29</td>
        <td>25</td>
      </tr>
<tr>
        <td>Computer Application LAB</td>
        <td>12</td>
        <td>10</td>
      </tr>
<tr>
        <td>C Programming LAB</td>
        <td>15</td>
        <td>14</td>
      </tr>
<tr>
        <td>Professional Communication LAB</td>
        <td>12</td>
        <td>12</td>
      </tr>
    </tbody>
  </table>
</div>
<p><a href="explore-attendance.php"><b>Explore attendance subjectwise?</b></a></p>
<br />
</center>
<?php include('footer.php'); ?>