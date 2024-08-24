<?php session_start() ?>
<?php require_once __DIR__ . '../../vendor/autoload.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= resourceUrl("/images/favicon.png") ?>" type="image/x-icon">
    <title><?= $pageTitle ?? "" ?></title>
   <?php require_once basePath('includes/vite.php'); ?>

</head>
<body>