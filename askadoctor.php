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
           <div class="login col s6 offset-s3 ">Ask a Doctor</div>
         </div>
         
 
       <div class="row">
    <form class="col s8 offset-s2" method="post">
      <div class="row ">
        <div class="input-field col s6">
          <input  name="firstname"  type="text" class="validate">
          <label >Name</label>
        </div>
        
        <div class="input-field col s3">
          <input id="email" type="email" class="validate">
          <label for="email">Age</label>
        </div>
        <div class="input-field col s3">
                <select name="gender" type="text">
                  <option value="ALL" disabled selected>Sex</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                <label>Gender</label>
        </div>
        
      </div>
      
    
      <div class="row">
        <div class="input-field col s6">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s6">
          <input id="email" type="email" class="validate">
          <label for="email">Phone Number</label>
        </div>
        
        </div>
        
        <div class="row">
        <div class="input-field col s12">
          <textarea name="problem" type="text" class="materialize-textarea" data-length="200"></textarea>
            <label>symptones</label>
        </div>
        
        </div>
         <div class="row">
                <div class="col s4 offset-s4 center-align">
                    <button class="btn waves-effect waves-light" type="submit" value="submit" name="action">Submit Detail
                                        </button>
                 </div>
          </div>
                  </form>
                
  </div>
  
  <?php include('footer.php');?>
        </body>
        
        </html>