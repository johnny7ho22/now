<?php
require("dbconnect.php");
function getOptionList() {
	global $conn;
	$sql = "SELECT vid,vname FROM vote";
	$result=mysqli_query($conn,$sql);
	return $result;
}

function vote($vid) {
	global $conn;
	$sql = "UPDATE vote SET number=number+1 WHERE vid=$vid";
	mysqli_query($conn, $sql);
}

function getOptionVote($vid) {
	global $conn;
	$sql = "SELECT vid,vname,`number` FROM vote where vid=$vid";
	$result=mysqli_query($conn,$sql);
	return $result;
}
function getOptionVoteOrder() {
	global $conn;
	$sql = "SELECT vid,vname,`number` FROM vote ORDER BY `number` DESC";
	$result=mysqli_query($conn,$sql);
	return $result;
}

function setVoteName($vid,$vname) {
	global $conn;
	$sql = "UPDATE vote SET vname='$vname' WHERE vid=$vid";
	mysqli_query($conn, $sql);
}
?>










