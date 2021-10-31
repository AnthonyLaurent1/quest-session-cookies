<?php
if (empty($_SESSION['login'])) {
    header('Location: login.php');
    exit();
}
