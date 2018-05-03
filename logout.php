<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 10/04/18
 * Time: 17:34
 */
session_start();
session_destroy();
header('location:login.php');
