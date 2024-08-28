<?php session_start() ?>
<?php require_once __DIR__ . '/../vendor/autoload.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title><?= $pageTitle ?? "" ?></title>
    <link rel="stylesheet" href="<?= baseUrl('assets/css/style.css') ?>"> 
    <link rel="stylesheet" href="<?= baseUrl('assets/css/welcome.css') ?>"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>
<body>