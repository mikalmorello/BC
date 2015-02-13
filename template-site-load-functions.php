<!DOCTYPE html>
<html lang="en">
<?php include( 'template-files/theme-head.php' ); ?>

<body>
  <div class="container-fluid">
    <div class="row">
  <a name="top"></a>
  <a class="sr-only" href="#content">Skip to main content</a> 
  
<!-- SECTIONS ->
<?php
foreach($_GET as $name => $value) {
   //print "$name : $value<br>";
   $name = basename($value); 
   include("template-files/$name.php");
}

?>
<!-- SECTIONS END-->

<?php include( 'template-files/theme-javascript.php' ); ?>

<!-- FUNCTIONS -->




    </div>
  </div>
</body>
</html>
