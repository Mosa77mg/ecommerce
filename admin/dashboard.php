<?php session_start() ?>

<?php if (isset($_SESSION['USER_NAME'])): ?>

<?php include "resources/includes/header.inc" ?>
<?php require "config.php" ?>
<?php include "resources/includes/navbar.inc" ?>
<?php include "resources/includes/footer.inc" ?>
<?php else:?>
<?php header("location:index.php")?>
<?php endif ?>