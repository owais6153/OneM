<?php
#Start A Session To Translate Whole Website
if (isset($_REQUEST['lan'])) {
	if ($_REQUEST['lan'] != "") {
		session_start();
		$_SESSION['lan'] = $_REQUEST['lan'];
	}
}