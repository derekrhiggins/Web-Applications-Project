<!DOCTYPE html>
<html lang="en">

<!--	Web Application Development
		Final Project
		Derek Higgins	|	 g00398357@gmit.ie 	-->
<head>


    <title>Derek Higgins</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">   
    <link rel="stylesheet" href="style.css">
    
	<style type="text/css">
	
    
    .carousel img{
        height: 300px;
        object-fit: cover;
    }
    
    .headingGrid{
        margin-top: 25px;
        margin-bottom: 25px; 
        text-align: center;
    }
    
    .gridrow{
        padding-top: 25px;
    }
    
    .JerryCan {
        padding-left: 100px;
        padding-right: 10px;
    }
    
    .card-img{
        height: 250px;
        width: 180px;
        object-fit: cover;
    }
    
    .card-img-cart{
        
        height: 120px;
        width: 80px;
    }
    
    #shoppingCartTable > tbody > tr > td {
         vertical-align: middle;
    }
    
    #shoppingCartTable{
        text-align: center;
    }
    
    #shoppingCartMenuDropdown {
        width: 340px !important;
    }
    
    .padding-0{
        padding-right:0;
        padding-left:0;
    }
    
    .ellipsis{
        white-space: nowrap; 
        text-overflow: ellipsis; 
        overflow: hidden; 
        height: 14px;
    }
    
    .asText {
        background:none;
        border:none;
        margin:0;
        padding:0;
        cursor: pointer;
        color: dodgerblue;
    }
    
    .asText:hover{
        color: steelblue;
    }
    
    .JerryCanCard{
        width: 540px;
        background-color: silver;
    }

</style>

</head>
<body> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


	<!-- Check Out Modal -->
	<div class="modal" id="checkOutModal" tabindex="-1" role="dialog" >
	  <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title col-11 text-center" id="exampleModalLabel2">Summary of your order</h5>
			<button type="button" class="close align-top" data-bs-dismiss="modal" aria-label="Close">
			  <span>&times;</span>
			</button>
		  </div>
		  <div class="modal-body" id="checkOutBody">			  
		  </div>
		  <div class="modal-footer">
			<div class="container">
				<div class="row mt-2" id="checkOutCloseButton">
					<div class="col col-6" id="">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					</div>
					<div class="col col-6" id="buyButtonLogOut">
						<form>
						<button type="submit" class="btn btn-danger float-right" onclick="purchase();" id="buyModalButton">Purchase</button>
						</form>
					</div>
				</div>
			</div>
		  </div>
		</div>
	  </div>
	</div>

