
<?php
 include_once 'header.php';
 ?>

<section class=signup-form>
   <h2>Log In</h2>
   <form action="includes/login.inc.php" method="post">
    <input type="text" name="name" placeholder="Username/Email..">
    <input type="password" name="pwd" placeholder="Password..">
    <button type="Submit" name="submit">Login</button>
  </form>
 </section>
 
 <?php
 include_once 'footer.php';
 ?>