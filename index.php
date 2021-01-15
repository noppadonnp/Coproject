<!doctype html>
<html lang="en">
  <head>
    <title>Css</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script language="JavaScript" SRC="JS/script.js"></script>
    <script language="JavaScript" SRC="JS/textslider.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel = "stylesheet" type = "text/css" href = "CSS/style.css">
    <link rel = "stylesheet" type = "text/css" href = "CSS/search.css">
    <link rel = "stylesheet" type = "text/css" href = "CSS/textslider.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
  </head>
  <body>
    	<!----start-wrap---->
		<!----start-top-header----->
		<div class="top-header" id="header">
			<div class="wrap">
				<div class="top-header-left">
					<ul>
						<li><a href="#"><span> </span> Agent Login</a></li>
						<li><a href="#"><span> </span> Customer Login</a></li>
						<li><p><span> </span>Not a Member ? </p>&nbsp;<a class="reg" href="#"> Register</a></li>
						<li><p class="contact-info">Call Us Now :xxx-xxx-xxx</p></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="top-header-right">
					<ul>
						<li><a class="face" href="#"><span> </span></a></li>
						<li><a class="twit" href="#"><span> </span></a></li>
						<li><a class="thum" href="#"><span> </span></a></li>
						<li><a class="pin" href="#"><span> </span></a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<!----//End-top-header----->
    	<!--- start-top-nav---->
        <div class="top-nav">
			<ul class="flexy-menu thick orange">
				<li class="active"><a href="index.php">Home</a></li>
					<li><a href="destinations.html">Destinations</a>
						<ul>
						    <li><a href="#">Dropdown item</a></li>
							<li><a href="#">Dropdown item</a></li>
							<li><a href="#">Dropdown item</a>
									<ul>
										<li><a href="#">Dropdown item</a></li>
										<li><a href="#">Dropdown item</a>
											<ul>
												<li><a href="#">Dropdown item</a></li>
												<li><a href="#">Dropdown item</a></li>
												<li><a href="#">Dropdown item</a></li>
												<li><a href="#">Dropdown item</a></li>
											</ul>
										</li>
										<li><a href="#">Dropdown item</a></li>
										<li><a href="#">Dropdown item</a></li>
									</ul>
								</li>
								<li><a href="#">Dropdown item</a></li>
								<li><a href="#">Dropdown item</a></li>
							</ul>
							</li>
							<li><a href="criuses.html">Criuses</a></li>
							<li><a href="destinations.html">Specials</a></li>
							<li><a href="destinations.html">Holidays</a></li>
							<li><a href="blog.html">Blog</a></li>
						</ul>
						<div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="web/js/modernizr.custom.js"></script>
						<script src="web/js/classie.js"></script>
						<script src="web/js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->
				</div>
				<!--- //End-top-nav---->
				<div class="clear"> </div>
			</div>
			<!---//End-header---->
		</div>
    <!--Slideshow-->
    <div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/1.jpg" alt="Los Angeles" width="1100" height="500">
        </div>
        <div class="carousel-item">
            <img src="img/2.jpg" alt="Chicago" width="1100" height="500">
        </div>
        <div class="carousel-item">
            <img src="img/3.jpg" alt="New York" width="1100" height="500">
        </div>
    </div>
    <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>


    <!--search-->
    <section class="search-sec">
    <div class="container">
        <form action="#" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Enter Pickup City">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Enter Drop City">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>Select Vehicle</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <button type="button" class="btn btn-danger wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </section>



    <!--image-->
    <div class="container-fluid">
        <h2>SPECIAL OFFERS</h2>
        <p>Best 2014 packages where people love to stay!</p>
    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="img/1.jpg">
            <img src="img/1.jpg" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="img/2.jpg">
            <img src="img/2.jpg" alt="Forest" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="img/3.jpg">
            <img src="img/3.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="img/7.jpg">
            <img src="img/7.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>
    </div>
    <div class="clearfix"></div>
    </div>


    <div class="container-fluid">
        <h2>Responsive Image Gallery</h2>
        <p>Resize the browser window to see the effect.</p>
    <div class="contaner">
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="img/1.jpg">
                <img src="img/1.jpg" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="img/2.jpg">
                <img src="img/2.jpg" alt="Forest" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="img/3.jpg">
                <img src="img/3.jpg" alt="Northern Lights" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="img/7.jpg">
                <img src="img/7.jpg" alt="Mountains" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
        </div>
        <div class="clearfix"></div>
        </div>
    </div>

    <!--textslider-->
    <div class="slideshow-container">
        <div class="mySlides">
            <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
            <p class="author">- John Keats</p>
        </div>
    <div class="mySlides">
        <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
        <p class="author">- Ernest Hemingway</p>
    </div>
    <div class="mySlides">
        <q>I have not failed. I've just found 10,000 ways that won't work.</q>
        <p class="author">- Thomas A. Edison</p>
    </div>
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
    </div>

    <!--<div class="containers">-->
        <footer class="page-footer font-small mdb-color pt-4 "> 
        <!-- Footer Links -->
            <div class="container text-center text-md-left "> 
        <!-- Footer links -->
                <div class="row text-center text-md-left mt-3 pb-3"> 
        <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">เกี่ยวกับเรา</h6>
                        <p>เป็นเว็บไซต์ที่พัฒนาขึ้นเพื่อการศึกษา <br>
                        ในรายวิชา 934-303 Web Programming.</p>
                    </div>
        <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none">
        <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none">
        <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">บริการด้านการเงิน</h6>
                        <p> <a href="#">วิธีการสั่งซื้อ</a> </p>
                        <p> <a href="#">วิธีการชำระเงิน</a> </p>
                        <p> <a href="#">แจ้งชำระสินค้า</a> </p>
                        <p> <a href="#">ติดตามสถานะ</a> </p>
                    </div>
        <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none">
        <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p> <i class="fas fa-home mr-3"></i> 31 หมู่ 6 ต.มะขามเตี้ย อ.เมือง จ.สุราษฎร์ธานี 84000 </p>
                        <p> <i class="fas fa-envelope mr-3"></i> abcd@gmail.com</p>
                        <p> <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p> <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                    </div>
                    <hr class="w-100 clearfix d-md-none">
        <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p> <i class="fas fa-home mr-3"></i> 31 หมู่ 6 ต.มะขามเตี้ย อ.เมือง จ.สุราษฎร์ธานี 84000 </p>
                        <p> <i class="fas fa-envelope mr-3"></i> abcd@gmail.com</p>
                        <p> <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p> <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                    </div>
        <!-- Grid column --> 
                    </div> 
        <!-- Footer links -->
                    <hr>
        <!-- Grid row -->
                    <div class="row d-flex align-items-center"> 
        <!-- Grid column -->
                    <div class="col-md-7 col-lg-8"> 
        <!--Copyright-->
                        <p class="text-center text-md-left">© 6040011008 , 6040011016: <strong> WEB PROGRAMMING</strong> </a> </p>
                    </div>      
                </div>
        <!-- Grid row --> 
            </div>
        <!-- Footer Links --> 
        </footer>
        <!-- Footer --> 
        <!--</div>-->
  </body>
</html>