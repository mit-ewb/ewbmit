<!DOCTYPE html>
<html lang="en">

  <?php include("header.php"); ?>

  <body>

    <!-- Navigation -->
    <?php include('navigationBar.php'); ?>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner" role="listbox">

          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('images/banner1 copy.jpg')">
            <div class="carousel-caption d-none d-md-block">
                <h3>Making friends in Mkutani, Tanzania</h3>
                <p>In January 2018, two of our members got the opportunity to travel to Tanzania to conduct an assessment trip and learn about the community's needs. Together, we have replaced this unreliable pump with a solar-powered one. </p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/banner2 copy.jpg')">
            <div class="carousel-caption d-none d-md-block">
                <h3>Goal: Clean Drinking Water</h3>
                <p>Current filtration techniques aren't enough to rid the Mkutani water of harmful bacteria, so another source must be utilized. </p>
              <!-- <h3>Moringa</h3>
              <p>In the past, one of our members went to Ghana to help process moringa leaves and assess how we could improve the methods. </p> -->
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/banner3 copy.jpg')">
              <div class="carousel-caption d-none d-md-block">
              </div>
      </div>
        <!-- Slide Four - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/banner4 copy.jpg')">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
            <!-- Slide Five - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('images/banner5 copy.jpg')">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <!-- Slide Six - Set the background image for this slide in the line below -->
            <!-- <div class="carousel-item" style="background-image: url('images/banner_blm.png')">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div> -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">
<br>
      <!-- <div>
        <img class="img-fluid rounded mb-4" src="images/ewb-logo.png" alt="">
      </div> -->


       <!-- <h1 class="my-4">Welcome to MIT Engineers Without Borders!</h1> -->

      <!-- Portfolio Section -->
      <h2>Most Recent</h2>
        <div class="row">

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><video controls width="100%" alt="Mktutani Assessment Trip 2022"><source src="media/Tanzania 2022.mp4"></video></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Assessment Trip 2022: Mkutani, Tanzania</a>
                        </h4>
                        <p class="card-text">In June 2022, four of our members got the chance to travel to Tanzania to conduct assessment trips for our Irrigation and Female Health & Sanitation projects in Mkutani.</p>
                    </div>
                    <div class="card-footer">
                        <a href="https://www.instagram.com/ewbmit/" class="btn btn-primary">Learn More</a>
                    </div>
                </div>

            </div>
            
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="images/projects/mkutani_assessment2.png" height="200" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Irrigation, Tanzania</a>
                        </h4>
                        <p class="card-text">We're designing an irrigation system for a test garden for the schoolhouse in Mkutani to grow food to feed around 200 students a day.</p>
                    </div>
                    <div class="card-footer">
                        <a href="irrigation.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="images/gallery0.jpg" height="200" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Female Sanitation, Tanzania</a>
                        </h4>
                        <p class="card-text">We're investigating ways to reduce female sanitation issues and mitigate their negative impacts on schoolgirls.</p>
                    </div>
                    <div class="card-footer">
                        <a href="sanitation.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            
            

            <!-- <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="images/gallery9.jpg" height="200" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Solar Manual, Tanzania</a>
                        </h4>
                        <p class="card-text">We're creating a manual and workshops to support locals in troubleshooting solar pumps.</p>
                    </div>
                    <div class="card-footer">
                        <a href="manual.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div> -->

          <!--
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/projects/moringa.png" height="200" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Moringa Connect, Ghana (Past)</a>
              </h4>
              <p class="card-text">We helped Moringa Connect, a Ghanaian startup, improve techniques for processing native moringa plants into useful products. </p>
            </div>
            <div class="card-footer">
              <a href="moringa.php" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/projects/plastics.jpg" height="200" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Plastics, Uganda (Past)</a>
              </h4>
              <p class="card-text">We combat plastic bag waste by reforming it into new materials.</p>
            </div>
            <div class="card-footer">
              <a href="plastics.php" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/projects/plastics.png" height="200" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Charcoal, D-Lab (Past)</a>
              </h4>
              <p class="card-text">We improve methods of creating charcoal briquetts to provide a cleaner cooking alternative for developing nations.</p>
            </div>
            <div class="card-footer">
              <a href="charcoal.php" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div> -->

       
        </div>
      <!-- /.row -->

      <!-- Get Involved Section -->
      <div class="row">
        <div class="col-lg-6">
          <h2>Get Involved</h2>
          <p>MIT Engineers Without Borders is a great community of passionate students who care about learning how to make a difference. There's a lot you can do to help us out! Please don't hesitate to contact <a href="mailto:ewb-exec@mit.edu">ewb-exec@mit.edu</a> if you have any questions. </p>
          <ul>
            <li>Join us! Check out our calendar for meeting times, social events, cool conferences, and more! </li>
            <li>Follow us on our <a href="https://www.facebook.com/ewbmit/?hc_ref=ARTD0Bo8IO8L0od1QSwuiDZ6O0QgwsM1KCevMMmD2Ffu0OPFzG112T98VwhQm0z8oH8&fref=nf"> Facebook page</a> and <a href="https://www.instagram.com/ewbmit/?hl=en"> Instagram</a>! Stay up to date on what we're doing, and spread the word to others. </li>
            <li> <a href="https://crowdfund.mit.edu/project/20586"> Donate</a>. We can't get much done without funding, and every cent brings us closer to accomplishing our goals! Project costs include material costs, travel reimbursements, and community outreach events. </li>

          </ul>
        </div>
        <div class="col-lg-6">
          <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=p0ohh9gb2t43cs2hlp0d11v77o%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FNew_York" style="border-width:0" width="550" height="350" frameborder="0" scrolling="yes"></iframe>
          <!-- <img class="img-fluid rounded" src="http://placehold.it/700x450" alt=""> -->
        </div>
      </div>
      <!-- /.row -->


      <!-- Call to Action Section -->
      <!-- <div class="row mb-4">
        <div class="col-md-8">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
        </div>
      </div> -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include('footer.php'); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
