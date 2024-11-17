<!DOCTYPE html>
<html lang="en">

  <?php include("header.php"); ?>

  <body>


  <!-- Navigation -->
  <?php include('navigationBar.php'); ?>

    <!-- Page Content -->
    <div class="container">
      

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Past Projects
       
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Past Projects</li>
      </ol>

        
        <!-- /.row -->

        <hr>


     <!-- Grid Container for Projects -->
     <div class="content grid-container">
        <!-- Project Items -->
        <a class="grid-item" href="manual.php">
          <div class="grid-image">
            <img src="images/gallery9.jpg" alt="Solar Manual, Tanzania" loading="lazy">
          </div>
          <div class="portfolio-overlay"></div>
          <div class="portfolio-text">
            <h3 class="portfolio-title">Solar Manual, Tanzania</h3>
            </div>
        </a>
        
        <!-- Repeat for other projects -->
        <a class="grid-item" href="structures.php">
          <div class="grid-image">
            <img src="images/gallery2.jpg" alt="Structures, Tanzania" loading="lazy">
          </div>
          <div class="portfolio-overlay"></div>
          <div class="portfolio-text">
            <h3 class="portfolio-title">Structures, Tanzania</h3>
            </div>
        </a>

        <a class="grid-item" href="local.php">
          <div class="grid-image">
            <img src="images/localprojects.jpg" alt="Local Projects, US" loading="lazy">
          </div>
          <div class="portfolio-overlay"></div>
          <div class="portfolio-text">
            <h3 class="portfolio-title">Local Projects, US</h3>
          </div>
        </a>

        <a class="grid-item" href="mkutani.php">
          <div class="grid-image">
            <img src="images/gallery6.jpg" alt="Solar Pump, Tanzania" loading="lazy">
          </div>
          <div class="portfolio-overlay"></div>
          <div class="portfolio-text">
            <h3 class="portfolio-title">Solar Pump, Tanzania</h3>
          </div>
        </a>

        <a class="grid-item" href="moringa.php">
          <div class="grid-image">
            <img src="images/projects/moringa2.jpg" alt="Moringa Connect, Ghana" loading="lazy">
          </div>
          <div class="portfolio-overlay"></div>
          <div class="portfolio-text">
            <h3 class="portfolio-title">Moringa Connect, Ghana</h3>
          </div>
        </a>

        <a class="grid-item" href="plastics.php">
          <div class="grid-image">
            <img src="images/projects/plastics.jpg" alt="Plastics, Uganda" loading="lazy">
          </div>
          <div class="portfolio-overlay"></div>
          <div class="portfolio-text">
            <h3 class="portfolio-title">Plastics, Uganda</h3>
          </div>
        </a>

        <a class="grid-item" href="charcoal.php">
          <div class="grid-image">
            <img src="images/projects/charcoal-1.png" alt="Charcoal, D-Lab" loading="lazy">
          </div>
          <div class="portfolio-overlay"></div>
          <div class="portfolio-text">
            <h3 class="portfolio-title">Charcoal, D-Lab</h3>
           </div>
        </a>
        
      </div>
    </div>
    <hr>

    <!-- CSS for Grid Layout and Image Resizing -->
    <style>
      .grid-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1rem;
        margin-top: 1rem;
      }

      .grid-item {
        position: relative;
        transition: transform 0.65s cubic-bezier(0.19, 1, 0.22, 1);
      }

      .grid-image img {
      width: 100%;
      height: 250px; /* Set a fixed height */
      object-fit: cover; /* Ensure the image covers the area */
      border-radius: 5px;
  }



      .portfolio-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 0;
        transition: opacity 0.3s ease;
      }

      .grid-item:hover .portfolio-overlay {
        opacity: 1;
      }

      .portfolio-text {
        position: absolute;
        bottom: 10%;
        left: 10%;
        color: white;
        transition: opacity 0.3s ease;
        opacity: 0;
      }

      .grid-item:hover .portfolio-text {
        opacity: 1;
      }
    </style>
  </body>
</html>

<!-- <hr> -->

      
    <!-- Footer -->
   <?php include('footer.php'); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>