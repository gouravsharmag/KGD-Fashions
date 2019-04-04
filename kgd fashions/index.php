<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>KGD Fashions</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		
<link type="text/css" rel="stylesheet" href="sidebar.css">
<link type="text/css" rel="stylesheet" href="style.css">

		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style>
		.scrollmenu1{
	background-color:#333;
	overflow:auto;
	margin-left:15px;
	margin-right:15px;
	white-space:nowrap;
	
}
.scrollmenu1 a{
	display:inline-block;
	color:white;
	text-align:center;
	padding:10px;
    text-decoration:none;
}
.scrollmenu1 a:hover{
	background:#111111;
	text-decoration:none;
}
		
		
		</style>
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">KGD Fashions</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
			</ul>
			<form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
		     </form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Login</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;">
									</form>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
				
				<li><a href="customer_registration.php?register=1"><span class="glyphicon glyphicon-user"></span>SignUp</a></li>
			</ul>
		</div>
	</div>
</div>
	
<div>	
 <img src="5.jpg" style="margin-top:50px;margin-left:10%;"class="nb" name="slide" width="80%"  height="260">

<script type="text/javascript">
var image1=new Image()
image1.src="5.jpg"
var image2=new Image()
image2.src="7.jpg"
var image3=new Image()
image3.src="6.jpg"
</script>
<script type="text/javascript">
var step=1

function slideit(){
document.images.slide.src=eval("image"+step+".src")
if(step<3)
step++
else
step=1
setTimeout("slideit()",4500)
}
slideit()
</script>
</div>

	<div class="scrollmenu1">
			<a href="index.php">Home</a>
  <a href="offers.html">Offer Zone</a>
  <a href="kids.html">Kids</a>
  <a href="gourav.html">Men's</a>
  <a href="my orders.html">Women's</a>
  <a href="login_form.php">My Account</a>
  <a href="cart.php">My Cart</a>
  <a href="customer_registration.php?register=1">sign up</a>
  <a href="login_form.php">login</a>
  <a href="#why">About us</a>
  <a href="contactus.html">Contact us</a>
  </div>
  <div class="container-fluid" style="margin-top:50px;">
  <h1 style="color:black;margin-top:-50px;Background:red;line-height:35px;border-left:40px solid black;padding-left:10px;text-align:center;border-right:40px solid black"> Deals of the Day <h1>
                </div>
 
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid" style="margin-top:-100px;">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<div id="get_category">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<div id="get_brand">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">Products</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">$.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
					<div class="panel-footer">&copy; 2018</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	  <div class="container-fluid bg2" style="background:grey;">
			<h1 style="color:Black;margin:-11px;Background:yellow;line-height:35px;border-left:20px solid lime;padding-left:10px;">Fashions<h1>
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="#cameras" >
                            <div class="thumbnail">
                                <img src="70.jfif" alt="">
                                <div class="caption">
                                    <h3>Sarees</h3>
                                   
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="#watches" >
                            <div class="thumbnail">
                                <img src="download2.jfif" alt="">
                                <div class="caption">
                                    <h3>Women's Watches</h3>
                                    
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="#shirts" >
                            <div class="thumbnail">
                                <img src="40.jpg"alt="">
                                <div class="caption">
                                    <h3>Women's PartyWear</h3>
                                  
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
					
			<h2 style="font-size: 35px;margin-left:10px; color:#A0C31F; min-width:250px">KGDFashions.com</h2>
      <br>
        <p style="line-height:30px;font-size:20px;text-align:justify;margin:0px 30px 0px 30px;text-indent:50px;">
          KGDFashions.Com is a online shopping website. It provide a many branded clothes , phones , watches , shoes - whatever you need for the hour may be, Lifestyle, your favorite online shopping site, is sure to spoil you wide range of products.
Almost all popular brands across categories sell their products online , there by bringing you closer to your preferences.
You don't have to wait for the weekends to shop as you can shop online on the way back home after work. Ohhh , and let's not forget about the various  discounts on these products which  make then an offer that is too hard to resist.  
<hr/> </p>

          <div class="why">
            <h4 style="font-size: 35px;margin-left:10px; color:#A0C31F;">Why KGDFashions.com?</h4>
            <div class="vg">
              <ul >
                <li style="list-style:none">
                  <img src="tick.png">products provide directly from industry		 to  avoid middle man margins
		and pass on the benefits to the customers.
                            </li>
                <li style="list-style:none">
                  <img src="tick.png">
      You will find our price lower
		than Showrooms and shops and Malls.
                            </li>
                <li style="list-style:none">
                  <img src="tick.png">
       Provide a best quality of
		product at your door step.
                            </li>
                <li style="list-style:none">
                  <img src="tick.png">
        It provide a free delivery order in Minimum or maximum.
                            </li>
                <li style="list-style:none">
                  <img src="tick.png">Experienced in procuring goods and in
		this business from last 2 years.
                            </li>
                <li style="list-style:none">
                  <img src="tick.png">Evolving, innovative and ready to accept
		your suggestions and feedbacks to serve
		you better.
                            </li>
              </ul>

            </div>

            <div class="vg">
              <ul style="line-height:28px">
                <li style="list-style:none">
                  <img src="tick.png">
                    Wide verities of products to cover
                    your daily needs</li>
                <li style="list-style:none">
                  <img src="tick.png">Specialist in Clothes , Laptops , Mobile and appliances.
                            </li>
                
                <li style="list-style:none">
                  <img src="tick.png">Expanding fast and covering Muradnagar and ghaziabad.
                            </li>
                <li style="list-style:none">
                  <img src="tick.png">Flexible delivery date and time and
taking recurring orders.
                
              </ul>


            </div>
            <div style="width:100%;height:auto;clear:both; min-width:250px;">

              <h1 style="color:#A0C31F;font-style:italic;font-size:30px;margin:10px 0px 0px 20px;"> Delivery Areas</h1>

              <p style="line-height:25px;margin:40px">Ghaziabad , Modinagar , Muradnagar, Dhuai , Morta , Loni , Meerut , Shahadra , Anand Vihar , Dilshad Garden , Shaibabad</p>


            </div>



          
          </div>
<footer style="background:#fff;">
<h3 style="margin-left:150px;">
Copyright &copy; KGD Fashions. All rights Reserved | Contact Us +91 8171523759
</footer>

</body>
</html>
















































