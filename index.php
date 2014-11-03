<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover.zoom.js"></script>
    <script src="assets/js/hover.zoom.conf.js"></script>
      <script type="text/javascript" scr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
              <link rel=stylesheet href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    

	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">
					<img src="assets/img/user.png" alt="Stanley">
					<h1>IS218 Twitter Application</h1>
                    <p>Click on some links below!</p>
				
				</div><!-- /col-lg-8 -->
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /ww -->
	
	
	
	<div class="container pt">
		<div class="row mt centered">	
			<div class="col-lg-4">
				<div class="accordion" id="accordion2">
                      <div class="accordion-group">
                        <div class="accordion-heading">
                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                            <h1>Timeline</h1>
                          </a>
                        </div>
                        <div id="collapseOne" class="accordion-body collapse in">
                          <div class="accordion-inner">
                              <?php
                                    require 'autoloader.php';
                                    $url = 'followers/ids.json';
                                    $getfield = '?screen_name=gizmodo';
                                    $settings = \Classes\Config::password();
                                    $object = \Classes\TwitterFunctions::getfollowers($url, $getfield, $settings);
                                    //\Classes\HtmlFunctions::print_timeline($object);
                                      print_r($object);                                  
                                    
                                    
    

                            
                            
                            
                            
                            
                            ?>
                            </div>
                        </div>
                      </div>
                      <div class="accordion-group">
                        <div class="accordion-heading">
                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                            <h1>Friends</h1>
                          </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                          <div class="accordion-inner">
                            Anim pariatur cliche...
                          </div>
                        </div>
                      </div>
                    </div>
				</div><!-- /col-lg-4 -->
			
			</div>
		
		</div>
	</>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>




    