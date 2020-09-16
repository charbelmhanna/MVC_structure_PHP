<?php

switch ($action) {
    case 'coming_soon':
        require_once 'dispatcher.php';
        break;
    case 'maintenance':
        require_once 'dispatcher.php';
        break;
    case 'homepage':
        include_once 'main_layout/head.php';
        include_once 'main_layout/header.php';
        include_once 'main_layout/aside.php';
        require_once 'dispatcher.php';
        include_once 'main_layout/footer.php';
        break;
    default:
        include_once 'custom_layout/head.php';
        include_once 'custom_layout/header.php';
        require_once 'dispatcher.php';
        include_once 'custom_layout/footer.php';
        break;
}
