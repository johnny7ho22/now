<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vote</title>
</head>
<body>
<?php
$vid=(int)$_GET['vid'];

require("optionModel.php");
$result = getOptionVote($vid);
$rs=mysqli_fetch_assoc($result);

?>
<form action="updateOption.php" method="post">
    <input type="hidden" name="vid" value="<?php echo $rs['vid']; ?>" />
    <input name="vname" type="text" id="vname" value="<?php echo $rs['vname']; ?>"/>
    <input type="submit" name="submit" value="送出" />
</form>
<a href="listOption.php">回上頁</a>
</body>
</html>
