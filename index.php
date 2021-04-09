<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Zamaanat</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <style> 
  .p1{
    padding-top: 100px;
  }
  /* +++++++++++++++++++++++++++++++++++++++++++++++ */
  * {
  box-sizing: border-box;
}

.bg{

  filter: blur(2px);
  -webkit-filter: blur(2px);
}

.btext {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align:center;
  padding-left: 20em;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
  /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
</style>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/center.css" rel="stylesheet">
  <link rel="stylesheet" href="login.css">
   
  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">City</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          
          <!-- <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Type</label>
              <select class="form-control form-control-lg form-control-a" id="Type">
                <option>All Type</option>
                <option>For Buy</option>
                <option>For Sale</option>
                <option>Open House</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">City</label>
              <select class="form-control form-control-lg form-control-a" id="city">
                <option>All City</option>
                <option>Alabama</option>
                <option>Arizona</option>
                <option>California</option>
                <option>Colorado</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bedrooms">Bedrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bedrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Garages</label>
              <select class="form-control form-control-lg form-control-a" id="garages">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bathrooms">Bathrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bathrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div> 
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Min Price</label>
              <select class="form-control form-control-lg form-control-a" id="price">
                <option>Unlimite</option>
                <option>$50,000</option>
                <option>$100,000</option>
                <option>$150,000</option>
                <option>$200,000</option>
              </select>
            </div>
          </div>-->
          
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
     <a class="navbar-brand text-brand" href="index.php"><img src="img/logo1.png"></a></a>
    
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="property-grid.php">Property</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog-grid.php">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Sign-Up.php">Registration</a>
          </li>
          
        
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>


<div style="padding-top: 10px;">
<li class="nav-item">
            <a href="ligon-page.php"><i class="fa fa-fw fa-user"></i>Login</a>
          </li>

</div>
<li></li>


        </ul>
      </div>

<div style="padding-left: 90px;">

      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false" >
        <span class="fa fa-search" aria-hidden="true"><p>Search property</p></span>
      </button>

</div>

    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-1.jpg)">
        <div class="overlay overlay-a">
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Bhari town, housing
                      <br> Karachi</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">S-90 </span> BahriVilla
                      <br> Villa Road 3</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Sell Price | RS. 909000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slider2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row btext">
                <div class="col-lg-8">
                  <div class="intro-body">

                    <h1 class="intro-title">
                      <!-- <span class="color-b">Hadi's Mansion</span> -->
                      <br>When you’re ready for a change,<br> we’re ready to help.
                    </h1>
                    <!-- <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Sell Price | RS. 4000,000/-</span></a>
                    </p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-3.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Nazimabad, Karachi
                      <br> 4</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">D-12 </span> Nazimabad
                      <br>  ROAD no 5</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">SEll PRICE | RS 100045</span></a>
                    </p></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--/ Carousel end /-->
<div class="row"></div>


<div class="container">
  

  <div class="row p1">
                              

    <div class="col-md-4"></div>
    <div class="col-lg-2">
      <a href="ligon-page.php">
      <button type="button" class="btn btn-primary">Buyer</button>
    </div>
      
    <div class="col-lg-2">
      <a href="seller.php">
      <button type="button" class="btn btn-success">Seller</button></div></a>
    </div>
  </div></div>
</div>
		

		






	</div>
