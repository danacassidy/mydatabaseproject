<?php
	include 'database.php';
	$query = "SELECT * FROM localnewspapers ORDER BY newspaper";
	$newspapers = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> Local Newspapers - Inventory </title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/table.css">
</head>

<body>
<table id="container"  class="table text-center table-bordered">

<h1>Local Newspaper Inventory</h1>

<button class="btn btn-dark" style="text-decoration:none;"><a href="enter_new_record.php">Add a local newspaper into the record</a></button>

<!--
     the form below is handled by the PHP file named in the action= attribute
-->

<table class="table text-center table-bordered table-hover">
	<tr>
	  <th>Newspaper</th>
	  <th>State</th>
	  <th>City</th>
	  <th>Link to website</th>
	</tr>


<?php while ($row = mysqli_fetch_assoc($newspapers)) :  ?>
<tr>
  <!-- notice how, above, the database record id becomes
       the id and value of the radio button -->
	<td><?php echo $row['newspaper']; ?></td>
  <td><?php echo $row['state']; ?></td>
  <td><?php echo $row['city']; ?></td>
  <td><?php echo $row['website_link']; ?></td>

</tr><!-- end of HTML table row -->

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->
</table>

<button class="btn btn-dark" style="text-decoration:none;"><a href="enter_new_record.php">Add a local newspaper into the record</a></button>

</table> <!-- close container -->
</body>
</html>
