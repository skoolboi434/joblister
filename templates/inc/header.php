<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Job Lister</title>
</head>
<body>
  
  <div class="nav-container mb-5">
    <div class="container">
      <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><?php echo SITE_TITLE; ?></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="create.php">Create Listing</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <div class="container">

  <?php displayMessage(); ?>