</div>


  <!--/ Services Star /-->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Our Services</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-balance-scale"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Lawyers</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                We provide lawyer facilaty to our customers for legal issues like property transfer, checking docouments and we have expericenced lawyer in Property dealing Issues.
              </p>
            </div>
            <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-usd"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Loans</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                We provide Property Loans through Banking, We link you with many well known banks in Pakistan (Bank Islamic, Mezaan Bank, Dubai Islamic Bank, MCB Bank etc)
              </p>
            </div>
            <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-newspaper-o"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">News & Blogs</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                Keep yourself updated with blog, exclusive and latest news on what is going on in Pakistan related to property. 
              </p>
            </div>
            <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Services End /-->

  <!--/ Property Star /-->
  <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Latest Properties</h2>
            </div>
            <div class="title-link">
              <a href="property-grid.php">All Property
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>





      <div id="property-carousel" class="owl-carousel owl-theme">
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/prop1.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.html">bhariyaTown
                      <br /> West road</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">sell | RS 123232</span>
                  </div>
                  <a href="#" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                          <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Verfied</h4>
                      <span>yes</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>






        
  </section>
  <!--/ Property End /-->








  <!--/ Agents Star /-->
  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Our Team</h2>
            </div>
            <div class="title-link">
              <a href="agents-grid.html">Other Members
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="img/agent-4.jpg" alt="" class="img-d img-fluid">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two">Haris Hassan
                      <br>Suport Officer</a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <p class="content-d color-text-a ">
                 Haris hassan is our best team member who had good communication skills and client deal he resolve your issue realted to properties.
                </p>
                <div class="info-agents color-a">
                  <p>
                    <strong>Phone: </strong> +92 311 3257989</p>
                  <p>
                    <strong>Email: </strong> HarisHassan@gmail.com.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="img/agent-7.jpg" alt="" class="img-d img-fluid">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two">Ansharah Ali
                      <br>TEAM Lead</a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <p class="content-d color-text-a justifytxt">
                  Ansharah Ali is our brilliant team Lead.She head great experience in Property dealing.She monitors all the issues related towords our objects.    
                </p>
                <div class="info-agents color-a">
                  <p>
                    <strong>Phone: </strong> +92 356 945234</p>
                  <p>
                    <strong>Email: </strong> AnsharahAl@gmail.com</p>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="img/agent-5.jpg" alt="" class="img-d img-fluid">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two">Rida Fatimah
                      <br>Q/A Officer</a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <p class="content-d color-text-a ">
                  She observed all quality assurence issue and responsible for ensuring the administration.
                </p>
                <div class="info-agents color-a">
                  <p>
                    <strong>Phone: </strong> +92 356 945234</p>
                  <p>
                    <strong>Email: </strong> Ridafatimah@gmail.com</p>
                </div>
              </div>
             
          </div>
        </div>
      </div>
   











  </section>
  <!--/ Agents End /-->











  <!--/ News Star /-->
  <section class="section-news section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Latest News</h2>
            </div>
            <div class="title-link">
              <a href="blog-grid.html">All News
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="new-carousel" class="owl-carousel owl-theme">
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/post-2.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">New developing Properties</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">New housing Scheme is comming
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">20 jan. 2020</span>
                </div>
              </div>
            </div>
          </div>
        </div>






        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/post-5.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Travael</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">Good News KCR Comming
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/post-7.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Parking</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">New Parking technology
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">2 may. 2021</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/post-3.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Travel</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="#">Travel is comming
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ News End /-->

  <!--/ footer Star /-->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">PropertyDealers</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a justifytxt">
                We ensure that you get the verified property. We provide you a safe platform where you can buy or sell your property and all dealing through our website.<br> For further information contact below 
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone :</span> +92 3113257989</li>
                <li class="color-a">
                  <span class="color-text-a">Email :</span> HarisHassan@gmail.com</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">The Company</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Approved Partners</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Terms of Service</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Privacy Policy</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Community</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Blog</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Support</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Facebook</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Twitter</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Instagram</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Property</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Blog</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">Zamaanat</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
          
            Designed by <a href="https://bootstrapmade.com/">Zamaanat Designer</a>
          </div>
        </div>
      </div>
    </div>
  </footer>


<!---/ this is the code of butron popup login/--->


  <div id="id01" class="modal"> 

    <form class="modal-content animate" action="/action_page.php"> 
      <div class="imgcontainer"> 
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span> 
        <img src= 
"https://res.cloudinary.com/practicaldev/image/fetch/s--agul9xXZ--/c_fill,f_auto,fl_progressive,h_320,q_auto,w_320/https://dev-to-uploads.s3.amazonaws.com/uploads/user/profile_image/485862/5a1d3ac0-b07c-42fa-b42e-821081452d59.jpg" alt="Avatar" class="avatar"> 
      </div> 

      <div class="container"> 
        <label><b>Username</b></label> 
        <input type="text" placeholder="Enter Username" name="uname" required> 

        <label><b>Password</b></label> 
        <input type="password" placeholder="Enter Password" name="psw" required> 

        <button type="submit">Login</button> 
        <input type="checkbox" checked="checked"> Remember me 
      </div> 

      <div class="container" style="background-color:#f1f1f1"> 
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> 
        <span class="psw">Forgot <a href="#">password?</a></span> 
      </div> 
    </form> 
  </div> 


  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>