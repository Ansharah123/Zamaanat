<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="img/favicon.png" rel="icon">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link href="css/center.css" rel="stylesheet">
<title>SellerForm</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>

	
  body {
    color: #999;
    background: #f3f3f3;
    font-family: 'Roboto', sans-serif;
  }

  .form-control {
    border-color: #eee;
        min-height: 41px;
    box-shadow: none !important;
  }
    .form-control:focus {
    border-color: #5cd3b4;
  }
    .form-control, .btn {        
        border-radius: 3px;
    }
  .signup-form {
    width: 500px;
    margin: 0 auto;
    padding: 30px 0;
  }
    .signup-form h2 {
    color: #333;
        margin: 0 0 30px 0;
    display: inline-block;
    padding: 0 30px 10px 0;
    border-bottom: 3px solid #5cd3b4;
    }
    .signup-form form {
    color: #292323;
    border-radius: 3px;
      margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
  .signup-form .form-group {
    margin-bottom: 20px;
  }
  .signup-form label {
    font-weight: normal;
    font-size: 15px;
  }
    .signup-form input[type="checkbox"] {
    margin-top: 2px;
  }
    .signup-form .btn {        
        font-size: 16px;
        font-weight: bold;
    background: #5cd3b4;
    border: none;
    margin-top: 20px;
    min-width: 140px;
    }
  .signup-form .btn:hover, .signup-form .btn:focus {
    background: #41cba9;
        outline: none !important;
  }
    .signup-form a {
    color: #5cd3b4;
    text-decoration: underline;
  }
  .signup-form a:hover {
    text-decoration: none;
  }
    .signup-form form a {
    color: #5cd3b4;
    text-decoration: none;
  } 
  .signup-form form a:hover {
    text-decoration: underline;
  }
    
</style>
</head>
<body>

  <div class="col-md-12 col-lg-4">
    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          Seller-Form
        </li>
      </ol>
    </nav>
  </div>



<div class="signup-form">
    <form action="property-grid.php" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="col-md-8 col-xs-offset-4">
      <h2>Seller Form</h2>
    </div>    
        <div class="form-group">
      <label class="control-label col-md-4">OwnerName</label>
      <div class="col-md-8">
                <input type="text" class="form-control" name="username" required="required">
            </div>          
        </div>




        <div class="form-group">
      <label class="control-label col-md-4">Full Name</label>
      <div class="col-md-8">
                <input type="text" class="form-control" name="firstname" required="required">
            </div>          
        </div>


        <div class="form-group">
      <label class="control-label col-md-4">Cell-Number</label>
      <div class="col-md-8">
                <input type="number" class="form-control" name="cellnumber" required="required">
            </div>          
        </div>


    <div class="form-group">
      <label class="control-label col-md-4">Email Address</label>
      <div class="col-md-8">
                <input type="text" class="form-control" name="email" required="required">
            </div>          
        </div>

        <div class="form-group">
      <label class="control-label col-md-4">CNIC-Number</label>
      <div class="col-md-8">
                <input type="number" class="form-control" placeholder="XXXXX-XXXX-XX" name="cnicnumber" required="required">
            </div>          
        </div>
<div class="form-group">
          <label class="control-label col-xs-4">Entry No</label>
            <div class="col-xs-8">
              <input type="number" class="form-control" name="entryno" placeholder="Entry No" required="required">
            </div>          
    </div>




        <div class="form-group">
      <label class="control-label col-md-4">Address</label>
      <div class="col-md-8">
                <input type="text" class="form-control" placeholder="House no./ Flat no./Building name/ City" name="address" required="required">
            </div>          
        </div>

        <div class="form-group">
      <label class="control-label col-md-4">City</label>
      <div class="col-md-8">
                <input type="text" class="form-control" name="city" required="required">
            </div>          
        </div>


        <div class="form-group">
      <label class="control-label col-xs-4">Road</label>
      <div class="col-xs-8">
                <input type="text" class="form-control" name="road" required="required">
            </div>          
        </div>

        <div class="form-group">
      <label class="control-label col-xs-4">Price</label>
      <div class="col-xs-8">
                <input type="number" class="form-control" name="price" required="required">
            </div>          
        </div>


    <div class="form-group">
      <label class="control-label col-xs-4">Property Size</label>
      <div class="col-xs-8">
                <input type="number" class="form-control" name="area" required="required">
            </div>          
        </div>

        <div class="form-group">
      <label class="control-label col-xs-4">Beds</label>
      <div class="col-xs-8">
                <input type="number" class="form-control" name="beds" required="required">
            </div>          
        </div>



        <div class="form-group">
      <label class="control-label col-xs-4">Baths</label>
      <div class="col-xs-8">
                <input type="number" class="form-control"  name="baths" required="required">
            </div>          
        </div>

        <div class="form-group">
      <label class="control-label col-xs-4">Garages</label>
      <div class="col-xs-8">
                <input type="number" class="form-control" name="garages" required="required">
            </div>          
        </div>


        

        <div class="form-group">
      <label class="control-label col-md-4">Property Registration No</label>
      <div class="col-md-8">
                <input type="number" class="form-control" placeholder="" name="propertyregistration" required="required">
            </div>          
        </div>



        <div class="form-group">
		<div class="col-md-4"></div>  	
  	<div class="col-md-8">
    <label for="exampleFormControlFile1">Upload Your Property Pictures Fornt picture</label>
    <input type="file" name="imgf" class="form-control-file" id="exampleFormControlFile1">
 	</div>
  </div>

        
  <div class="form-group">
		<div class="col-md-4"></div>  	
  	<div class="col-md-8">
    <label for="exampleFormControlFile2">Upload Your Property Pictures</label>
    <input type="file" name="imgs" class="form-control-file" id="exampleFormControlFile2">
 	</div>
  </div>
  			<div class="form-group">
		<div class="col-md-4"></div>  	
  	<div class="col-md-8">
    <label for=" exampleFormControlFile3">Upload your Property document Snap</label>
    <input type="file" name="imgt" class="form-control-file" id="exampleFormControlFile3">
 	</div>
  </div>



    <div class="form-group">
      <div class="col-xs-md col-md-offset-4">
        <p><label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a>.</label></p>
        <button type="submit" name="submit" class="btn btn-primary btn-lg">Done</button>
      </div>  
    </div>  




    </form>
  <div class="text-center">Already have an account? <a href="#">Login here</a></div>
</div>






</body>
</html>