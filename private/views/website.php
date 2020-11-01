<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="<?php echo site_url('/css/style.css') ?>" media="all">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo site_url('/icons/apple-icon-57x57.png')?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo site_url('/icons/apple-icon-60x60.png')?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo site_url('/icons/apple-icon-72x72.png')?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo site_url('/icons/apple-icon-76x76.png')?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo site_url('/icons/apple-icon-114x114.png')?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo site_url('/icons/apple-icon-120x120.png')?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo site_url('/icons/apple-icon-144x144.png')?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo site_url('/icons/apple-icon-152x152.png')?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url('/icons/apple-icon-180x180.png')?>">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo site_url('/icons/android-icon-192x192.png')?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url('/icons/favicon-32x32.png')?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo site_url('/icons/favicon-96x96.png')?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url('/icons/favicon-16x16.png')?>">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script src="https://kit.fontawesome.com/478eebad20.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <?php echo $this->section('header') ?>
    </header>
    <main>
        <?php echo $this->section('projects')?>
        <div class="info">
            <?php echo $this->section('about')?>
            <?php echo $this->section('contact')?>
        </div>
    </main>
    <footer>
        <?php echo $this->section('footer')?>
    </footer>
    <img src="<?php echo site_url('/images/background.jpg')?>" alt="" class="bg-img">
</body>

</html>