<div class="navbar-fixed">
<nav>
    <div class="nav-wrapper navbarbg " >
      <a href="index.php"><div class="left">
          <img class="left circle responsive-img" src="img/e-mitra-logo.jpg" >
          <a href="index.php" class="right login black-text">E-mitra Board</a>
      </div></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse "><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
    
    
        <?php
		if(isset($_SESSION['loginid']))
		{
		?>
        <li><a href="consumerstatus.php" class="black-text">Consumer Status</a></li>
        <li><a href="complain.php" class="black-text">File a Complain</a></li>
        <li><a href="rti.php" class="black-text">RTI</a></li>
        <li><a href="askadoctor.php" class="black-text">Ask a Doctor</a></li>
        <li><a href="logout.php"  class="black-text">Logout</a></li>
        <?php
		}
		else
		{
		?>
        <li><a href="consumerstatus.php" class="black-text">Consumer Status</a></li>
        <li><a href="complain.php" class="black-text">File a Complain</a></li>
        <li><a href="rti.php" class="black-text">RTI</a></li>
        <li><a href="askadoctor.php" class="black-text">Ask a Doctor</a></li>
        <li><a href="login.php" class="black-text">Login</a></li>
        <li><a href="signup.php" class="black-text">Sign Up</a></li>
		<?php
        }
	  ?>
	  </ul>
      <ul class="side-nav" id="mobile-demo">
        <?php
		if(isset($_SESSION['loginid']))
		{
		?>
         <li><a href="consumerstatus.php" class="black-text">Consumer Status</a></li>
        <li><a href="complain.php" class="black-text">File a Complain</a></li>
        <li><a href="rti.php" class="black-text">RTI</a></li>
        <li><a href="askadoctor.php" class="black-text">Ask a Doctor</a></li>
         <li><a href="logout.php">Logout</a></li>	
		
        
        <?php
		}
		else
		{
		?>
        <li><a href="consumerstatus.php" class="black-text">Consumer Status</a></li>
        <li><a href="complain.php" class="black-text">File a Complain</a></li>
        <li><a href="rti.php" class="black-text">RTI</a></li>
        <li><a href="askadoctor.php" class="black-text">Ask a Doctor</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Sign Up</a></li>
      
      <?php
		}
	   ?>
      </ul>
    </div>
</nav>
</div>
