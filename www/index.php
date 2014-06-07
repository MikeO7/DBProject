<?php 
 // Connects to your Database 
 mysql_connect("localhost:8888", "root", "root") or die(mysql_error()); 
 mysql_select_db("Test") or die(mysql_error()); 

 ?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IT Products</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#create">Create</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#read">Read</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#update">Update</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#delete">Delete</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">IT Products</h1>
                        <p class="intro-text">Welcome, Ryan.  Click the links above to get started.</p>
                        <div class="page-scroll">
                            <a href="#create" class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="create" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>(C)RUD</h2>
                <p>Create data here.</p>

                    <form class="form-horizontal" action="insert.php" method="post">
					<fieldset>
					
					<!-- Form Name -->
					<legend>Add Customer</legend>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="CompanyName">Company Name</label>  
					  <div class="col-md-4">
					  <input id="CompanyName" name="CompanyName" type="text" placeholder="Microsoft" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="ContactName">Contact Name</label>  
					  <div class="col-md-4">
					  <input id="ContactName" name="ContactName" type="text" placeholder="John" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Phone">Phone</label>  
					  <div class="col-md-4">
					  <input id="Phone" name="Phone" type="text" placeholder="801-324-2343" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Email">Email</label>  
					  <div class="col-md-4">
					  <input id="Email" name="Email" type="text" placeholder="john@gmail.com" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Address">Address</label>  
					  <div class="col-md-4">
					  <input id="Address" name="Address" type="text" placeholder="743 W 2300 S Orem UT" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="City">City</label>  
					  <div class="col-md-4">
					  <input id="City" name="City" type="text" placeholder="Provo" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="State">State</label>  
					  <div class="col-md-4">
					  <input id="State" name="State" type="text" placeholder="Utah" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Country">Country</label>  
					  <div class="col-md-4">
					  <input id="Country" name="Country" type="text" placeholder="USA" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="PostalCod">Postal Code</label>  
					  <div class="col-md-4">
					  <input id="PostalCod" name="PostalCod" type="text" placeholder="84606" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="SalesRepid">Sales Rep ID</label>  
					  <div class="col-md-4">
					  <input id="SalesRepid" name="SalesRepid" type="text" placeholder="0" class="form-control input-md">
					  <span class="help-block">Enter 0 If you do not know your sales rep ID</span>  
					  </div>
					</div>
					
					<!-- Button -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="SubmitNewCustomer"></label>
					  <div class="col-md-4">
					    <button id="SubmitNewCustomer" name="SubmitNewCustomer" class="btn btn-primary">Submit</button>
					  </div>
					</div>
					
					</fieldset>
					</form>

                
            </div>
        </div>
    </section>

    <section id="read" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Download Grayscale</h2>
                    <p>You can download Grayscale for free on the download page at Start Bootstrap. You can also get the source code directly from GitHub if you prefer. Additionally, Grayscale is the first Start Bootstrap theme to come with a LESS file for easy color customization!</p>
                    <a href="http://startbootstrap.com/grayscale" class="btn btn-default btn-lg">Visit Download Page</a>
                </div>
            </div>
        </div>
    </section>

    <section id="update" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Start Bootstrap</h2>
                <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
                <p>feedback@startbootstrap.com</p>
                <ul class="list-inline banner-social-buttons">
                    <li><a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li><a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li><a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    
    <section id="delete" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Start Bootstrap</h2>
                <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
                <p>feedback@startbootstrap.com</p>
                <ul class="list-inline banner-social-buttons">
                    <li><a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li><a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li><a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div id="map"></div>

    <!-- Core JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - You will need to use your own API key to use the map feature -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
