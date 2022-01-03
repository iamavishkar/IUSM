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

<?php $title = "Notices"; include('header_main.php'); ?>

<ul class="nav nav-pills">
	<li class="active"><a data-toggle="pill" href="#notifications">Notifications</a></li>
  <li><a data-toggle="pill" href="#deptnews">Dept. News</a></li>
  </ul>

  
  <div class="tab-content" style="text-align: center;">
    <div id="notifications" class="tab-pane fade in active">
      <br />

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

    </div>
    <div id="deptnews" class="tab-pane fade">
      <br />

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

    </div>
    </div>
<?php include('footer.php'); ?>