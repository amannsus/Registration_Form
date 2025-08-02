<?php

session_start();
session_unset();
session_destroy();

session_start();
$_SESSION['alerts'][] = [
    'type' => 'success',
    'message' => 'Logged out successfully!'
];

header('Location: Project.php');
exit();

?>