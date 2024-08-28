<?php session_start() ?>
<?php require_once __DIR__ . '/../vendor/autoload.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title><?= $pageTitle ?? "" ?></title>
    <link rel="stylesheet" href="<?= baseUrl('assets/css/welcome.css') ?>"> 
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>
<body>