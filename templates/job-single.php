<?php include 'inc/header.php' ?>

<h2 class="page-header"><?php echo $job->job_title; ?> (<?php echo $job->location; ?>)</h2>
<small>Posted by: <?php echo $job->contact_user; ?> on <?php echo $job->post_date; ?></small>
<hr>
<p class="lead"><?php echo $job->description; ?></p>
<ul class="list-group mb-5">
  <li class="list-group-item"><strong>Company: <?php echo $job->company; ?></strong></li>
  <li class="list-group-item"><strong>Salary: <?php echo $job->salary; ?></strong></li>
  <li class="list-group-item"><strong>Contact Email: <?php echo $job->contact_email; ?></strong></li>
</ul>
<a href="index.php" class="btn btn-lg btn-primary">Go back</a>
<div class="bg-light p-3 mt-3">
  <a href="edit.php?id=<?php echo $job->id; ?>" class="btn btn-lg btn-warning">Edit</a>
  <form action="job.php" style="display: inline;" method="POST">
    <input type="hidden" name="del_id" value="<?php echo $job->id; ?>">
    <input type="submit" value="Delete" class="btn btn-lg btn-danger">
  </form>
</div>
<?php include 'inc/footer.php' ?>