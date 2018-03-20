<?php include('config.php'); ?> 
<!DOCTYPE html>
  <html>
    <head>
       <?php include('header.php'); ?>	
    </head>

    <body>
    <!--NAVBAR-->
      <?php include('navbar.php'); ?>	
    <!--NAVBAR-->   
    <!--Slider-->
         
    		  <div class="carousel carousel-slider">
                <a class="carousel-item" ><img src="img/slider.jpg"></a>
              </div>
 		 
  
    <!-- Slider-->
    
      <div class="row">
        <div class="col s12 m6  ">
          <div class="card #424242 grey darken-2 ">
            <div class="card-content white-text">
              <span class="card-title">Status of Complaint</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="status.php">Check Status</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6">
          <div class="card #424242 grey darken-2 ">
            <div class="card-content white-text">
              <span class="card-title">News</span>
              <marquee direction = "up" onmouseover="this.stop();"
           onmouseout="this.start();">
              <a href="#"> 	IT Day 2018</a>
              <br>
              <a href="#">eMitra Hackathon</a>
              <br>
              <a href="#">Greenathon</a>
              </marquee>
            </div>
          </div>
        </div>
      </div>
    
      <?php include('footer.php'); ?>
    </body>
  </html>