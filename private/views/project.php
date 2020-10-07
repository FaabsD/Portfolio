<?php $this->layout('website'); ?>
<?php $this->start('header');?>
<div class="project-nav">
    <?php foreach ($project as $project_data):?>
    <?php if($project_data['project_id'] >= 2):?>
        <a href="<?php echo url('project', ['id'=>$project_data['project_id']-1])?>"><button class="project-nav__prev">Vorige</button></a>
    <?php endif?>
    <a href="<?php echo url('home')?>"><button class="project-nav__home">Home</button></a>
    <?php if ($project_data['project_id'] < count($project_data)): ?>
        <a href="<?php echo url('project', ['id' =>$project_data['project_id']+1])?>"><button class="project-nav__next">Volgende</button></a>
    <?php endif ?>
    <?php endforeach ?>
</div>
<?php $this->stop();?>
<?php $this->start('projects');?>
    <div class="container">
        <?php foreach ($project as $project_data):?>
            <img src="<?php echo site_url('/images/'.$project_data['image'])?>" alt="Project Voorbeeld" class="container__image">
            <div class="cointainer__text">
                <h1 class="container__text__head"><?php echo $project_data['project_name']?></h1>
                <h2 class="container__text__subhead">inleiding</h2>
                <p class="container__text__introduction">
                    <?php echo $project_data['description_short']?>
                </p>
                <h2 class="container__text__subhead">Beschrijving</h2>
                <p class="container__text__description"><?php echo $project_data['description_long']?></p>
            </div>
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
