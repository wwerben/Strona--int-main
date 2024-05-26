<?php
session_start();
require_once 'model.php';

function checkUserAccess($requiredRole) {
    if (!isset($_SESSION['user'])) {
        header('Location: login.php');
        exit();
    }

    switch ($_SESSION['role']) {
        case 'admin':
            if ($requiredRole !== 'admin') {
                header('Location: paneladmin.php');
                exit();
            }
            break;
        case 'worker':
            if ($requiredRole !== 'worker') {
                header('Location: panelworker.php');
                exit();
            }
            break;
        case 'user':
            if ($requiredRole !== 'user') {
                header('Location: paneluser.php');
                exit();
            }
            break;
        default:
            header('Location: login.php');
            exit();
    }
}
?>
