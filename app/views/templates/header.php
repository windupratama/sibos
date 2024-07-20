<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiBOS | <?= $data['title'];?></title>

    <!-- bootstrap CSS -->
    <link href="<?= BASEURL; ?>/css/bootstrap.min.css" rel="stylesheet" >
    <!-- CSS -->
    <link href="<?= BASEURL; ?>/style.css" rel="stylesheet">
    <!-- <link href="<?= BASEURL; ?>/mobile.css" rel="stylesheet"> -->
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= BASEURL; ?>/img/favicon.ico" type="image/x-icon">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600&display=swap" rel="stylesheet">
    <!-- Script Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand text-white" href="<?= BASEURL; ?>">
                <img src="<?= BASEURL; ?>/img/logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active text-white" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                    <a class="nav-link text-white" href="<?= BASEURL; ?>/about">About</a>
                    <a class="nav-link text-white" href="<?= BASEURL; ?>/film">Informasi</a>
                    <!-- <button class="nav-link btn btn-sm btn-outline-warning text-white" href="<?= BASEURL; ?>/login">Login</button> -->
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
    <!-- navbar -->