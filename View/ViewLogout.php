<?php 
	session_destroy();
	session_unset();
	header("Location:?page=Index");
 ?>