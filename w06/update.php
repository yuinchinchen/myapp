<?php require('req_global.php') ;
$page1 = mysqli_query($conn, "SELECT * FROM webpage WHERE pageID = 1");
$page2 = mysqli_query($conn, "SELECT * FROM webpage WHERE pageID = 2");
$page3 = mysqli_query($conn, "SELECT * FROM webpage WHERE pageID = 3");
$page4 = mysqli_query($conn, "SELECT * FROM webpage WHERE pageID = 4");
$page5 = mysqli_query($conn, "SELECT * FROM webpage WHERE pageID = 5");

$page_row1 = mysqli_fetch_assoc($page1);
$page_row2 = mysqli_fetch_assoc($page2);
$page_row3 = mysqli_fetch_assoc($page3);
$page_row4 = mysqli_fetch_assoc($page4);
$page_row5 = mysqli_fetch_assoc($page5);

$feedback = array();

$item1 = '';
$location1 = '';
$pageID = '';

$pageID = 1;
if(isset($_GET['pageID']))
{
	$pageID = $_GET['pageID'];
}
if(isset($_POST['pageID']))
{
	$pageID = $_POST['pageID'];
}

/*------------------------------
| Evaluate Insert Form
------------------------------*/
if (isset($_POST['item1'])) {
	// $feedback[] = 'You used the insert form.';
	// convert to our standard variables

	echo'test';
	
	$item1 = $_POST['item1'];
	$location1 = $_POST['location1'];
	
	// required fields
	// add the user to the db
	
		$update_sql = "
			UPDATE info 
			SET
				item = '" . $item1 . "',
				location = '" . $location1 . "'
			WHERE pageID = " . $pageID . "
		";
		if(!mysqli_query($conn, $update_sql))
		{
			echo 'Oops' . mysqli_error($conn);
		}
		else
		{
			header('Location:find_page1.php?update=success');
			exit;
		}

	

}


$sql = "SELECT * FROM info WHERE pageID =" . $pageID;
$result = mysqli_query($conn, $sql);
$item = mysqli_fetch_assoc($result);
$pageID = $item ['pageID'];
$items = $item ['item'];
$location = $item ['location'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="An Icon Font Generated By IcoMoon.io">
	<meta name="viewport" content="width=device-width">
	<title><?php echo $page_row4['mmTitle']; ?></title>
	
	<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/icomoon35944/style.css">
</head>
<body>
	<section>
		<form action="update.php" method="post">
					<input type="hidden" name="pageID" value="<?php echo $pageID; ?>">
					
					<table border="1" cellpadding="5" cellspacing="0" width="50%">
						<tr>
							<td><?php echo $pageID; ?></td>
							<td><input id="item1"type="text" name="item1" value="<?php echo $items; ?>"></td>
							<td><input id="location1" type="text" name="location1" value="<?php echo $location; ?>"></td>
						</tr>
						
					</table>
		
					<div class="row">
						<input type="submit" value="Update">
					</div>
					
				</form>
		<div class="bottomLine">
			<a href="<?php echo $page_row5['mmLink']; ?>">
				<div class="glyph fs1">
					<div class="clearfix bshadow0 pbs">
						<span class="icon-arrow"></span>
					</div>
				</div>
			</a>
		<!-- <a href="second_page.html"> -->
				<div class="glyph fs1">
					<div class="clearfix bshadow0 pbs">
						<span class="icon-jclogo"></span>
					</div>
				</div>
			<!-- </a> -->
			<!-- <a href="second_page.html"> -->
				<div class="glyph fs1">
					<div class="clearfix bshadow0 pbs">
						<span class="icon-exit"></span>
					</div>
				</div>
			<!-- </a> -->
		</div>
	</section>			
</body>
<script src="scripts/jquery.min.js" type="text/javascript"></script>
<script src="scripts/jquery-2.1.0.js" type="text/javascript"></script>
    <script src="scripts/jquery.backgroundpos.min.js" type="text/javascript"></script>
<script type="text/javascript">
 
 </script>
</html>