<!-- g00398357@gmit.ie -->

    <!-- Navbar -->
    
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-4 fixed-top">

        <div class="container">


            <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#navmenu">
        <span class="navbar-toggler-icon"></span>
        </button>
            
        
            <div id="loggedIn" class="text-light px-5">User: Not Logged In</div>
		<!-- Button trigger modal -->
		<div id="LogInButtonWrapper" class="mr-2">
			<button id="logInButton" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#logInModal">
			  Log In
			</button>
		</div>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#products" class="nav-link">Our Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="#questions" class="nav-link">Questions</a>
                    </li>
                    <li class="nav-item">
                        <a href="#testimonials" class="nav-link">Testimonials</a>
                    </li>

                    
		<!-- ShoppingCart -->
		<div class="dropdown">
			<button class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split mt-2 mt-lg-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" >
            <i class="bi bi-cart"></i><span class="badge badge-light" id="shoppingCartBadge">0</span>
				<span class="shoppingCartTotal"></span>
			</button>
			<div class="dropdown-menu dropdown-menu-right pre-scrollable" style="display:none" id="shoppingCartMenuDropdown" aria-labelledby="dropdownMenuButton">
				<div class="table-responsive" id="shoppingCartTableDropDown"></div>
			</div>
		</div>
                </ul>
            </div>
        </div>
    </nav>
    
    
    <!-- Showcase -->
        <section class="bg-dark text-light p-5 text-center text-sm-start">
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div>
                        <h1> BUY <span class="text-warning"> JERRY CANS </span>  </h1>
                        <p class="lead my-4">
                            We stock the widest selection of high quality great value Jerry Cans that you will find anywhere in the Republic of Ireland. We offer same day dispatch and guarantee your satisfaction OR YOUR MONEY BACK!
                            <br>
                            <div id="LogInButtonWrapper" class="mr-2">

		</div>
                  
                    </div>
                    
    <!-- Carousel -->
		<div id="carouselExampleCaptions" class="carousel" data-bs-ride="carousel">
		  <ol class="carousel-indicators">
			<li data-bs-target="#carouselExampleCaptions" data-slide-to="0"></li>
			<li data-bs-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-bs-target="#carouselExampleCaptions" data-slide-to="2"></li>
			<li data-bs-target="#carouselExampleCaptions" data-slide-to="3"></li>
			<li data-bs-target="#carouselExampleCaptions" data-slide-to="4"></li>
			<li data-bs-target="#carouselExampleCaptions" data-slide-to="5"></li>
		  </ol>
		  <div class="carousel-inner" id="carousel-inner">
			<div class="carousel-item">
			  <img src="img/Faithfull-5L.jpg" class="img-fluid d-block w-200px rounded" alt="...">
			</div>
			<div class="carousel-item">
			  <img src="img/Halfords-20L.jpg" class="img-fluid d-block w-200px rounded" alt="...">
			</div>
			<div class="carousel-item">
			  <img src="img/Jefferson-10L.jpg" class="img-fluid d-block w-200px rounded" alt="...">
			</div>
			<div class="carousel-item">
			  <img src="img/Lordos-20L.jpg" class="img-fluid d-block w-200px rounded" alt="...">
			</div>
			<div class="carousel-item">
			  <img src="img/Plastic-20L.jpg" class="img-fluid d-block w-200px rounded" alt="...">
			</div>
			<div class="carousel-item">
			  <img src="img/Sealey-20L.jpg" class="img-fluid d-block w-200px rounded" alt="...">
			</div>
		  </div>
		 
		</div>

                </div>
            </div>
        </section>


        <section class="bg-primary text-light p-5">
            <div class="container">
                <div class="d-md-flex justify-content-between align-items-center">
                    <h3 class="mb-3 mb-md-0">Sign up for our newsletter</h3>
                
                    <div class="input-group news-input">
                        <input type="text"
                        class="form-control"
                        placeholder="Enter e-mail">

                        <button class="btn btn-dark btn-lg" type="button">Subscribe</button>
                      </div>
                
                
                </div>
            </div>
        </section>


        <!-- Learn Section -->

        <section id="learn" class="p-5">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/XwUkbGHFAhs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md p-5">
                        <h2>Learn The Fundamentals</h2>
                        <p class="lead">
                            Learn about the history of Jerry Cans!
                        </p>
                        <p>What makes these cans an iconic carrier for all types of liquids? Learn about the important aspects of their design that you should look out for when choosing your next Jerry Can purchase. Watch this video and enlighten your mind!!</p>
                        <a href="#" class="btn btn-light mt-3">
                            <i class="bi bi-chevron-right"></i> Read More
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="learn" class="p-5 bg-dark text-light">
            <div class="container"> 
                <div class="row align-items-center justify-content-between">
                   
    <!-- Load products from DB -->

	<?php
		//Connect to the database
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpassword = "";
		$dbname = "g00398357";
		
		$connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
		
		//Test if connection occoured
		if(mysqli_connect_errno()){
			die("DB connection failed: " .
				mysqli_connect_errno().
					" (" . mysqli_connect_errno() . ")"
					);
		}
		
		if(!$connection){
			die('Could not connect: ' . mysqli_error());
		}
		
		//Perform DB Query
		$result = mysqli_query($connection,"SELECT * FROM items");
		
		//Class to store JerryCan Objects
		class JerryCan{
				var $id;
				var $name;
				var $description;
				var $price;
				var $capacity;
				var $imgURL;
				
				public function __construct($id, $name, $description, $price, $capacity, $imgURL){
					$this->id = $id;
					$this->name = $name;
					$this->description = $description;
					$this->price = $price;
					$this->capacity = $capacity;
					$this->imgURL = $imgURL;
				}
		}
		
		//Array to store the JerryCan objects
		$JerryCans = array();
		
		//Loop over the results
		while($JerryCanDB = mysqli_fetch_array($result)){
			//Name each JerryCanObject with the ID of the object, and create a new JerryCanObject for each row in the DB
			${"b".$JerryCanDB['id']} = new JerryCan($JerryCanDB['id'], $JerryCanDB['name'], $JerryCanDB['description'], 
				$JerryCanDB['price'], $JerryCanDB['capacity'], $JerryCanDB['imgURL']);
			//Add the JerryCanObject to the array
			array_push($JerryCans, ${"b".$JerryCanDB['id']});
		}
		
		//Use JSON for JScript
		$myJSON = json_encode($JerryCans);
		
		
	
        
        //Loop over results again to generate cards
		$result2 = mysqli_query($connection,"SELECT * FROM items");
		
		echo "<div id=\"products\" class=\"row\">";
				
	
		while($card = mysqli_fetch_array($result2)){
			echo "<div class=\"col-sm-6\">";
			echo "<div class=\"card border-light m-3 text-dark align-items-center\" id=\"" . $card['id'] . "\">";
		    echo "<img src=\"img/" . $card['imgURL'] . "\" class=\"card-img\" alt=\"...\" >";
 		    echo "<div class=\"card-body\">";
			echo "<h5 class=\"card-title text-center\">" . $card['name'] . "</h5>";
			echo "<p class=\"card-text text-justify\">" . "Capacity: " . $card['capacity'] . "L</p>";
			echo "<p class=\"card-text text-justify\">" . $card['description'] . "</p>";
			echo "<p class=\"card-text text-center\">€" . $card['price'] . "</a>";
			echo "<div class=\"row justify-content-center\">";
			echo "<button type=\"button\" class=\"btn btn-dark\" id=\"" . $card['id'] . "\" onclick=\"getItemData(this);\">";
			echo "Add to Cart"; 
			echo "</button>";
			echo "</div>";
		  	echo "</div>";
			echo "</div>";
			echo "</div>";
		}

		echo "</div>";
	?>    
                

                </div>
            </div>
        </section>

        <!-- Question Accordion -->

        <section class="p-5" id="questions">
            <div class="container">
                <h2 class="text-center mb-4">Frequently Asked Questions</h2>
                
                <div class="accordion accordion-flush" id="questions">
                    <!-- Item 1 -->
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-one">
                          Where are you located?
                        </button>
                      </h2>
                      <div id="question-one" class="accordion-collapse collapse"  data-bs-parent="#questions">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis sequi nulla corporis amet ullam placeat dolorem provident facere culpa, eveniet nihil perferendis aperiam numquam voluptates eaque modi, eum alias in quas, repellat nam. Consectetur ab dolorem necessitatibus beatae libero amet illo dolores asperiores, quibusdam officia vitae hic sit, commodi distinctio.</div>
                      </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-two">
                            How much does it cost for shipping?
                          </button>
                        </h2>
                        <div id="question-two" class="accordion-collapse collapse"  data-bs-parent="#questions">
                          <div class="accordion-body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis sequi nulla corporis amet ullam placeat dolorem provident facere culpa, eveniet nihil perferendis aperiam numquam voluptates eaque modi, eum alias in quas, repellat nam. Consectetur ab dolorem necessitatibus beatae libero amet illo dolores asperiores, quibusdam officia vitae hic sit, commodi distinctio.</div>
                        </div>
                      </div>
                    <!-- Item 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-three">
                            What do I need to know?
                          </button>
                        </h2>
                        <div id="question-three" class="accordion-collapse collapse"  data-bs-parent="#questions">
                          <div class="accordion-body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis sequi nulla corporis amet ullam placeat dolorem provident facere culpa, eveniet nihil perferendis aperiam numquam voluptates eaque modi, eum alias in quas, repellat nam. Consectetur ab dolorem necessitatibus beatae libero amet illo dolores asperiores, quibusdam officia vitae hic sit, commodi distinctio.</div>
                        </div>
                      </div>
                      <!-- Item 4 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-four">
                            What is your returns policy?
                          </button>
                        </h2>
                        <div id="question-four" class="accordion-collapse collapse"  data-bs-parent="#questions">
                          <div class="accordion-body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis sequi nulla corporis amet ullam placeat dolorem provident facere culpa, eveniet nihil perferendis aperiam numquam voluptates eaque modi, eum alias in quas, repellat nam. Consectetur ab dolorem necessitatibus beatae libero amet illo dolores asperiores, quibusdam officia vitae hic sit, commodi distinctio.</div>
                        </div>
                      </div>
                      <!-- Item 5 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-five">
                        Will you help me find a job?
                          </button>
                        </h2>
                        <div id="question-five" class="accordion-collapse collapse"  data-bs-parent="#questions">
                          <div class="accordion-body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis sequi nulla corporis amet ullam placeat dolorem provident facere culpa, eveniet nihil perferendis aperiam numquam voluptates eaque modi, eum alias in quas, repellat nam. Consectetur ab dolorem necessitatibus beatae libero amet illo dolores asperiores, quibusdam officia vitae hic sit, commodi distinctio.</div>
                        </div>
                      </div>
                  </div>
            </div>
        </section>

        <section id="testimonials" class="p-5 bg-primary">
            <div class="container">
                <h2 class="text-center text-white">Our Customers</h2>
                <p class="lead text-center text-white mb-5">
                    Read testimonials from our valued customers.
                </p>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <img src="https://randomuser.me/api/portraits/men/10.jpg" class="rounded-circle mb-3" alt="">
                                <h3 class="card-title mb-3">John Doe</h3>
                                <p class="card-text">Great customer service, when I had a problem with my order they were able to get me sorted pronto!</p>
                                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-faceJerryCan text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <img src="https://randomuser.me/api/portraits/women/12.jpg" class="rounded-circle mb-3" alt="">
                                <h3 class="card-title mb-3">Sarah Smith</h3>
                                <p class="card-text">Best place to buy Jerry Cans full stop. Never going to look anywhere else again.</p>
                                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-faceJerryCan text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <img src="https://randomuser.me/api/portraits/men/12.jpg" class="rounded-circle mb-3" alt="">
                                <h3 class="card-title mb-3">Steve Smith</h3>
                                <p class="card-text">One of the worst companies I've ever dealt with. Never again.</p>
                                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-faceJerryCan text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <img src="https://randomuser.me/api/portraits/women/10.jpg" class="rounded-circle mb-3" alt="">
                                <h3 class="card-title mb-3">Jane Doe</h3>
                                <p class="card-text">Great value and fast delivery. Now I can store 20 litres of soup in my garage.</p>
                                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-faceJerryCan text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>
        </section>

            <!-- Contact & Map -->
            <section class="p-5">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-md">
                            <h2 class="text-center mb-4">Contact Info</h2>
                            <ul class="list-group list-group-flush lead">
                                <li class="list-group-item">
                                    <span class="fw-bold">Main Location:</span> 50 Main Street, Dublin
                                </li>
                                <li class="list-group-item">
                                    <span class="fw-bold">Sales Team:</span> sales@sales.com
                                </li>
                                <li class="list-group-item">
                                    <span class="fw-bold">Tech Support:</span> blackhole@noanswer.com
                                </li>
                                <li class="list-group-item">
                                    <span class="fw-bold">Free Goodies:</span> magicman@pixiefloof.com
                                </li>
                            </ul>
                        </div>
                        <div class="col-md">
                            OK
                        </div>
                    </div>
                </div>
            </section>
    
            <!-- Footer -->

            <footer class="p-5 bg-dark text-white text-center position-relative">
                <div class="container">
                    <p class="lead">
                        Copyright &copy; 2022 Derek Higgins
            
                        <a href="#" class="position-absolute bottom-0 end-0 p-5">
                            <i class="bi bi-arrow-up-circle h1"></i>
                        </a>
                    </p>
                </div>
            </footer>

  
  <!-- Log In Modal -->
	
	<div class="modal fade" id="logInModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Log In</h5>
			<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<form id="form">
			  <div class="form-group">
				<label for="logInEmail">Email address</label>
				<input type="email" class="form-control" id="logInEmail" aria-describedby="emailHelp" required>
				<small id="emailHelp" class="form-text text-muted">(Just write any valid Email, e.g. a@a.com)</small>
			  </div>
			  <div class="form-group">
				<label for="logInPassword">Password</label>
				<input type="password" class="form-control" id="logInPassword" required>
				<small id="emailHelp" class="form-text text-muted">(and any password)</small>
			  </div>
			  <div class="form-group form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Remember me</label>
			  </div>
		  </div>
		  <div class="modal-footer">
			<div class="container">
				<div align="center">
					<button type="submit" class="btn btn-secondary btn-block" id="logInModalButton">Log In</button>
				</div>

			</div>
		  </div>
		  </form>
		</div>
	  </div>
	</div>

    
	<!-- Log Out Modal -->
	<div class="modal" id="logOutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title col-11 text-center" id="exampleModalLabel2">Log Out</h5>
			<button type="button" class="close align-top" data-bs-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			  <div class="my-2 col-12 text-center padding-0" id="logOutText">Are you sure you want to Log out?</div>
		  </div>
		  <div class="modal-footer">
			<div class="container">
				<div class="row mt-2" id="closeButtonLogOut">
					<div class="col col-6" id="">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					</div>
					<div class="col col-6" id="logOutButtonLogOut">
						<form>
						<button type="button" class="btn btn-danger" id="logOutModalButton">Log Out</button>
						</form>
					</div>
				</div>
			</div>
		  </div>
		</div>
	  </div>
	</div>



