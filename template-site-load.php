<!DOCTYPE html>
<html lang="en">
<?php include( 'template-files/theme-head.php' ); ?>

<body>
  <div class="container-fluid">
    <div class="row">
  <a name="top"></a>
  <a class="sr-only" href="#content">Skip to main content</a> 
<!-- GLOBAL SECTION -->
  <?php
  if (!empty($_GET['global'])) {  
      $global = $_GET['global'];   
      $global = basename($global);   
      include("template-files/$global.php");
	  } else { 
    include("template-files/theme-global.php"); 
  } 
  ?>
<!-- GLOBAL SECTION END-->
<!-- GLOBAL SEARCH -->
  <?php
  if (!empty($_GET['template'])) {  
      $template = $_GET['template'];   
      $template = basename($template);   
      include("template-files/$template.php");   
  } 
  ?>
<!-- GLOBAL SEARCH END -->
<!-- GLOBAL MENU -->
  <?php
  if (!empty($_GET['template'])) {  
      $template = $_GET['template'];   
      $template = basename($template);   
      include("template-files/$template.php");   
  } 
  ?>
<!-- GLOBAL MENU END -->
<!-- PRIMARY NAVIGATION -->
  <?php
  if (!empty($_GET['template'])) {  
      $template = $_GET['template'];   
      $template = basename($template);   
      include("template-files/$template.php");   
  } 
  ?>
<!-- PRIMARY NAVIGATION END -->  
<!-- HIGHLIGHT SECTION -->
  <?php
  if (!empty($_GET['template'])) {  
      $template = $_GET['template'];   
      $template = basename($template);   
      include("template-files/$template.php");   
  } 
  ?> 
<!-- HIGHLIGHT SECTION END --> 
<!-- MAIN TOP SECTION -->
  <?php
  if (!empty($_GET['template'])) {  
      $template = $_GET['template'];   
      $template = basename($template);   
      include("template-files/$template.php");   
  } 
  ?>  
<!-- MAIN TOP END -->
<!-- MAIN SECTION -->
  <?php
  if (!empty($_GET['template'])) {  
      $template = $_GET['template'];   
      $template = basename($template);   
      include("template-files/$template.php");   
  } 
  ?> 
<!-- MAIN SECTION END -->
<!-- MAIN BOTTOM SECTION -->
  <?php
  if (!empty($_GET['template'])) {  
      $template = $_GET['template'];   
      $template = basename($template);   
      include("template-files/$template.php");   
  } 
  ?> 
<!-- MAIN BOTTOM SECTION END -->  
<!-- FOOTER SECTION -->
  <?php
  if (!empty($_GET['template'])) {  
      $template = $_GET['template'];   
      $template = basename($template);   
      include("template-files/$template.php");   
  } 
  ?> 
<!-- FOOTER SECTION END -->
<!-- JAVASCRIPT -->
  <?php
  if (!empty($_GET['template'])) {  
      $template = $_GET['template'];   
      $template = basename($template);   
      include("template-files/$template.php");   
  } 
  ?> 
<!-- JAVASCRIPT END -->
    </div>
  </div>
</body>
</html>



<?php include( 'template-files/theme-global.php' ); ?>
<?php include( 'template-files/theme-global-search.php' ); ?>
<?php include( 'template-files/theme-global-menu.php' ); ?>
<?php include( 'template-files/theme-primary-navigation.php' ); ?>
<?php include( 'template-files/theme-highlight.php' ); ?>
<?php // include( 'template-files/theme-header.php' ); ?>
<?php include( 'template-files/theme-main-top.php' ); ?> 
<?php include( 'template-files/theme-main.php' ); ?> 
<?php include( 'template-files/theme-main-bottom.php' ); ?> 
<?php include( 'template-files/theme-footer.php' ); ?>
<?php include( 'template-files/theme-javascript.php' ); ?>