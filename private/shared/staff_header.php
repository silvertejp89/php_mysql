<?php
if (!isset($page_title)) {
    $page_title = 'Staff Area';
}
?>

<!doctype html>

<html lang="en">

<head>
    <title>GBI - <?php echo $page_title; ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/staff.css">
    <!-- Obs! man måste skriva in index.php i webbläsaren för att css ska fungera: http://localhost:8000/public/staff/index.php  -->
</head>

<body>
    <header>
        <h1>GBI Staff Area</h1>
    </header>

    <navigation>
        <ul>
            <li> <a href="index.php">Menu</a> </li>
        </ul>
    </navigation>