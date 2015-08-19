<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Boston College - Style Guide</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="style-guide/css/theme-styleguide.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--<link rel="stylesheet" type="text/css" href="style-guide/css/normalize.css" /> -->
		<link rel="stylesheet" type="text/css" href="style-guide/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="style-guide/css/component.css" />
		<script src="style-guide/js/modernizr.custom.js"></script>

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav nav" role="tablist" id="myTab">
                <li role="presentation" class="active sidebar-brand"><a href="#overview" aria-controls="home" role="tab" data-toggle="tab"><img src="assets/template-images/main-branding-stacked-desktop.svg" /></a></li>
                <li role="presentation"><a href="#themes" aria-controls="settings" role="tab" data-toggle="tab">Themes</a></li>
                <li role="presentation"><a href="#templates" aria-controls="profile" role="tab" data-toggle="tab">Templates</a></li>
                <li role="presentation"><a href="#sections" aria-controls="messages" role="tab" data-toggle="tab">Sections</a></li>
                <li role="presentation"><a href="#components" aria-controls="messages" role="tab" data-toggle="tab">Components</a></li>
                <li role="presentation"><a href="#elements" aria-controls="messages" role="tab" data-toggle="tab">Elements</a></li>
                <li role="presentation"><a href="#css" aria-controls="settings" role="tab" data-toggle="tab">CSS</a></li>
                <li role="presentation"><a href="#js" aria-controls="settings" role="tab" data-toggle="tab">JS</a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <div class="container-fluid">
            <div class="row menu">
              <div class="col-lg-12">
                <a id="menu-toggle" class="btn" href="#menu-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
              </div>
            </div>
            <div class="tab-content">
              <!-- SECTION -->
              <div role="tabpanel" class="tab-pane fade in active" id="overview">
                <div class="row introduction">
                  <div class="col-lg-12">
                    <h1>Prototype Design System</h1>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porta placerat velit id blandit. Maecenas hendrerit accumsan odio, sit amet laoreet ante consequat quis. Sed pharetra lorem sit amet nulla semper, efficitur dignissim tortor dapibus. Praesent a molestie odio.</p>
                    </p>
                  </div>
                </div>
                <!-- TEST -->
                <div class="row">
                  <div class="slideshow" id="slideshow">
                    <ol class="slides">
                        <li class="current">
                            <div class="description">
                                <h3><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Modular Design</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porta placerat velit id blandit. Maecenas hendrerit</p>
                            </div>
                            <div class="tiltview col">
                                <a href=""><img src="style-guide/img/1_screen.jpg"/></a>
                                <a href=""><img src="style-guide/img/2_screen.jpg"/></a>
                            </div>
                        </li>
                        <li>
                            <div class="description">
                                <h3><span class="glyphicon glyphicon-resize-small" aria-hidden="true"></span> Responsive Layout</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porta placerat velit id blandit. Maecenas hendrerit</p>
                            </div>
                            <div class="tiltview row">
                                <a href=""><img src="style-guide/img/3_mobile.jpg"/></a>
                                <a href=""><img src="style-guide/img/4_mobile.jpg"/></a>
                            </div>
                        </li>
                        <li>
                            <div class="description">
                                <h3><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Customizable Themes</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porta placerat velit id blandit. Maecenas hendrerit</p>
                            </div>
                            <div class="tiltview col">
                                <a href=""><img src="style-guide/img/1_screen.jpg"/></a>
                                <a href=""><img src="style-guide/img/2_screen.jpg"/></a>
                            </div>
                        </li>
                    </ol>
                  </div>
			    </div>
                <!-- TEST END -->
                <!-- HOME SECTION -->
                <div class="row home">
                  <div class="col-lg-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porta placerat velit id blandit. Maecenas hendrerit accumsan odio, sit amet laoreet ante consequat quis. Sed pharetra lorem sit amet nulla semper, efficitur dignissim tortor dapibus. Praesent a molestie odio.</p>
                  </div>
                </div>
                <div class="row home">
                  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 grey-box grey-1">
                    <p><a href="#templates" aria-controls="settings" role="tab" data-toggle="tab">TEMPLATES</a></p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 grey-box grey-2">
                    <p><a href="#themes" aria-controls="settings" role="tab" data-toggle="tab">THEMES</a></p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 grey-box grey-3">
                    <p><a href="#sections" aria-controls="settings" role="tab" data-toggle="tab">SECTIONS</a></p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 grey-box grey-4">
                    <p><a href="#components" aria-controls="settings" role="tab" data-toggle="tab">COMPONENTS</a></p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 grey-box grey-5">
                    <p><a href="#css" aria-controls="settings" role="tab" data-toggle="tab">CSS</a></p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 grey-box grey-6">
                    <p><a href="#js" aria-controls="settings" role="tab" data-toggle="tab">JS</a></p>
                  </div>
                </div>
                <!-- HOME CONTENT SECTION END -->
              </div>
              <!-- SECTION -->
              <div role="tabpanel" class="tab-pane fade" id="themes">
                <div class="row introduction">
                  <div class="col-lg-12">
                    <h1>Themes</h1>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porta placerat velit id blandit. Maecenas hendrerit accumsan odio, sit amet laoreet ante consequat quis. Sed pharetra lorem sit amet nulla semper, efficitur dignissim tortor dapibus. Praesent a molestie odio.</p>
                    </p>
                  </div>
                </div>
                <div class="row content">
                  <div class="col-lg-12">
                    xxx
                  </div>
                </div>
              </div>
              <!-- SECTION -->
              <div role="tabpanel" class="tab-pane fade" id="templates">
                <div class="row introduction">
                  <div class="col-lg-12">
                    <h1>Templates</h1>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porta placerat velit id blandit. Maecenas hendrerit accumsan odio, sit amet laoreet ante consequat quis. Sed pharetra lorem sit amet nulla semper, efficitur dignissim tortor dapibus. Praesent a molestie odio.</p>
                    </p>
                  </div>
                </div>
                <div class="row content">
                  <div class="col-lg-12">
                    <a href="template-load.php?section1=theme-section-global&section2=theme-section-global-search&section3=theme-section-global-menu&section4=theme-section-primary-navigation-offcanvas&section5=theme-section-highlight&section7=theme-section-main-home&section8=theme-section-main-bottom&section9=theme-section-footer">
                      <div class="template-box">
                        <div class="template-header">
                          <h4>Homepage</h4>
                        </div>
                        <div class="template-body">
                          <img src="style-guide/images/template-landing-page.svg" />
                        </div>
                      </div>
                    </a>
                    <a href="template-load.php?section1=theme-section-global&section2=theme-section-global-search&section3=theme-section-global-menu&section4=theme-section-primary-navigation&section5=theme-section-highlight&section6=theme-section-main-top&section7=theme-section-main&section8=theme-section-main-bottom&section9=theme-section-footer">
                      <div class="template-box">
                        <div class="template-header">
                          <h4>Template</h4>
                        </div>
                        <div class="template-body">
                         <img src="style-guide/images/template-landing-page.svg" />
                        </div>
                      </div>
                    </a>
                    <a href="template-load.php?section1=theme-section-global&section2=theme-section-global-search&section3=theme-section-global-menu&section4=theme-section-primary-navigation-offcanvas&section5=theme-section-highlight&section6=theme-section-main-top&section7=theme-section-main&section8=theme-section-main-bottom&section9=theme-section-footer">
                      <div class="template-box">
                        <div class="template-header">
                          <h4>Mobile Off-Canvas Navigation</h4>
                        </div>
                        <div class="template-body">
                          <img src="style-guide/images/template-landing-page.svg" />
                        </div>
                      </div>
                    </a>
                    <a href="template-load.php?section1=theme-section-global&section2=theme-section-global-search&section3=theme-section-global-menu&section4=theme-section-primary-navigation&section5=theme-section-highlight-background-video&section6=theme-section-main-top&section7=theme-section-main&section8=theme-section-main-bottom&section9=theme-section-footer">
                      <div class="template-box">
                        <div class="template-header">
                          <h4>HTML5 Video Background</h4>
                        </div>
                        <div class="template-body">
                          <img src="style-guide/images/template-landing-page.svg" />
                        </div>
                      </div>
                    </a>
                    <a href="template-load.php?section1=theme-section-global&section2=theme-section-global-search&section3=theme-section-global-menu&section4=theme-section-primary-navigation&section5=theme-section-highlight-background-carousel&section6=theme-section-main-top&section7=theme-section-main&section8=theme-section-main-bottom&section9=theme-section-footer">
                      <div class="template-box">
                        <div class="template-header">
                          <h4>Carousel Background</h4>
                        </div>
                        <div class="template-body">
                          <img src="style-guide/images/template-landing-page.svg" />
                        </div>
                      </div>
                    </a>
                    <a href="template-load.php?section1=theme-component-alert&section2=theme-section-global&section3=theme-section-global-search&section4=theme-section-global-menu&section5=theme-section-primary-navigation&section6=theme-section-highlight&section7=theme-section-main-top&section8=theme-section-main&section9=theme-section-main-bottom&section10=theme-section-footer">
                      <div class="template-box">
                        <div class="template-header">
                          <h4>Alert</h4>
                        </div>
                        <div class="template-body">
                          <img src="style-guide/images/template-landing-page.svg" />
                        </div>
                      </div>
                    </a>
                    <a href="template-load.php?section1=theme-section-global&section2=theme-section-global-search&section3=theme-section-global-menu&section4=theme-section-primary-navigation-offcanvas&section5=theme-section-highlight-academics&section7=theme-section-main-academics&section8=theme-section-main-bottom&section9=theme-section-footer">
                      <div class="template-box">
                        <div class="template-header">
                          <h4>Academics</h4>
                        </div>
                        <div class="template-body">
                          <img src="style-guide/images/template-landing-page.svg" />
                        </div>
                      </div>
                    </a>
                    <a href="template-load.php?section4=theme-section-primary-navigation-offcanvas-priorityplus&section5=theme-section-highlight-application&section6=theme-section-main-top&section7=theme-section-main-media-list&section9=theme-section-footer-simple">
                      <div class="template-box">
                        <div class="template-header">
                          <h4>Facewall</h4>
                        </div>
                        <div class="template-body">
                          <img src="style-guide/images/template-landing-page.svg" />
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <!-- SECTION -->
              <div role="tabpanel" class="tab-pane fade" id="sections">
                <div class="row introduction">
                  <div class="col-lg-12">
                    <h1>Sections</h1>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porta placerat velit id blandit. Maecenas hendrerit accumsan odio, sit amet laoreet ante consequat quis. Sed pharetra lorem sit amet nulla semper, efficitur dignissim tortor dapibus. Praesent a molestie odio.</p>
                    </p>
                  </div>
                </div>
                <div class="row content">
                  <div class="col-xs-12">
                    <h3>Sections available</h3>
                    <ul>
                      <li>Global Banner</li>
                      <li>Global Menu</li>
                      <li>Global Search</li>
                      <li>Primary Navigation</li>
                      <li>Highlight</li>
                      <li>Main Top</li>
                      <li>Main</li>
                      <li>Main Bottom</li>
                      <li>Footer</li>
                    </ul>
                    <div class="template-sections">
                      <div class="template-example-global"><img src="style-guide/images/example-global.png" /><span></span></div>
                      <div class=""></div>
                      <div class=""></div>
                      <div class="template-example-primary-navigation"><img src="style-guide/images/example-primary-navigation.png" /><span></span></div>
                      <div class="template-example-highlight"><img src="style-guide/images/example-highlight.png" /><span></span></div>
                      <div class="template-example-main-top"><img src="style-guide/images/example-main-top.png" /><span></span></div>
                      <div class="template-example-main"><img src="style-guide/images/example-main.png" /><span></span></div>
                      <div class="template-example-main-bottom"><img src="style-guide/images/example-main-bottom.png" /><span></span></div>
                      <div class="template-example-footer"><img src="style-guide/images/example-footer.png" /><span></span></div>
                    </div>
                    <h3>DYNAMIC PAGE BUILDER - EXAMPLES</h3>
                    <ul>
                      <li><a href="template-load.php?section1=theme-section-global&section2=theme-section-global-search&section3=theme-section-global-menu&section4=theme-section-primary-navigation&section5=theme-section-highlight&section6=theme-section-main-top&section7=theme-section-main&section8=theme-section-main-bottom&section9=theme-section-footer">BASE TEMPLATE</a></li>
                      <li><a href="template-load.php?section1=theme-section-global&section2=theme-section-global-search&section3=theme-section-global-menu&section4=theme-section-primary-navigation&section5=theme-section-highlight&section7=theme-section-main-home&section8=theme-section-main-bottom&section9=theme-section-footer">HOME TEMPLATE</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- SECTION -->
              <div role="tabpanel" class="tab-pane fade" id="components">
                <div class="row introduction">
                  <div class="col-lg-12">
                    <h1>Components</h1>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porta placerat velit id blandit. Maecenas hendrerit accumsan odio, sit amet laoreet ante consequat quis. Sed pharetra lorem sit amet nulla semper, efficitur dignissim tortor dapibus. Praesent a molestie odio.</p>
                    </p>
                  </div>
                </div>
                <div class="row content">
                  <div class="col-lg-12">
                    <a href="template-load.php?template=theme-component-alert">
                      <div class="template-box">
                        <div class="template-header">
                          <h4>Alert</h4>
                        </div>
                        <div class="template-body">
                          <img src="style-guide/images/component-alert.svg" />
                        </div>
                      </div>
                    </a>
                   <a href="template-load.php?template=theme-component-carousel">
                      <div class="template-box">
                        <div class="template-header">
                          <h4>Carousel</h4>
                        </div>
                        <div class="template-body">
                          <img src="style-guide/images/component-carousel.svg" />
                        </div>
                      </div>
                    </a>
                    <a href="">
                      <div class="template-box">
                        <div class="template-header">
                          <h4>Events</h4>
                        </div>
                        <div class="template-body">
                          <img src="style-guide/images/component-events.svg" />
                        </div>
                      </div>
                    </a>
                    <a href="template-load.php?template=theme-component-expand">
                      <div class="template-box">
                        <div class="template-header">
                          <h4>Expand / Collapse</h4>
                        </div>
                        <div class="template-body">
                          <img src="style-guide/images/component-expand.svg" />
                        </div>
                      </div>
                    </a>
                    <a href="">
                      <div class="template-box">
                        <div class="template-header">
                          <h4>Modal</h4>
                        </div>
                        <div class="template-body">
                          <img src="style-guide/images/component-modal.svg" />
                        </div>
                      </div>
                    </a>
                    <a href="template-load.php?template=theme-component-news">
                      <div class="template-box">
                        <div class="template-header">
                          <h4>News</h4>
                        </div>
                        <div class="template-body">
                          <img src="style-guide/images/component-news.svg" />
                        </div>
                      </div>
                    </a>
                    <a href="">
                      <div class="template-box">
                        <div class="template-header">
                          <h4>Video</h4>
                        </div>
                        <div class="template-body">
                          <img src="style-guide/images/component-video.svg" />
                        </div>
                      </div>
                    </a>
                    <a href="template-load.php?template=theme-component-dynamic-grid">
                      <div class="template-box">
                        <div class="template-header">
                          <h4>Dynamic Grid</h4>
                        </div>
                        <div class="template-body">
                          <img src="style-guide/images/component-video.svg" />
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <!-- SECTION -->
              <div role="tabpanel" class="tab-pane fade" id="elements">
              </div>
              <!-- SECTION -->
              <div role="tabpanel" class="tab-pane fade" id="css">
                <div class="row introduction">
                  <div class="col-lg-12">
                    <h1>CSS</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porta placerat velit id blandit. Maecenas hendrerit accumsan odio, sit amet laoreet ante consequat quis. Sed pharetra lorem sit amet nulla semper, efficitur dignissim tortor dapibus. Praesent a molestie odio.</p>
                   </div>
                 </div>
                 <div class="row content">
                   <div class="col-lg-12">
                    <h3><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> Base</h3>
                    <p>Base CSS files which provide the overall design and defaults styles, usually for single element selectors</p>
                    <ul class="list-inline">
                      <li><a href="assets/css/base.css"><span class="glyphicon glyphicon-file" aria-hidden="true"></span><span class="glyphicon-text" aria-hidden="true">base.css</span></a></li>
                    </ul>
                    <h3><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> Layout</h3>
                    <p>Divides the page into sections, acts as containers for components</p>
                    <ul class="list-inline">
                      <li><a href="assets/css/layout.css"><span class="glyphicon glyphicon-file" aria-hidden="true"></span><span class="glyphicon-text" aria-hidden="true">layout.css</span></a></li>
                    </ul>
                    <h3><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> Components</h3>
                    <p>Component specific CSS files for component variations</p>
                    <ul class="list-inline">
                      <li><a href="assets/css/components.css"><span class="glyphicon glyphicon-file" aria-hidden="true"></span><span class="glyphicon-text" aria-hidden="true">component.css</span></a></li>
                    </ul>
                    <h3><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> Themes</h3>
                    <p>Theme specific CSS files for various looks and feel.</p>
                    <ul class="list-inline">
                      <li><a href="assets/css/theme.css"><span class="glyphicon glyphicon-file" aria-hidden="true"></span><span class="glyphicon-text" aria-hidden="true">theme.css</span></a></li>
                    </ul>
                    <h3><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> Frameworks</h3>
                    <p>The Boostrap Framework provides the underlying CSS structure of the site</p>
                    <ul class="list-inline">
                      <li><a href="assets/css/boostrap.css"><span class="glyphicon glyphicon-file" aria-hidden="true"></span><span class="glyphicon-text" aria-hidden="true">bootstrap.css</span></a></li>
                    </ul>
                    <hr />
                    <p><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>The required files will eventually be merged into a single server call using LESS or SASS.  The design system utilizes seperate files for ease of developement.</p>
                  </div>
                </div>
              </div>
              <!-- SECTION -->
              <div role="tabpanel" class="tab-pane fade" id="js">
                <div class="row introduction">
                  <div class="col-lg-12">
                    <h1>JS</h1>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porta placerat velit id blandit. Maecenas hendrerit accumsan odio, sit amet laoreet ante consequat quis. Sed pharetra lorem sit amet nulla semper, efficitur dignissim tortor dapibus. Praesent a molestie odio.</p>
                    </p>
                  </div>
                </div>
                <div class="row content">
                  <div class="col-lg-12">
                    <h3><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> Base</h3>
                    <p>Something clever goes here.  Hodor!</p>
                    <ul class="list-inline">
                      <li><a href="assets/js/base.js"><span class="glyphicon glyphicon-file" aria-hidden="true"></span><span class="glyphicon-text" aria-hidden="true">base.js</span></a></li>
                      <li><a href="assets/js/base.js"><span class="glyphicon glyphicon-file" aria-hidden="true"></span><span class="glyphicon-text" aria-hidden="true">base.js</span></a></li>
                      <li><a href="assets/js/base.js"><span class="glyphicon glyphicon-file" aria-hidden="true"></span><span class="glyphicon-text" aria-hidden="true">base.js</span></a></li>
                      <li><a href="assets/js/base.js"><span class="glyphicon glyphicon-file" aria-hidden="true"></span><span class="glyphicon-text" aria-hidden="true">base.js</span></a></li>
                      <li><a href="assets/js/base.js"><span class="glyphicon glyphicon-file" aria-hidden="true"></span><span class="glyphicon-text" aria-hidden="true">base.js</span></a></li>
                    </ul>
                    <h3><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> Base</h3>
                    <p>Something clever goes here.  Hodor!</p>
                    <ul class="list-inline">
                      <li><a href=""><span class="glyphicon glyphicon-file" aria-hidden="true"></span><span class="glyphicon-text" aria-hidden="true">plugins.js</span></a></li>
                    </ul>
                    <h3><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> Framework</h3>
                    <p>The Boostrap Framework & Jquery provide the underlying JS functionality of the site</p>
                    <ul class="list-inline">
                      <li><a href="assets/js/boostrap.js"><span class="glyphicon glyphicon-file" aria-hidden="true" class="glyphicon-text" aria-hidden="true"></span><span class="glyphicon-text" aria-hidden="true">bootstrap.js</span></a></li>
                      <li><a href="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><span class="glyphicon glyphicon-file" aria-hidden="true"></span><span class="glyphicon-text" aria-hidden="true">jquery.js</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
		var text = $(this).html() == '<span class=\"glyphicon glyphicon-remove\"></span>' ? '<span class=\"glyphicon glyphicon-menu-hamburger\"></span>' : '<span class=\"glyphicon glyphicon-remove\"></span>';
		  $('element').slideToggle();
		  $(this).html(text);
    });
    </script> -->
    
        <script src="style-guide/js/classie.js"></script>
		<script src="style-guide/js/tiltSlider.js"></script>
		<script>
			new TiltSlider( document.getElementById( 'slideshow' ) );
		</script>
    
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
			  if ($("#wrapper").hasClass("toggled")) {
			  $("#menu-toggle").html('<span class=\"glyphicon glyphicon-menu-hamburger\"></span>');
		  } else {
			  $("#menu-toggle").html('<span class=\"glyphicon glyphicon-remove\"></span>');
		  }
    });
    </script>
    
   <!-- 
    <script>
	$("#menu-toggle").click(function() {
	 
	 if ($("#page-content-wrapper").css("margin-right") == "-250px" ){
		  if ($("#wrapper").hasClass("toggled")) {
			  $("#menu-toggle").html('<span class=\"glyphicon glyphicon-menu-hamburger\"></span>');
		  } else {
			  $("#menu-toggle").html('<span class=\"glyphicon glyphicon-remove\"></span>');
		  }
		  
	 } else if ($("#page-content-wrapper").css("margin-right") == "0" ){
		 	  if ($("#wrapper").hasClass("toggled")) {
			  $("#menu-toggle").html('<span class=\"glyphicon glyphicon-remove\"></span>');
		  } else {
			  $("#menu-toggle").html('<span class=\"glyphicon glyphicon-menu-hamburger\"></span>');
		  }
	 }
		  
	});
	</script>-->
    


</body>

</html>
