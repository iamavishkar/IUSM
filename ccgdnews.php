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

<?php $title = "CCG&D News"; include('header_main.php'); ?>
<center>
<div class="container">   
  <table class="table table-striped">
    <tbody>
	<tr>
	<th>Posted on</th>
	<th><center>News Headline</center></th>
<tr>
        <td>08/10/2018</td>
        <td class="pull-right"><a href="#">Donald Trump has exectuted his plan</a></td>
      </tr>
<tr>
        <td>08/10/2018</td>
        <td class="pull-right"><a href="#">Donald Trump has exectuted his plan</a></td>
      </tr>
<tr>
        <td>08/10/2018</td>
        <td class="pull-right"><a href="#">Donald Trump has exectuted his plan</a></td>
      </tr>
<tr>
        <td>08/10/2018</td>
        <td class="pull-right"><a href="#">Donald Trump has exectuted his plan</a></td>
      </tr>
<tr>
        <td>08/10/2018</td>
        <td class="pull-right"><a href="#">Donald Trump has exectuted his plan</a></td>
      </tr>
<tr>
        <td>08/10/2018</td>
        <td class="pull-right"><a href="#">Donald Trump has exectuted his plan</a></td>
      </tr>
<tr>
        <td>08/10/2018</td>
        <td class="pull-right"><a href="#">Donald Trump has exectuted his plan</a></td>
      </tr>
<tr>
        <td>08/10/2018</td>
        <td class="pull-right"><a href="#">Donald Trump has exectuted his plan</a></td>
      </tr>
    </tbody>
  </table>
</div>
</center>
<?php include('footer.php'); ?>