</body>

<script>
    //Carousel Random Start
	//Reference: sitepoint.com
	
	//get the number of slides
	var numberSlides = document.querySelectorAll('#carousel-inner .carousel-item').length;
	//Select a random slide
	var startSlide = Math.floor((Math.random() * numberSlides));
	//NodeList to store the items in the list of "carousel-indicators"
	var indicators = document.querySelectorAll('.carousel-indicators li')
	//Loop over the NodeList, get the value of the slide, if its the same as selected, add ".active" class to the "indicator" and the "item"
	//If not, remove it
	for(var i = 0; i < indicators.length; i++){
		var slideValue = indicators[i].getAttribute('data-slide-to');
		if(startSlide == slideValue){
			//indicators[i].classList.add("active");
			document.querySelectorAll('.carousel-item')[slideValue].classList.add('active');
		}else{
			//indicators[i].classList.remove("active");
			document.querySelectorAll('.carousel-item')[slideValue].classList.remove('active');
		}
	}
	



	//Log In PHP
	var form = document.getElementById("form")
	var email = document.getElementById("logInEmail")
	var submit = document.getElementById("logInModalButton")
		
	//Listener for when clicking in the modal button
	submit.addEventListener("click", function(){
		//If the form is valid (otherwise would do it even with invalid, but not closing because of above)
		if (form.checkValidity()) {
			//Store the value of the email input
			var email = document.getElementById("logInEmail").value
			//Delete from @ and store the rest as "name"
			var name = email.substring(0, email.indexOf('@'));
			//If name is too long, shorten it
			if(name.length > 10){
				var name = name.substring(0, 10);
			}
				alert("Welcome " + name + "!")
				sessionStorage.setItem("userName", name);
			
		}
	}) //End of the function, will close the Modal

	// Listener to know if there's an user saved & to check if there are items in shopping cart (logged or not)
	document.addEventListener('DOMContentLoaded', function(){
			loggedIn();			
			checkSavedShoppingCart();
		});

	//Method to change the page for an user logged in (closin modal refresh page Idk why tbh)
	function loggedIn(){
		//Store the data of the session variable
		var userName = sessionStorage.getItem("userName")
		//Check if there's data there (Listener listens always, even at the beguinning (first load of page). If no user, stops here)
		if(userName !== null){
			//Fill the empty Div to show the user name in navbar (structure)
			document.getElementById("loggedIn").innerHTML = "<div id=\"userDiv\" class=\"mr-2 row\"><i class=\"bi bi-person-circle\"></i><div style=\"color: white\" id=\"loggedInName\" class=\"align-self-center\"></div></div>";
			//Fill the empty Div to show the user name in navbar (Actual data name)
			document.getElementById("loggedInName").innerHTML = userName
			//Change the Log In button for the Log Out button
			document.getElementById("logInButton").innerHTML = "Log Out"
			//Change the ID of the button
			document.getElementById("logInButton").setAttribute("id", "logOutButton")
			//Change the button to trigger the Log Out Modal

            document.getElementById("logOutButton").setAttribute("data-bs-target", "#logOutModal");

		}
	}

    //ShoppingCart
	//Variable to know if the table needs to be created (when adding first element to shopping cart)
	var createShoppingTable = true;
	//Variable to store the ID's of the items in the cart
	var itemsInCart = [];
	
	//Method to get the data of the item added. Triggered from "Add to cart" Button. Para: element to buy 
	function getItemData(item){
		//Get the ID of the item to buy and locate it in the Array of all JerryCans (ID -1 = position, as it starts in 0)
		var IdItemToBuy = parseInt(item.getAttribute('id'));
		var itemJerryCan = loadedJerryCans[IdItemToBuy-1];
		//Loop over the items stored in the array of items in the cart, if the item to add is already there, say it and break
		for(var i = 0; i < itemsInCart.length; i++){
			if(itemsInCart[i] == itemJerryCan.id){
				alert("Item alredy in the Shopping Cart! Select quantity to buy there :)");
				return;
				}
		}
		//If it's not already in the cart, add its ID to the array of items in cart
		itemsInCart.push(itemJerryCan.id);
		//Get values of the element to buy from the array of all JerryCans
		var itemName = itemJerryCan.name;
		var itemCover = itemJerryCan.imgURL;
		var itemPrice = itemJerryCan.price;
		var itemId = itemJerryCan.id
		//Call UpdateCart with the values
		updateCart(itemCover, itemPrice, itemName, itemId);
	}
	//Method to create shoppingcart table (if doesn't exist) or/and add elements to the table
	function updateCart(itemCover, itemPrice, itemName, itemId){
		//Get where the dropdown menu to show the table is
		var shoppingTable = document.getElementById("shoppingCartTableDropDown");
		//Check if the table needs to be created (true from default, false when adding elements, true when removing all elements)
		if(createShoppingTable == true){
			showShoppingCart();
			//Inser into the container of the table (drop down) the table structure: head, body and foot, with body blank)
			shoppingTable.innerHTML += "<table class=\"table table-sm\" id=\"shoppingCartTable\"><thead><tr><th scope=\"col\">Item</th><th class=\"w-100\" scope=\"col\">Name</th><th scope=\"col\">Quantity</th><th scope=\"col\">Price</th></tr></thead><tbody id=\"shoppingCartTableBody\"></tbody><tfoot id=\"shoppingCartFoot\"><tr><td colspan=\"2\"><h5>Total</h5></td><td colspan=\"2\" id=\"totalPrice\">0</td></tr><tr><td colspan=\"4\"><button type=\"button\" class=\"btn btn-primary\" onclick=\"buy()\" data-bs-toggle=\"modal\" data-bs-target=\"#checkOutModal\">Checkout</button></td></tr></tfoot>";
		}
        /*
        			<button id="basketButton" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#checkOutModal">
                    */
		//Get the table from id 
		var table = document.getElementById("shoppingCartTable");
		//Create row
		var newJob = document.createElement("tr");
		//Asign the ID of the row as the ID of the element to buy
		newJob.setAttribute("id", ("SCitemId" + itemId));
		//Body of the row, taking elements passed on parameter
		newJob.innerHTML = "<tr><td id=\"tdIDIMG\"><img src=\"img/" + itemCover + "\" class=\"card-img-cart\"></td><td id=\"tdIDName\" class=\"small\">" + itemName + "</td><td id=\"quantityTD\"><form><input type=\"number\" class=\"form-control numberOfJerryCans\" id=\"quantityForm\"  value=\"1\" min=\"1\" oninput=\"managePrice()\"></form><button type=\"button\" class=\"btn btn-danger btn-sm mt-2\" onclick=\"removeCartItem(this)\">Remove</button></td><td>" + itemPrice + "</td></tr>";
		//Append the row to the body of the table
		table.tBodies[0].appendChild(newJob);
		//Set create table to false
		createShoppingTable = false;
		
		//Each time a new element added, manage prices
		managePrice();
	}
	//Method to remove an element from the shopping cart table. Triggered from button "Remove" on table. Param: the button element on this row
	function removeCartItem(element){
		//Get the TR element of the row where the button is
		var trToDelete = element.parentElement.parentElement;
		//Get the ID of the TR (same as the ID of the JerryCan)
		var idJerryCanToDelete = (trToDelete.id).substring(8);
		//Check if the row is the only rw in the table, to delete the whole table
		var deleteOnlyRow = checkDeleteTable();
		//If it's not the only item, delete only the row
		if(deleteOnlyRow == true){
			//Delete the row
			trToDelete.remove();
			//Loop over the array of Items in the cart to delete the ID of the item, as it's no longer on the cart
			for(var i = 0; i < itemsInCart.length; i++){
				if(itemsInCart[i] === idJerryCanToDelete){
					delete itemsInCart[i];
				}
			}
			quantityMap.delete(idJerryCanToDelete);			
			//After deleting, manage price (not needed if whole table deleted)
			managePrice();
		}
	}
	//Method to delete the whole table instead of the row, if it's the only row in the table
	function checkDeleteTable(){
		//Check the elements in the Array storing the elements in the car (filer: deleting elements leaves empty slots, get rid of them)	
		var itemsInCartFiltered = itemsInCart.filter(function (filt){
			return filt != null;
		});
		//Check if there's only one element in the array/cart
		if(itemsInCartFiltered.length == 1){
			//Remove whole table
			document.getElementById("shoppingCartTable").remove();
			//Set items in the cart to none
			itemsInCart = [];
			//Set to create new table if needed
			createShoppingTable = true;
			//Set the badge of the ShoppingCartButton with the total quantity of elements
			document.getElementById("shoppingCartBadge").innerHTML = 0;
			notShowEmptyShoppingCart();
			quantityMap.clear();
			return false;
		}else{
			//If there are more than one element, return to continue in the other method
			return true;
		}
	}
	
	var quantityMap = new Map();
	
	//Method to manage the price. Triggered by Adding element to the cart, by deleting element from the cart and change on quantity input form
	function managePrice(){
		//Get all elements (rows) sotirng the quantity on the table
		var itemsInCartQuantity = document.getElementsByClassName("numberOfJerryCans");
		//Variable to store the total price
		var total = 0;
		//Variable to store the total cuantity of JerryCans
		var quantityTotal = 0;
		//Loop over the elements of the quantity. For each element...
		for(var i = 0; i < itemsInCartQuantity.length; i++){
			//Get the value of the quantity input
			var quantity = parseInt(itemsInCartQuantity[i].value);
			//Update the total quantity of JerryCans
			quantityTotal += quantity;
			//Get the partial ID of the item going back to the TR parent (ID same as JerryCan)
			var trOfItem = itemsInCartQuantity[i].parentElement.parentElement.parentElement;
			//Get the ID of the JerryCan
			var idJerryCanManagePrice = (trOfItem.id).substring(8);
			//Get the object-JerryCan storing all data from JerryCans loaded
			var itemJerryCan = loadedJerryCans[idJerryCanManagePrice-1];
			//Get the price of one JerryCan from the object
			var unitaryPrice = parseFloat(itemJerryCan.price);
			
			//Calculte total price
			var lotPrice = quantity*unitaryPrice;
			//Separated in two for readibility: go to the TD element storing the quantity, and get to the next TD (Price) and change the innerHTML
			var goToTD = itemsInCartQuantity[i].parentElement.parentElement;
			goToTD.nextSibling.innerHTML = lotPrice.toFixed(2);
			//Add cost of the JerryCan(s) to the total
			total += lotPrice;
			//Insert into Map (to save quantity in shopping cart and Checkout Modal)
			quantityMap.set(idJerryCanManagePrice, quantity)
		}
		//After all JerryCans in cart done, set the total (2 decimal spaces)
		document.getElementById("totalPrice").innerHTML = total.toFixed(2);
		//Set total back to 0 for next calculus
		total = 0;
		
		//Set the badge of the ShoppingCartButton with the total quantity of elements
		document.getElementById("shoppingCartBadge").innerHTML = quantityTotal
		
		//Save shopping cart in case of refresh	
		saveShoppingCart();
		
	}
	//Method to show what has been bought. Triggered by "Checkout" button on Modal (after Buy in Shopping Cart)
	function purchase(){
		//Delete the cart table
		var myNode = document.getElementById("shoppingCartTableDropDown");
		myNode.innerHTML = '';
		//Set variables of cart creation and badge to 0
		itemsInCart = [];
		createShoppingTable = true;
		//Set the badge of the ShoppingCartButton with the total quantity of elements
		document.getElementById("shoppingCartBadge").innerHTML = 0
		notShowEmptyShoppingCart();
		quantityMap.clear();
		//Show something
		alert("Your order has been dispached. Thanks!");

	}
	//Method to not let show the empty dropdown menu with no items in cart
	function notShowEmptyShoppingCart(){
		//Remove Info stored in session (if LoginOut or buying, delete Info to not leave it for other users)
		sessionStorage.removeItem("saveShoppingCartSessionVar")
		//Same for badge in shopping cart icon
		sessionStorage.removeItem("saveBadgeSessionVar")
		//Change to "style="display: none"" to not let the dropdown display
		document.getElementById("shoppingCartMenuDropdown").style.display = "none"
	}
	//Method to let show the dropsown menu with items in cart
	function showShoppingCart(){
		//Change "style="display: none"" to let the dropdown display
		document.getElementById("shoppingCartMenuDropdown").style.display = ""
	}
	//Method to save the shopping cart items in case of refresh
	function saveShoppingCart(){
		//Store the data of the shopping cart
		var saveShoppingCart = document.getElementById("shoppingCartTableDropDown").innerHTML
		//Save it in Session Variable
		sessionStorage.setItem("saveShoppingCartSessionVar", saveShoppingCart);
		//Same for the badge of the shopping cart
		var saveBadge = document.getElementById("shoppingCartBadge").innerHTML
		sessionStorage.setItem("saveBadgeSessionVar", saveBadge);
		//And variables to manage the shoppingCart
		
		//Filter the array
		var itemsInCartFiltered = itemsInCart.filter(function (filt){
				return filt != null;
			});
		
		itemsInCartFiltered += ","; //formatting
		//Save variables
		sessionStorage.setItem("saveItemsInCart", itemsInCartFiltered);
		sessionStorage.setItem("saveCreateTable", createShoppingTable);
		//Save quantityMap
		//Map Keys&Values to arrays (sessionStorage converts to string or object name(?))
		var quantityMapKeys = Array.from( quantityMap.keys());
		var quantityMapValues = Array.from( quantityMap.values());
		//Save keys&values as arrays (will be a string)
		sessionStorage.setItem("saveQuantityMapKeys", quantityMapKeys);
		sessionStorage.setItem("saveQuantityMapValues", quantityMapValues);
	}
	//Method to check if there are elements in shopping cart on refresh
		//Called by general listener
	function checkSavedShoppingCart(){
		//Variable to store the saved shopping cart (if somethig has been added to the cart not logged In, saved it for the user)
		var checkShoppingCart = sessionStorage.getItem("saveShoppingCartSessionVar")
		//Check if there was something in the shopping cart before loggin in
		if(checkShoppingCart !== null){
			//Insert the saved data in the Shopping cart and the badge
			document.getElementById("shoppingCartTableDropDown").innerHTML = sessionStorage.getItem("saveShoppingCartSessionVar");
			document.getElementById("shoppingCartBadge").innerHTML = sessionStorage.getItem("saveBadgeSessionVar");
			//Show the sopping cart as now there is somethig there
			showShoppingCart();
			//Split the array from session storage into different values and push them into the itemsInCart array
			var tempItemsInCart = sessionStorage.getItem("saveItemsInCart");
			var last = 0;
			for(var i = 0; i < tempItemsInCart.length; i++){
				if(tempItemsInCart.charAt(i) === ","){
					var itemId = tempItemsInCart.substring(last, i);
					last = i + 1;
					itemsInCart.push(itemId);
				}
			}
			//Same for create shooping cart table
			createShoppingTable = sessionStorage.getItem("saveCreateTable");
			//Get keys&values strings
			quantityMapKeys = sessionStorage.getItem("saveQuantityMapKeys");
			quantityMapValues = sessionStorage.getItem("saveQuantityMapValues");
			//Loop over the array and do...
			for(var i =0; i<quantityMapKeys.length; i++){
				//Convert to string saves the colons........ so ignore it if it's one
				if(quantityMapKeys[i] === ","){continue;}
				//Assign the map as it was
				quantityMap.set(quantityMapKeys[i], quantityMapValues[i]);
				//Get the TR of the item (TRId same as JerryCan Id plus constant modification)
				var tableTRId = "SCitemId" + quantityMapKeys[i];
				//Get the table element
				var tableTR = document.getElementById(tableTRId)
				//Go to the TD of the Quantity (input form in Shopping cart)
				var quantityTD = tableTR.firstElementChild.nextSibling.nextSibling;
				//Get to the Input (Inside of the form)
				var valueInput = quantityTD.firstElementChild.firstElementChild
				//Assign the value f the map (key used to know which row) to the value of the input
				valueInput.value = quantityMapValues[i];
			}			
		}
	}
	//Method to Manage the data inside CheckOutModal from the ShoppingCart Table
	//Called by "checkout" in Shopping Cart
	function buy(){
		//Check if there's an user logged in
		var checkLogIn = document.getElementById("loggedIn").hasChildNodes();
		//Don't let go to CheckOutModal without user loged in
		if(!checkLogIn){
			alert("Please, Log In or Sign Up to buy!")
			return
		}else{
			//get the table from the shopping cart
			var getTable = document.getElementById("shoppingCartTableDropDown").innerHTML;
			//Put it in the modal body
			document.getElementById("checkOutBody").innerHTML = getTable
			//Modify the table of the modal
			//Go to the table (from modal body)
			var shoppingTable = document.getElementById("checkOutBody").firstElementChild;
			//go to the Head (from table)
			var shoppingTableHead = shoppingTable.firstElementChild;
			//Go to the IMG TH-TD
			var shoppingTableIMGHeading = shoppingTableHead.firstElementChild.firstElementChild;
			//Delete it
			shoppingTableIMGHeading.remove();
			//Go to the Foot of the table (from table)
			var shoppingTableFoot = shoppingTableHead.nextSibling.nextSibling;
			//Go to the button of the table foot
			var shoppingTableCheckOutButton = shoppingTableFoot.firstElementChild.nextSibling;
			//Delete it
			shoppingTableCheckOutButton.remove();
			//Go to the body
			var shoppingTableBody = shoppingTableHead.nextSibling;
			//Get all rows of the Body
			var shoppingTableTRs = shoppingTableBody.children;
			//Loop through the rows and do...
			for (var i = 0; i < shoppingTableTRs.length; i++) {
				//Get the row
			  var tableChild = shoppingTableTRs[i];
			  //Get ID of the item (same as TR ID)
			  var idOfItem = (tableChild.id).substring(8);
			  //Get its quantity from QuantityMap
			  var getMapQuantity = quantityMap.get(idOfItem);
			  //Go to the TD of the Quantity (input form in Shopping cart)
			  var quantityTD = tableChild.firstElementChild.nextSibling.nextSibling;
			  //Exchange the From Element for the quantity
			  quantityTD.innerHTML = getMapQuantity;
			  //Go to the IMG TD
			  var imgTD = tableChild.firstElementChild;
			  //Delete it
			  imgTD.remove();
			  
			}
			//After all changes, show Modal
			$('#checkOutModal').modal('show');
		}
	}

	//Log Out

	//Store the element of the log out button (set after login in)
	var submitOut = document.getElementById("logOutModalButton");
	//Listen the Log Out button for click
	submitOut.addEventListener('click', function(){
		//Reove the stored data about the user (or stored data on Log In modal would be still there and trigger the listener "after refresh Log In Modal")
		sessionStorage.removeItem("userName")
		//Go to
		loggedOut();
	});
    
	//Method to log out 
	//Called by the Log Out Modal Button and the general listener 
	function loggedOut(){
		//Store session data about the user
		var userName = sessionStorage.getItem("userName");
		//Store if the User div logged In exists (user name shown in page)
		var checkForUser = document.getElementById("loggedIn").hasChildNodes();

		if(userName === null && checkForUser){
			
			document.getElementById("logOutButtonLogOut").remove();
			document.getElementById("logOutText").innerHTML = "Succesfully logged Out!"
			document.getElementById("exampleModalLabel2").innerHTML = "See you soon!"
			//Change Tag to put the Close button in the middle
			document.getElementById("closeButtonLogOut").setAttribute ("class", "row mt-2 justify-content-center")
			document.getElementById("closeButtonLogOut").innerHTML = "<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>"
			
			//Remove the Div with the user info and reset the LogIn Button/Modal
			document.getElementById("userDiv").remove();
			document.getElementById("logOutButton").innerHTML = "Log In"
			document.getElementById("logOutButton").setAttribute("id", "logInButton")
            //document.getElementById("logInButton").dataset.target = "#logInModal";
            document.getElementById("logInButton").setAttribute("data-bs-target", "#logInModal");


			//Variables to store the session data of the shopping cart (if something added to the cart before loggin in)
			var checkSavedShoppingCart = sessionStorage.getItem("saveShoppingCartSessionVar")
			//Variable to get the shopping cart table
			var checkShoppingCart = document.getElementById("shoppingCartTable")
			//Check if there is something in the session data of the shopping cart or the shopping cart dropdown
			//Check both because:
				//If something in the cart before log In, would be stored and shown in other log ins (even different users, as the JS would think is from just before login in)
				//If bought logged in wouldn't be in session data and still want to delete it
			if(checkSavedShoppingCart !== null || checkShoppingCart !== null){
				//remove table and set badge
				document.getElementById("shoppingCartTable").remove();
				document.getElementById("shoppingCartBadge").innerHTML = 0;
				//Reset the shopping cart variables
				itemsInCart = []
				createShoppingTable = true
				//Not show shopping cart as it is empty
				notShowEmptyShoppingCart();
			}
		}else{
			return
		}
	}
	
	
