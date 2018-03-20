<?php include('config.php'); ?> 
<!DOCTYPE html>
  <html>
    <head>
       <?php include('header.php'); ?>	
    </head>

    <body>
    <!--NAVBAR-->
      <?php include('navbar.php'); ?>
      
      <div class="row" >
           <div class="login col s6 offset-s3 ">Check Complaint Status</div>
      </div>
         
      <div class="row">   
          <form class="col s6 offset-s3" method="post">
              
                <div class="input-field col s12">
                  <input name="problemid" type="text" class="validate">
                  <label>Complaint Id</label>
                </div> 
                <div class="row">
                    <div class="col s4 offset-s4 center-align">
                        <button class="btn waves-effect waves-light" type="submit" value="submit" name="action">Check Status
                                            </button>
                     </div>
                 </div>
          </form>
       </div>    
               <div class="row center-align">
                        <a class="btn-floating btn-large waves-effect waves-light green">OR</a>
               </div>

               <div class="col s4 offset-s4 center-align" style="font-size:22px;">
                   <p>Login to check all your complaint status</p>
               </div>
               <div class="col s4 offset-s4 center-align">
                        <a href="login.php"><button class="btn waves-effect waves-light">Login
                                            </button></a>
               </div>
              
	</body>
  </html>    