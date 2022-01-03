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

<?php $title = "Question Papers"; include('header_main.php'); ?>

<ul class="nav nav-pills">
	<li class="active"><a data-toggle="pill" href="#odd_sem">Odd Sem</a></li>
  <li><a data-toggle="pill" href="#even_sem">Even Sem</a></li>
  </ul>

  
  <div class="tab-content" style="text-align: center;">
    <div id="odd_sem" class="tab-pane fade in active">
      <br />

<center>
<div class="container">   
  <table class="table table-striped">
    <tbody>
	<tr>
	<th>Last Modified</th>
	<th><center>Year of Papers</center></th>
<tr>
        <td>11/16/2017</td>
        <td class="pull-right"><a href="https://drive.google.com/drive/folders/11hakd4T4bNPCIjNaCcUisQRjgsPFoqi_">Question Paper (2012-2013)</a></td>
      </tr>
<tr>
        <td>11/16/2017</td>
        <td class="pull-right"><a href="https://drive.google.com/drive/folders/1KLTkkz9kJvimLm537uU5O9RkaE4ox5-q">Question Paper (2013-2014)</a></td>
      </tr>
<tr>
        <td>11/16/2017</td>
        <td class="pull-right"><a href="https://drive.google.com/drive/folders/1PqQcb8ksqR5IXw7Q1qHdb3qkhYdywT3C">Question Paper (2014-2015)</a></td>
      </tr>
<tr>
        <td>11/16/2017</td>
        <td class="pull-right"><a href="https://drive.google.com/drive/folders/1zGmoUSK9_0cACMBMj1qPU0j2JNwkvoQY">Question Paper (2015-2016)</a></td>
      </tr>
<tr>
        <td>11/16/2017</td>
        <td class="pull-right"><a href="https://drive.google.com/drive/folders/1awyJNVWsPhu9C2X0ghMnZTQobFyH4SYc">Question Paper (2016-2017)</a></td>
      </tr>

    </tbody>
  </table>
</div>
</center>

    </div>
    <div id="even_sem" class="tab-pane fade">
      <br />

<center>
<div class="container">   
  <table class="table table-striped">
    <tbody>
	<tr>
	<th>Last Modified</th>
	<th><center>Year of Papers</center></th>
    <tr>
        <td>11/16/2017</td>
        <td class="pull-right"><a href="https://drive.google.com/drive/folders/1VJUFB7kdRmw3p3zDVrpit_Q1fjSUFe34">Question Paper (2012-2013)</a></td>
      </tr>
<tr>
        <td>11/16/2017</td>
        <td class="pull-right"><a href="https://drive.google.com/drive/folders/1ahamB52AGwgmkzqDW7TTy8Xa1JTx3kxX">Question Paper (2013-2014)</a></td>
      </tr>
<tr>
        <td>11/16/2017</td>
        <td class="pull-right"><a href="https://drive.google.com/drive/folders/1VVf6SNEQVM6Zm4zZKq_oAR-Znc1HZqx6">Question Paper (2014-2015)</a></td>
      </tr>
<tr>
        <td>11/16/2017</td>
        <td class="pull-right"><a href="https://drive.google.com/drive/folders/13M7kJMcyMkSnyl3niYK_HLTiI-DvcXob">Question Paper (2015-2016)</a></td>
      </tr>
<tr>
        <td>11/16/2017</td>
        <td class="pull-right"><a href="https://drive.google.com/drive/folders/1l4hMppHYDQf4ViIm7OlEhHLjFIt0qi3r">Question Paper (2016-2017)</a></td>
      </tr>
    </tbody>
  </table>
</div>
</center>

    </div>
    </div>
<?php include('footer.php'); ?>