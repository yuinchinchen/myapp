<?php require('req_global.php') ;
$page1 = mysqli_query($conn, "SELECT * FROM webpage WHERE pageID = 1");
$page2 = mysqli_query($conn, "SELECT * FROM webpage WHERE pageID = 2");
$page3 = mysqli_query($conn, "SELECT * FROM webpage WHERE pageID = 3");
$page_row1 = mysqli_fetch_assoc($page1);
$page_row2 = mysqli_fetch_assoc($page2);
$page_row3 = mysqli_fetch_assoc($page3);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="An Icon Font Generated By IcoMoon.io">
	<meta name="viewport" content="width=device-width">
	<title><?php echo $page_row1['mmTitle']; ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/icomoon35944/style.css">
</head>
<body>
	<section>
		<a href="<?php echo $page_row3['mmLink']; ?>">
			<div class="glyph fs1">
				<div class="clearfix bshadow0 pbs">
					<span class="icon-store"></span>
				</div>
			</div>
		</a>
		<a href="find_page1.php">
			<div class="glyph fs1">
				<div class="clearfix bshadow0 pbs">
					<span class="icon-glass"></span>
				</div>
			</div>
		</a>
		<div class="bottomLine">
			<a href="<?php echo $page_row1['mmLink']; ?>">
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