<?php include('config.php'); 

$adr=0;

if(isset($_REQUEST['action']))
{	
$adr=$_REQUEST['aadharno'];	
	
$sel="select *from aadhar";
$exe=mysqli_query($db,$sel);
	while($fetch=mysqli_fetch_array($exe))
	{
	$ad=$fetch['aadharno'];	
		if($ad == $adr)
		{
		$rid=$fetch['id'];
		break;
		
		}
	}


echo'<script>
var rid = "<?php echo $rid ?>";


		 
    window.location="statusreport.php?rid='. $rid .'"</script>'; 
		 
		  				 

}

?> 


<!DOCTYPE html>
  <html>
    <head>
       <?php include('header.php'); ?>	
    </head>

    <body>
    <!--NAVBAR-->
      <?php include('navbar.php'); ?>
      
      <div class="row" >
           <div class="login col s6 offset-s3 ">Check Bill Status</div>
      </div>
         
      <div class="row">   
      
            <form class="col s12" method="post">
                  <div class="row">
                    <div class="input-field col s4 offset-s4">
                      <input placeholder="Enter Aadhar Number" name="aadharno" type="text" class="validate">
                     </div>
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
                   <p>Login to check all your Bill status</p>
               </div>
               <div class="col s4 offset-s4 center-align">
                        <a href="login.php"><button class="btn waves-effect waves-light">Login
                                            </button></a>
               </div>
              
	</body>
  </html>    