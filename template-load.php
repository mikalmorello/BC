<!DOCTYPE html>
<html lang="en">
<?php include( 'template-files/theme-base-head.php' ); ?>

<body>
  <div class="container-fluid">
  <div class="row
<?php
foreach($_GET as $name => $value) {
   $name = $value; 
   if (($name == 'theme-section-primary-navigation-offcanvas') || ($name == 'theme-section-primary-navigation-offcanvas-priority')) {
	 echo " row-offcanvas row-offcanvas-right";
   }
}

?>  
">

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

<?php include( 'template-files/theme-base-javascript.php' ); ?>

<!-- FUNCTIONS -->




    </div>
  </div>
</body>
</html>
