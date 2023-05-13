<?php
 include_once 'header.php';
 ?>
<section>
    <h2>Home</h2>
    <?php
    if (isset($_SESSION["useruid"])) {
        echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
    }
    ?>
    </section>



 <?php
 include_once 'footer.php';
 ?>
  
