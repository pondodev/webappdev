<?php
    session_start();
    if (!isset($_SESSION["email"])) // check if user is logged in
        header("Location: login.php"); // redirect to login if not logged in
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="web programming :: assignment 2" />
    <meta name="keywords" content="web, programming" />

    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="forms.css" />
    <link rel="stylesheet" href="main.css" />

    <title>assignment 2 || add friends</title>
</head>
<body>
    <?php include "header.php"; ?>

    <main class="container lead">
    <?php include "friendadd_functions.php" ?>
    <p style="text-align: center">
        <a href="friendslist.php" class="btn btn-primary">go back</a>
        <a href="logout.php" class="btn btn-secondary">log out</a>
    </p>
    </main>
</body>
</html>