//Load JerryCan Objects
if(document.readyState == 'loading'){
		document.addEventListener('DOMContentLoaded', function(){
			getObjects();
		});
	}else{
		getObjects();
	}
		
	var loadedJerryCans;
	
	function getObjects(){
		loadedJerryCans = <?php echo $myJSON ?>;
	}

    </script>

</html>

<!-- REFERENCES

Creating A Shopping Cart With HTML5 Web Storage — Smashing Magazine
Creating A Shopping Cart With HTML5 Web Storage — Smashing Magazine. (2019). Retrieved 18 May 2022, from https://www.smashingmagazine.com/2019/08/shopping-cart-html5-web-storage/

Shopping Cart With Multiple User Login & Register System Using HTML - CSS - PHP - MySQL Database (2022). Retrieved 18 May 2022, from https://www.youtube.com/watch?v=ChBnZXtvCxc&ab_channel=Mr.WebDesigner

Create Simple Shopping Cart using PHP & MySql (2022). Retrieved 18 May 2022, from https://www.youtube.com/watch?v=0wYSviHeRbs&ab_channel=Webslesson

Create Shopping Cart Using PHP and Mysql (2022). Retrieved 18 May 2022, from https://www.youtube.com/watch?v=IO5ezsURqyg&ab_channel=DailyTuition

Simple login form validation with php (2022). Retrieved 18 May 2022, from https://www.youtube.com/watch?v=rGS8t9BSGO4&ab_channel=ILTECHS

Adams, D. (2019). Shopping Cart System with PHP and MySQL. Retrieved 18 May 2022, from https://codeshack.io/shopping-cart-system-php-mysql/

Simple PHP Shopping Cart - Phppot. (2022). Retrieved 18 May 2022, from https://phppot.com/php/simple-php-shopping-cart/

Bootstrap 5 Crash Course | Website Build & Deploy (2022). Retrieved 18 May 2022, from https://www.youtube.com/watch?v=4sosXZsdy-s&ab_channel=TraversyMedia
-->