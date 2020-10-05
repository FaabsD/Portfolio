<?php
// Model functions
// In dit bestand zet je ALLE functions die iets met data of de database doen

function getProjects()
{
    $connection = dbConnect();
    $sql = "SELECT * FROM `projects`";
    $statement = $connection->query($sql);

    return $statement->fetchAll();
}

function getProject($id)
{
    $connection = dbConnect();
    $sql = "SELECT * FROM `projects` WHERE `project_id` = :id";
    $statement = $connection->prepare($sql);
    $statement->execute(['id' => $id]);

    return $statement->fetchAll();
}
