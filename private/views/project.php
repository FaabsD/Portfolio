<?php $this->layout('website'); ?>
<?php $this->start('projects');?>
    <?php foreach ($project as $project_data):?>
        <img src="<?php echo site_url('/images/'.$project_data['image'])?>" alt="Project Voorbeeld">
    <?php endforeach ?>
<?php $this->stop();?>
