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
           <div class="login col s6 offset-s3 ">RTI F i l i n g</div>
         </div>
         
 
       <div class="row">
    <form class="col s8 offset-s2" method="post">
      <div class="row ">
        <div class="input-field col s6">
          <input  name="firstname"  type="text" class="validate">
          <label >First Name</label>
        </div>
        
        <div class="input-field col s6">
          <input id="email" type="email" class="validate">
          <label for="email">Last Name</label>
        </div>
                
      </div>
   
            <div class="row">
    <form class="col s8 offset-s2" method="post">
      <div class="row ">
        <div class="input-field col s6">
          <input  name="mailid"  type="email" class="validate">
          <label >Email-id</label>
        </div>
        
        <div class="input-field col s6">
          <input id="phone" type="text" class="validate">
          <label for="phone">Phone Number</label>
        </div>
                
      </div>
      
  
    <div class="row">
              <div class="input-field col s3">
                <select name="gender" type="text">
                  <option value="ALL" disabled selected>Choose your option</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                <label>Gender</label>
              </div>     
   
    
     <div class="row">
              <div class="input-field col s3">
                <select name="gender" type="text">
                  <option value="Rural" disabled selected>Rural</option>
                  <option value="Urban">urban</option>
                 </select>
                <label>Status</label>
              </div>     
   
   
  <div class="row">
              <div class="input-field col s3">
                <select name="gender" type="text">
                  <option value="Rural" disabled selected>literate</option>
                  <option value="Urban">illitrate</option>
                 </select>
                <label>Education Status</label>
              </div>     
   
   
   
     
        <div class="row">
        <div class="input-field col s12">
          <textarea name="problem" type="text" class="materialize-textarea" data-length="200"></textarea>
            <label>Address</label>
        </div>
        
  <div class="row">
              <div class="input-field col s4">
                <select name="Ministry/Department" type="text">
                  <option value="Rural" disabled selected>select department/ministry</option>
                  <option value="Urban">Department of health</option>
                  <option value="Urban">Department of agriculture</option>
                   <option value="Urban">Department of science adn technology</option>
                  <option value="Urban">Department of justice</option>
                  <option value="Urban">Department of revenue</option>
                 </select>
                <label>Ministry/Department</label>
              </div>     
   
   
       
 <div class="row">
              <div class="input-field col s3">
                <select name="gender" type="country">
                  <option value="other" disabled selected>other</option>
                  <option value="other" disabled selected>india</option>
                 </select>
                <label>Country</label>
              </div>        
     
     
     
        <div class="row">
        <div class="input-field col s12">
          <textarea name="problem" type="text" class="materialize-textarea" data-length="200"></textarea>
            <label>Description</label>
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