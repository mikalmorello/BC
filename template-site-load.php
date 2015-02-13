<!DOCTYPE html>
<html lang="en">
<?php include( 'template-files/theme-head.php' ); ?>

<body>
  <div class="container-fluid">
    <div class="row">
  <a name="top"></a>
  <a class="sr-only" href="#content">Skip to main content</a> 
<!-- SECTION 1 -->
  <?php
  if (!empty($_GET['section1'])) {  
      $section1 = $_GET['section1'];   
      $section1 = basename($section1);   
      include("template-files/$section1.php");
  }
  ?>
<!-- SECTION END-->
<!-- SECTION 2 -->
  <?php
  if (!empty($_GET['section2'])) {  
      $section2 = $_GET['section2'];   
      $section2 = basename($section2);   
      include("template-files/$section2.php");
  }
  ?>
<!-- SECTION END-->
<!-- SECTION 3 -->
  <?php
  if (!empty($_GET['section3'])) {  
      $section3 = $_GET['section3'];   
      $section3 = basename($section3);   
      include("template-files/$section3.php");
  }
  ?>
<!-- SECTION END-->
<!-- SECTION 4 -->
  <?php
  if (!empty($_GET['section4'])) {  
      $section4 = $_GET['section4'];   
      $section4 = basename($section4);   
      include("template-files/$section4.php");
  }
  ?>
<!-- SECTION END-->
<!-- SECTION 5 -->
  <?php
  if (!empty($_GET['section5'])) {  
      $section5 = $_GET['section5'];   
      $section5 = basename($section5);   
      include("template-files/$section5.php");
  }
  ?>
<!-- SECTION END-->
<!-- SECTION 6 -->
  <?php
  if (!empty($_GET['section6'])) {  
      $section6 = $_GET['section6'];   
      $section6 = basename($section6);   
      include("template-files/$section6.php");
  }
  ?>
<!-- SECTION END-->
<!-- SECTION 7 -->
  <?php
  if (!empty($_GET['section7'])) {  
      $section7 = $_GET['section7'];   
      $section7 = basename($section7);   
      include("template-files/$section7.php");
  }
  ?>
<!-- SECTION END-->
<!-- SECTION 8 -->
  <?php
  if (!empty($_GET['section8'])) {  
      $section8 = $_GET['section8'];   
      $section8 = basename($section8);   
      include("template-files/$section8.php");
  }
  ?>
<!-- SECTION END-->
<!-- SECTION 9 -->
  <?php
  if (!empty($_GET['section9'])) {  
      $section9 = $_GET['section9'];   
      $section9 = basename($section9);   
      include("template-files/$section9.php");
  }
  ?>
<!-- SECTION END-->
<!-- SECTION 10 -->
  <?php
  if (!empty($_GET['section10'])) {  
      $section10 = $_GET['section10'];   
      $section10 = basename($section10);   
      include("template-files/$section10.php");
  }
  ?>
<!-- SECTION END-->
<?php include( 'template-files/theme-javascript.php' ); ?>
    </div>
  </div>
</body>
</html>
