<!DOCTYPE html>
<html lang="en">

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Sword Museum</title>

  <!-- Bootstrap core CSS -->
  <link href="packages/bootstrap/bootstrap.css" rel="stylesheet">

  <!-- Fancybox css -->
  <link href="packages/fancybox/jquery.fancybox.min.css" rel="stylesheet">

    <!-- X3DOM css -->
  <link href="packages/x3dom/x3dom.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

</head>
<canvas id="canvasDust"></canvas>
<body onload="document.body.style.opacity='1'">
<header>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a  class="navHome navbar-brand js-scroll-trigger" href="#">
        	<div class="logo-border" data-hover="Sword Museum">SM</div></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	        <i class="fas fa-bars"></i> 
	        <span class="navbar-toggler-icon"></span>
    	</button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item">
              <a class="navHome nav-link js-scroll-trigger link-1" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="navModels nav-link js-scroll-trigger link-1" href="#">Models</a>
            </li>
            <li class="nav-item">
              <a class="navExtras nav-link js-scroll-trigger link-1" href="#">Extras</a>
            </li>
            <li class="nav-item">
              <a class="navDownloads nav-link js-scroll-trigger link-1" href="#">Downloads</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /.Navigation -->
  </header>

  <!-- Main Container -->
  <div class="container">
  	<!-- Home -->
    <div id="home" class="container">
      <div class="row homepage-height justify-content-center"></div>
      
      <div id="homepageText" class="row homepage-height justify-content-center align-items-center text-center"></div>

      <div class="row homepage-height justify-content-center">
      </div>
    </div>
    <!-- /.Home -->

    <!-- Models -->
    <div id="models" class="container" style="display:none;">
      <div class="row models-height-edge justify-content-center">
      </div>
      <div class="row models-height-middle justify-content-center align-items-center text-center">
      <div class="col-sm-12 col-md-10 background-glow-models">
	        <p class="text-white"> Click images to see 3D models</p>
        <!--Carousel Wrapper-->
        <div id="carousel" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
          </ol>
          <!--/.Indicators-->
          <!--Slides-->
          <div id="modelCarousel"></div>
          <!--/.Slides-->
          <!--Controls-->
          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->
      </div>

      <!--Lightbox-->
      <div style="display: none;" id="animatedModal" class=" text-center p-5 lightbox-main-bg">
        
        <!-- 3D Models -->
        <div class="row justify-content-center">
          <div class="model3D">
            <x3d id="wire" class="model-resize">
              <scene>
                <Switch whichChoice="0" id='SceneSwitch'>
                  <transform>
                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/SamuraiSword.x3d"> </inline>
                  </transform>
                  <transform>
                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/Cutlass.x3d"> </inline>
                  </transform>
                  <transform>
                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/GreatSword.x3d"> </inline>
                  </transform>
                  <transform>
                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/Dagger.x3d"> </inline>
                  </transform>
                </Switch>
              </scene>
            </x3d>
          </div>
        </div>
        <!-- /.3D Models -->
        <br><br>
        <!--Buttons-->
        <div class="row justify-content-center">
          <!-- Camera -->
          <div class="col-xs-12 col-sm-4 model-buttons text-center button-width">
            <h3 class="text-white">Camera Buttons</h3>
            <hr class="divider2 my-3">
            <button type="button" class="btn btn-outline-light btn-model btn-sm" onclick="cameraFront();">Front Camera</button>
            <button type="button" class="btn btn-outline-light btn-model btn-sm" onclick="cameraTop();">Top Camera</button>
            <button type="button" class="btn btn-outline-light btn-model btn-sm" onclick="cameraLeft()">Left Camera</button>
            <button type="button" class="btn btn-outline-light btn-model btn-sm" onclick="cameraBlade()">Blade Camera</button>
            <button type="button" class="btn btn-outline-light btn-model btn-sm" onclick="cameraHandle()">Handle Camera</button>
          </div>
          <!-- /.Camera -->
          <!-- Lights -->
          <div class="col-xs-12 col-sm-4 model-buttons text-center">
            <h3 class="text-white">Light Buttons</h3>
            <hr class="divider2 my-3">
            <button type="button" class="btn btn-outline-light btn-model btn-sm" onclick="lightFront()">Front Light</button>
            <button type="button" class="btn btn-outline-light btn-model btn-sm" onclick="lightFrontLeft()">Front Left Light</button>
            <button type="button" class="btn btn-outline-light btn-model btn-sm" onclick="lightFrontRight()">Front Right Light</button>
            <button type="button" class="btn btn-outline-light btn-model btn-sm" onclick="lightBackLeft()">Back Left Light</button>
            <button type="button" class="btn btn-outline-light btn-model btn-sm" onclick="lightBackRight()">Back Right Light</button>
          </div>
          <!-- /.Lights -->
          <!-- Other -->
          <div class="col-xs-12 col-sm-4 model-buttons text-center">
            <h3 class="text-white">Other Buttons</h3>
            <hr class="divider2 my-3">
            <button type="button" class="btn btn-outline-light btn-model btn-sm" onclick="wireFrame()">WireFrame</button>
            <button type="button" class="btn btn-outline-light btn-model btn-sm" onclick="animateModel()">Animation On/Off</button>
            <button type="button" class="btn btn-outline-light btn-model btn-sm" onclick="resetPosition()">Reset Position</button>
          </div>
          <!-- /.Other -->
          
        </div>
        <!--/.Buttons-->

      </div>
      <!--/.Lightbox-->

      </div>

      <div class="row models-height-edge justify-content-center">
      </div>

    </div>
    <!-- /.Models -->

	<!-- Extras -->
    <div id="extras" class="container" style="display:none;">
    	<div class="row extras-height align-items-center justify-content-center">
        </div>

        <div id="extrasText" class="row extras-height-middle justify-content-center  text-center"></div>

        <div class="row extras-height justify-content-center">
        </div>
    </div>
    <!-- /.Extras -->

    <!-- Downloads -->
    <div id="downloads" class="container" style="display:none;">
    	<div class="row downloads-height justify-content-center">
        </div>

        <div class="row homepage-height justify-content-center align-items-center text-center">
            <div id="main-text" class="downloads col-xs-12 col-sm-6 transparent-bg">
              <h3 class="text-white mt-0">Statement of Originality</h3>
              <hr class="divider2 my-6">
              <p class="text-white mb-4">These web pages are submitted as part requirement for the degree of Computer Science at the University of Sussex.  They are the product of my own labour except where indicated in the web page content. These web pages or contents may be freely copied and distributed provided the source is acknowledged</p>
              <br>
              <h3 class="text-white mt-0">Downloads</h3>
              <hr class="divider2 my-6">
              <p class="text-white mt-0">Click the links to download.</p>

              	<a href="downloads/codebase.zip" download><button type="button" class="btn btn-outline-light btn-model btn-md">Codebase</button></a>
              	<a href="downloads/3ds_max_2017.zip" download><button type="button" class="btn btn-outline-light btn-model btn-md">3ds Max Models</button></a>
              	<a href="downloads/VRML_models.zip" download><button type="button" class="btn btn-outline-light btn-model btn-md">VRML models</button></a>

            </div>
        </div>

        <div class="row downloads-height justify-content-center">
        </div>
    </div>

    </div>
    <!-- /.Downloads -->
  </div>
  <!-- /.Main Container -->

  <!-- Footer -->
  <footer class="page-footer font-small bg-grey fixed-bottom">

    <!-- Copyright -->
    <div class="footer-copyright small text-center text-white-50">Candidate Number: 149111 
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="packages/jquery/jquery-3.1.1.js"></script>
  <script src="packages/bootstrap/bootstrap.js"></script>

  <!-- X3DOM JavaScript -->
  <script type='text/javascript' src="packages/x3dom/x3dom.js"></script>

  <!-- Fancybox JavaScript -->
  <script src="packages/fancybox/jquery.fancybox.min.js"></script>

  <!-- Custom JavaScript -->
  <script src="js/backgroundDustParticle.js"></script>
  <script src="js/pageSelection.js"></script>
  <script src="js/modelSwap.js"></script>
  <script src="js/modelInteraction.js"></script>
  <script src="js/getHomeData.js"></script>
  <script src="js/getModelData.js"></script>
  <script src="js/getExtrasData.js"></script>

</body>

</html>
