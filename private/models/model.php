<?php
// Model functions
// In dit bestand zet je ALLE functions die iets met data of de database doen

function getProjects() {
	$connection = dbConnect();
	$sql        = "SELECT * FROM `projects`";
	$statement  = $connection->query( $sql );

	return $statement->fetchAll();
}
