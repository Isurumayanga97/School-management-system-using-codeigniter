<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="<?php echo base_url('assest/css/bootstrap.css'); ?>">
    <script src="<?php echo base_url('assest/js/jquery-3.4.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assest/js/bootstrap.js'); ?>"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#" style="position:relative;left: 500px">COLLEGE MANAGEMENT SYSTEM</a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="dropdown" style="position: relative;left: 800px;">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            Settings
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <!--            <a class="dropdown-item" href="#">Action</a>-->
            <!--            <a class="dropdown-item" href="#">Another action</a>-->
            <!--            <a class="dropdown-item" href="#">Something else here</a>-->
            <li><?php echo anchor("admin/dashboard", "Dashboard"); ?></li>
            <hr>
            <li><?php echo anchor("welcome/logout", "Logout"); ?></li>

        </div>
    </div>

</nav>
