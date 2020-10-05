<?php $this->layout('website'); ?>
<?php $this->start('projects');?>
    <div class="container">
        <?php foreach ($project as $project_data):?>
            <img src="<?php echo site_url('/images/'.$project_data['image'])?>" alt="Project Voorbeeld" class="container__image">
            <h1 class="container__head"><?php echo $project_data['project_name']?></h1>
            <h2 class="container__subhead">inleiding</h2>
            <p class="container__introduction">
                <?php echo $project_data['description_short']?>
            </p>
            <h2 class="container_subhead">Beschrijving</h2>
            <p class="container_description"><?php echo $project_data['description_long']?></p>
        <?php endforeach ?>
    </div>
<?php $this->stop();?>

<?php $this->start('footer');?>
<div class="socials">
    <a href="https://www.linkedin.com/in/fabian-hendriks-7772601b1/" target="_blank"><i class="fab fa-linkedin"></i></a>
    <a href="https://github.com/FaabsD" target="_blank"><i class="fab fa-github"></i></a>
</div>
<div class="copy">
    <h4>&copy;<?php echo date("Y")?> Fabian Hendriks</h4>
</div>
<?php $this->stop();?>
