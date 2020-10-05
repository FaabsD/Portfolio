<?php


namespace Website\Controllers;


class ProjectController
{
public function projectDetails($id){
    $project = getProject($id);
    $template_engine = get_template_engine();
    echo $template_engine->render('project', ['project' => $project]);

}
}