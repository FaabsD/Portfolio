<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="<?php echo site_url('/css/style.css') ?>" media="all">
    <script src="https://kit.fontawesome.com/478eebad20.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <?php echo $this->section('header') ?>
    </header>
    <main>
        <?php echo $this->section('projects')?>
        <?php echo $this->section('about')?>
        <?php echo $this->section('contact')?>
    </main>
    <footer>
        <?php echo $this->section('footer')?>
    </footer>
    <script src="<?php echo site_url('/js/readmore.js')?>"></script>
</body>

</html>