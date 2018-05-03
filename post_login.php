<?php
session_start();

$_SESSION["loginname"] = $_POST['loginname'];

header('location:index.php');


