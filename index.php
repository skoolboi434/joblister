<?php

include_once 'config/init.php';

$job = new Job();


$template = new Template('templates/frontpage.php');

// If there's a category in the URL, set it otherwise set it to NULL
$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category){
	$template->jobs = $job->getByCategory($category);
	$template->title = 'Jobs in: '. $job->getCategory($category)->name;
} else {
	$template->title = 'Latest Jobs';
	$template->jobs = $job->getAllJobs();
}

$template->categories = $job->getCategories();

echo $template;