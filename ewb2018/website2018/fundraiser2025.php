<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("header.php"); ?>
</head>
<body>
  <!-- Navigation -->
  <?php include('navigationBar.php'); ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Help us raise funds for our projects this year!
      <small>Tanzania and Kenya</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="projects.php">Projects</a>
      </li>
      <!-- <li class="breadcrumb-item active">Health & Sanitation</li> -->
    </ol>

    <!-- Embedded Crowdfunding Page -->
  <div class="embed-responsive" style="height: 800px;">
    <iframe 
      src="https://crowdfund.mit.edu/story/EWB-F25"
      width="100%"
      height="100%"
      style="border: none;"
      allowfullscreen>
    </iframe>
  </div>


  <!-- Footer -->
  <?php include('footer.php'); ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
