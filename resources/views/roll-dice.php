<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
h1 {
	font-size: 60px;
	text-align: center;
}
</style>
</head>
<body>

<h1>Random Number is:</h1>
<h1><?php echo $number; ?></h1>
<h1>The guess is:</h1>
<h1><?php echo $guess; ?></h1>
	<?php if($number == $guess): ?>
	<?php echo "<h1 style='color:red;'>Numbers match</h1>"; ?>
	<?php endif; ?>
</body>
</html>