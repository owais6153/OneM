<?php
	session_start();
if (isset($_REQUEST['lan'])) {
	$_SESSION['lan'] = $_REQUEST['lan'];
}