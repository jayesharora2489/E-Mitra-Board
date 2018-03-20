<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
   <head>
    <?php
    include('header.php');
    ?>
   </head> 
    
   <body>
     <?php include('navbar.php'); ?>    
         <br><br>
         <div class="row" >
           <div class="login col s4 offset-s4 ">Login</div>
         </div>
         
         <?php
		if(isset($_REQUEST['login']))
		{
		
	$sql = "SELECT * FROM `user` WHERE `email`='".$_REQUEST['email']."' AND `password`='".$_REQUEST['password']."' ; ";
	$result = mysqli_query($db,$sql);
	if($result->num_rows>0){
	$row = mysqli_fetch_array($result);
	$_SESSION['loginid']= $row['id'];
	echo('<script>window.location="index.php";</script>');
	}
	else{echo('<div class="alert alert-danger">Wrong Email or Password</div>');}	
		}

			?>
         
        <!--form-->
        <div class="row">
                <form class="col s12" method="post">
                  <div class="row">
                    <div class="input-field col s4 offset-s4">
                      <input placeholder="Enter Your Email" name="email" type="email" class="validate">
                     </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s4 offset-s4">
                      <input placeholder="Passsword" name="password" type="password" class="validate">
                    </div>
                   </div>
                   <div class="row">
                        <div class="col s4 offset-s4 center-align">
                         <button class="btn waves-effect waves-light" type="submit" name="login">Login
                                                </button>
                         </div>
                    </div>
                </form>
            <!--form-->
        </div>
        <?php include('footer.php'); ?>
    </body>      
</html>