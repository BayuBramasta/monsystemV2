<?php
include 'header.php';
if (isset($_GET['page'])) {
	$page = $_GET['page'];
	if ($page == "home") {
		include "home.php";
	} elseif ($page == "reservasi") {
		include "reservasi.php";
	} elseif ($page == "status") {
		include "status.php";
	} elseif ($page == "login") {
		include "login.php";
	} elseif ($page == "detail") {
		include "detail.php";
	} else {
		include "index.php";
	}
} else {
	include "home.php";
}

include 'footer.php';
