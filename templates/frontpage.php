<?php include 'inc/header.php' ?>

<main class="jumbotron mb-5">
  <div class="bg-light p-5 rounded">
    <div class="header-container">
      <h1 class="page-header">Find A Job</h1>
    </div>
    
    <form action="index.php" method="GET" class="form">
      <select class="form-control mb-3" name="category">
        <option value="0">Choose Category</option>
        <?php foreach($categories as $category) : ?>
          <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
        <?php endforeach; ?>
      </select>
      <input type="submit" class="btn btn-primary btn-lg" value="Find Job">
    </form>
  </div>
</main>

<div class="header-container mb-3">
  <h3><?php echo $title; ?></h3>
</div>

<?php foreach($jobs as $job) : ?>

<div class="row listing mb-3">
  <div class="col-md-10">
    <h4><?php echo $job->job_title; ?></h4>
    <p><?php echo $job->description; ?></p>
  </div>
  <div class="col-md-2">
    <a href="job.php?id=<?php echo $job->id; ?>" class="btn btn-primary">View</a>
  </div>
</div>

<?php endforeach; ?>

<?php include 'inc/footer.php' ?>