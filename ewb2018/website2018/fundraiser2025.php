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

    <!-- Intro Section -->
  <div class="mb-5">
    <img src="images/crowdfunding/students.jpeg" 
     class="img-fluid rounded mb-3 float-right ml-3" 
     style="max-width: 300px;" 
     alt="students in school learning about cleanliness">
    <p>
      EWB is a nonprofit that partners with communities around the globe and works with them to find solutions that will improve their quality of life. 
      As part of the MIT Engineers Without Borders chapter, a student-run organization, we are learning practices that will make us lifelong change-makers. 
      Our team is a diverse group of engineers, scientists, leaders, designers, humanitarians, and innovators working together to create a better world, 
      one community at a time. We are currently working on two major projects: our Farm and Irrigation team is working in Tanzania, and our Health and Sanitation 
      team is working in Western Kenya.
    </p>
  </div>

  <hr>

  <!-- Farm and Irrigation Team -->
  <h2 class="mt-4">Farm and Irrigation Team</h2>
  
  <img src="images/FI_Implementation_2025/garden.jpeg" 
     class="img-fluid rounded mb-3 float-right ml-3" 
     style="max-width: 300px;" 
     alt="farm and irrigation team garden project">

  <p>
    Our Farm and Irrigation team is currently working with a primary school in the rural village of Mkutani, Tanzania. 
    About one-third of the 650 students live too far away from the school to go home for lunch, meaning they are unable to eat during
    the school day. This impacts not only their health but also their academic performance, especially when trying to pass final exams
    and move on to secondary school.
  </p>


  <p>
    The proposed solution, formed in collaboration with the school committee and headmaster, is a drip-irrigated garden of about 0.3 acres 
    that will serve as a supplementary food source for the students. A small portion of the garden will also be cultivated by the students,
    serving as a valuable educational resource. The irrigation system will use a solar pump to draw water from a local borehole into an 
    elevated water tank that utilizes gravitational force to periodically water the crops. The headmaster and school committee are hopeful 
    that the whole community, including primary school students, will benefit from learning more about irrigation techniques by collaborating 
    to tend to the garden.
  </p>

  <hr>

  <!-- Health and Sanitation Team -->
  <h2 class="mt-4">Health and Sanitation Team</h2>
  <img src="images/crowdfunding/hole.jpeg" 
     class="img-fluid rounded mb-3 float-right ml-3" 
     style="max-width: 300px;" 
     alt="hole being dug for water pump">

  <p>
    Pe-Hill/Akoko is a rural community in Western Kenya, home to approximately 2,500–3,000 residents who rely on unprotected and distant 
    water sources. The water scarcity in the community poses a health risk and forces many women and children to take long journeys to find 
    water, interfering with their economic and educational pursuits. Environmental degradation resulting from human activities, climate change,
    and population growth further exacerbates these challenges.
  </p>

  <p>
    To better understand the community’s needs, EWB-MIT’s Health and Sanitation team is preparing for an assessment trip to Kenya in the summer 
    of 2026. During the trip, community surveys will be conducted to examine water usage, quality, storage, and transport to homes and other 
    commonly used establishments such as schools. By analyzing current access to water sources, EWB will begin planning compatible infrastructure 
    developments. Based on community input, our proposed solution is to construct a borehole and a hand pump.
  </p>

  <p>
    With your support, we aim to build lasting, community-driven water systems that are accessible to the Pe-Hill/Akoko community. 
    The objective of our project is to listen closely to community needs and propose sustainable infrastructure improvements. 
    The project team plans to model and execute the addition of a borehole in the region as well as train the community on the operation, 
    maintenance, and management of the new infrastructure system.
  </p>

  <hr>

  <!-- How You Can Help -->
  <h2 class="mt-4">How You Can Help</h2>
  <img src="images/crowdfunding/products.jpeg" 
     class="img-fluid rounded mb-3 float-right ml-3" 
     style="max-width: 300px;" 
     alt="health and sanitation team project menstrual products for women in Tanzania">
  <p>
    Your donation helps us pay for the costs of construction materials, fees for construction contractors, and travel reimbursements. 
    Questions? Contact us at <a href="mailto:ewb-exec@mit.edu">ewb-exec@mit.edu</a> or see our website at 
    <a href="https://ewb.mit.edu" target="_blank" rel="noopener noreferrer">ewb.mit.edu</a>.
  </p>

  <!-- Donation Levels -->
  <h3 class="mt-4">What Your Gifts Could Cover</h3>
  
  <ul>
    <li>$20 covers a night of lodging for a traveling MIT student</li>
    <li>$60 covers the cost of an MIT student’s ground transportation in Tanzania</li>
    <li>$150 covers the cost of the water pump</li>
    <li>$300 covers the cost of the irrigation equipment</li>
    <li>$1,500 covers the cost of a hydrogeological survey</li>
    <li>$2,000 covers one student’s entire travel costs</li>
  </ul>
<img src="images/crowdfunding/team.jpeg" 
     class="img-fluid rounded mb-3 float-right ml-3" 
     style="max-width: 300px;" 
     alt="farm and irrigation travel team">

  <!-- Crowdfund Button -->
  <div class="mt-4 mb-5">
    <a href="https://crowdfund.mit.edu/story/EWB-F25" 
      target="_blank" 
      class="btn btn-primary btn-lg"
      rel="noopener noreferrer">
      Support Our Crowdfunding Campaign
    </a>
  </div>



  <!-- Footer -->
  <?php include('footer.php'); ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
