<?php require('req_global.php') ;
$page = mysqli_query($conn, "SELECT * FROM webpage WHERE pageID = 2");
if (!$page){
	echo 'MySQL Error:' . mysqli_error($conn);
}
$page_row = mysqli_fetch_assoc($page);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="An Icon Font Generated By IcoMoon.io">
	<meta name="viewport" content="width=device-width">
	<title><?php echo $page_row['mmTitle']; ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/icomoon35944/style.css">
</head>
<body>
	<section>
		<div class="indexPage">
		<a href="<?php echo $page_row['mmLink']; ?>">
			<div class="glyph fs1">
				<div class="clearfix bshadow0 pbs">
					<span class="icon-mainlogo"></span>
				</div>
			</div>
		</a>
		</div>
	</section>			
</body>
<script src="scripts/jquery.min.js" type="text/javascript"></script>
<script src="scripts/jquery-2.1.0.js" type="text/javascript"></script>
    <script src="scripts/jquery.backgroundpos.min.js" type="text/javascript"></script>
<script type="text/javascript">
 	$(document).ready(function(){
 		$('.indexPage .fs1 span').animate({'opacity':'1'},5000)
 	})
 </script>
</html>