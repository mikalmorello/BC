<!DOCTYPE html>
<html lang="en">
<?php include( 'template-files/theme-head.php' ); ?>

<body>
  <div class="container-fluid">
    <div class="row">
  <a name="top"></a>
  <a class="sr-only" href="#content">Skip to main content</a> 
<!-- LOAD COMPONENT -->
<?php
if (!empty($_GET['template'])) {  
    $template = $_GET['template'];   
    $template = basename($template);   
    include("template-files/$template.php");   
} else { 
    include("template-files/theme-main.php"); 
} 
?>

  <?php include( 'template-files/theme-javascript.php' ); ?>
    </div>
  </div>
</body>
</html>
