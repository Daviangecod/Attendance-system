<?php session_start() ?>
<?php require_once __DIR__ . '/../../vendor/autoload.php'; ?>
<?php require_once basePath('includes/db_connect.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title><?= $pageTitle ?? "Dashboard" ?></title>

</head>
<body>