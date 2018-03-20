<?php include('config.php');
$sel="select *from department";
$exe=mysqli_query($db,$sel);

?>
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
           <div class="login col s6 offset-s3 ">File A Complaint</div>
         </div>
         
         <!--Card/Departments-->
         <div class="row">
          <?php
		  while($fetch=mysqli_fetch_array($exe))
		  {
		  ?>
          <div class="col s12 m4">
           <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"><?php echo $fetch['depart']  ?></span>
              <p><?php echo $fetch['discription']  ?></p>
            </div>
            <div class="card-action">
              <a href="report.php?rid=<?php echo $fetch['id']; ?>">Report</a>
            </div>
          </div>
        </div>
          <?php } ?>
      </div>
          <?php include('footer.php'); ?>
   </body>
   
</html>   
     
