<?php 
 // Connects to your Database 
 mysql_connect("localhost", "root", "root") or die(mysql_error()); 
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
                        <p class="intro-text">Welcome!  Click the links above to get started.</p>
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

                    <form class="form-horizontal" action="insert_customers.php" method="post">
					<fieldset>
					
					<!-- Form Name -->
					<legend><font color="White">Add Customer</font></legend>
					
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
					  <input id="PostalCode" name="PostalCode" type="text" placeholder="84606" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="SalesRepid">Sales Rep ID</label>  
					  <div class="col-md-4">
					  <input id="SalesRepid" name="SalesRepid" type="text" placeholder="0" class="form-control input-md">
					  <span class="help-block">Leave blank If you do not know your sales rep ID</span>  
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

</br>
</br>
</br>
</br>
</br>

					<form class="form-horizontal" action="insert_employee.php" method="post">
					<fieldset>
					
					<!-- Form Name -->
					<legend><font color="White">Add Employee</font></legend>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="FirstName">First Name</label>  
					  <div class="col-md-4">
					  <input id="FirstName" name="FirstName" type="text" placeholder="Jon" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="LastName">Last Name</label>  
					  <div class="col-md-4">
					  <input id="LastName" name="LastName" type="text" placeholder="Doe" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="JobTitle">Job Title</label>  
					  <div class="col-md-4">
					  <input id="JobTitle" name="JobTitle" type="text" placeholder="Manager" class="form-control input-md">
					    
					  </div>
					</div>

					  <div class="form-group">
					  <label class="col-md-4 control-label" for="ReportsTo">Reports To (Enter ID)</label>  
					  <div class="col-md-4">
					  <input id="ReportsTo" name="ReportsTo" type="text" placeholder="2" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Phone">Phone</label>  
					  <div class="col-md-4">
					  <input id="Phone" name="Phone" type="text" placeholder="801-345-3564" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Email">Email</label>  
					  <div class="col-md-4">
					  <input id="Email" name="Email" type="text" placeholder="JonDoe@gmail.com" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Address">Address</label>  
					  <div class="col-md-4">
					  <input id="Address" name="Address" type="text" placeholder="345 W 3456 S" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="City">City</label>  
					  <div class="col-md-4">
					  <input id="City" name="City" type="text" placeholder="Orem" class="form-control input-md">
					    
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
					  <label class="col-md-4 control-label" for="PostalCode">Postal Code</label>  
					  <div class="col-md-4">
					  <input id="PostalCode" name="PostalCode" type="text" placeholder="84606" class="form-control input-md">
					    
					  </div>
					</div>
					
					
					<!-- Button -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="SubmitNewEmployee"></label>
					  <div class="col-md-4">
					    <button id="SubmitNewEmployee" name="SubmitNewEmployee" class="btn btn-primary">Submit</button>
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
                    <h2>C(R)UD</h2>
                    <p>Read Data Here</p>
                   View all of the products called 'Camera'
                   </br> 
                   </br> 
                   (without indexing)
                   </br>
                   </br>

                   <a href="read_wo_indexing.php" class="btn btn-primary btn-large"></i>View Camera</a>
                   </br>
                   </br>
                   <a href="makeIndex.php" class="btn btn-primary btn-large"></i>Make Index</a>
                   </br>
                   </br>
                   with indexing
                   </br>
                   <a href="readindexing.php" class="btn btn-primary btn-large"></i>View Camera</a>


                </div>
            </div>
        </div>
    </section>

    <section id="update" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>CR(U)D</h2>
                <p>Update data here.</p>
                
                <form class="form-horizontal" action="update_employees.php" method="post">
					<fieldset>
					
					<!-- Form Name -->
					<legend><font color="White">Update Employee's Address</font></legend>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Employeeid">EmployeeID</label>  
					  <div class="col-md-4">
					  <input id="Employeeid" name="Employeeid" type="text" placeholder="2" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Address">New Address</label>  
					  <div class="col-md-4">
					  <input id="Address" name="Address" type="text" placeholder="834 W 345 S" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="City">New City</label>  
					  <div class="col-md-4">
					  <input id="City" name="City" type="text" placeholder="Salt Lake City" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="State">New State</label>  
					  <div class="col-md-4">
					  <input id="State" name="State" type="text" placeholder="UT" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="PostalCode">New Postal Code</label>  
					  <div class="col-md-4">
					  <input id="PostalCode" name="PostalCode" type="text" placeholder="84543" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Button -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Submit"></label>
					  <div class="col-md-4">
					    <button id="Submit" name="Submit" class="btn btn-primary">Submit</button>
					  </div>
					</div>
					
					</fieldset>
					</form>

</br>
</br>
</br>
</br>
</br>
					
					<form class="form-horizontal" action="update_customers.php" method="post">
					<fieldset>
					
					<!-- Form Name -->
					<legend><font color="White">Update Customer Info</font></legend>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Customerid">Customer ID</label>  
					  <div class="col-md-4">
					  <input id="Customerid" name="Customerid" type="text" placeholder="3" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="CompayName">New Company Name</label>  
					  <div class="col-md-4">
					  <input id="CompayName" name="CompayName" type="text" placeholder="Costco" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="ContactName">New Contact Name</label>  
					  <div class="col-md-4">
					  <input id="ContactName" name="ContactName" type="text" placeholder="Allen" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Phone">New Phone</label>  
					  <div class="col-md-4">
					  <input id="Phone" name="Phone" type="text" placeholder="834-343-2345" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Button -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Submit"></label>
					  <div class="col-md-4">
					    <button id="Submit" name="Submit" class="btn btn-primary">Submit</button>
					  </div>
					</div>
					
					</fieldset>
					</form>					
            </div>
        </div>
    </section>
    
    <section id="delete" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>CRU(D)</h2>
                <p>Delete Data Here</p>
                

<form class="form-horizontal" action="delete_employee.php" method="post">
<fieldset>

<!-- Form Name -->
<legend><font color="White">Terminate Employee</font></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Employeeid">Employee ID</label>  
  <div class="col-md-4">
  <input id="Employeeid" name="Employeeid" type="text" placeholder="1" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>


</br>
</br>
</br>
</br>
</br>

<form class="form-horizontal" action="delete_customer.php" method="post">
<fieldset>

<!-- Form Name -->
<legend><font color="White">Delete a Customer</font></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="CustomerId">Customer ID</label>  
  <div class="col-md-4">
  <input id="CustomerId" name="CustomerId" type="text" placeholder="1" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>

            </div>
        </div>
    </section>


    <!-- Core JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

   
    

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
