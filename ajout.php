<?php
session_start();



switch($_POST['submit']) {
    case 'pecan_nuts':

            $_POST['pecan_nuts'] = $_SESSION['pecan_nuts'];
            $_SESSION['pecan_nuts'] += 1;

        break;
    case 'chocolate_chips':

        $_POST['chocolate_chips'] = $_SESSION['chocolate_chips'];
        $_SESSION['chocolate_chips'] += 1;

        break;
    case 'chocolate_cookie':

        $_POST['chocolate_cookie'] = $_SESSION['chocolate_cookie'];
        $_SESSION['chocolate_cookie'] += 1;

        break;
    case 'mm_cookies':

        $_POST['mm_cookies'] = $_SESSION['mm_cookies'];
        $_SESSION['mm_cookies'] += 1;

        break;
}

header('location:index.php');

