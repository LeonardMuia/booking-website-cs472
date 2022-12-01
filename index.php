<?php 
    /*
    * Configure Database Setup
    */
    
    require_once './php/config.php';

?>
<!DOCTYPE html>
<html lang="en">
<?php
    include './components/head.php';
?>
<body>

<!-- header -->

<?php 
    include './components/header.php';
?>

<main>
    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="bd-placeholder-img" width="100%" height="100%" src="images/1.png" alt="banner">
            <div class="container">
              <div class="carousel-caption">
                <h2>Find amazing hotel deals <br/>for your dream travels worldwide</h2>
                <p class="sub-heading py-4">Get the best prices on 1,000+ properties, worldwide</p>
                <p><a class="btn carousel__cta_btn" href="hotels">Find Hotels</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="bd-placeholder-img" width="100%" height="100%" src="images/3.png" alt="banner">
            <div class="container">
              <div class="carousel-caption">
                <h2>Make hotel reservations <br/>from the comfort of your home</h2>
                <p class="sub-heading py-4">Reserve a table in one of the fine restaurants close to you</p>
                <p><a class="btn carousel__cta_btn" href="restaurants">Restaurants Near You</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item active">
          <img class="bd-placeholder-img" width="100%" height="100%" src="images/2.png" alt="banner">
            <div class="container">
              <div class="carousel-caption">
                <h2>Book a spa appointment <br/>anywhere, anytime</h2>
                <p class="sub-heading py-4">Avoid last minute hustle and book in advance</p>
                <p><a class="btn carousel__cta_btn" href="spa">Spas Near You</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- Mission -->
    <section class="pt-5 bg-light pb-5">
	    <div class="container z-index-9 mb-3">
	    	<div class="row">
	    		<div class="col-lg-10 m-auto text-center">
	    			<h3 class="mb-4">We simplify booking for you!</h3>
	    			<p class="lead mt-2">Our mission is to make affordable travel accessible to more people, and to deliver affordable and enjoyable travel experiences that are seamless from end to end. By seamless, we mean hassle-free from the moment you start planning your trip.</p>
    
	    			<!-- List -->
	    			<ul class="list-inline hstack gap-4 flex-wrap justify-content-center mt-4">
	    				<li class="list-inline-item">
	    					<h5 class="mb-0 fw-normal"><i class="uil uil-star text-warning me-1"></i>Have High Rating</h5>
	    				</li>
	    				<li class="list-inline-item"> 
	    					<h5 class="mb-0 fw-normal"><i class="uil uil-map-marker fa-fw text-primary me-1"></i>Best Locations</h5>
	    				</li>
	    				<li class="list-inline-item">
	    					<h5 class="mb-0 fw-normal"><i class="uil uil-times-circle fa-fw text-danger me-1"></i>Free Cancellation</h5>
	    				</li>	
	    				<li class="list-inline-item"> 
	    					<h5 class="mb-0 fw-normal"><i class="uil uil-transaction fa-fw text-success me-1"></i>Payment Options</h5>
	    				</li>
	    			</ul>

	    			<!-- Button and rating -->
	    			<div class="d-sm-flex justify-content-center align-items-center mt-4">
	    				<!-- Rating -->
	    				<div class="d-flex justify-content-center align-items-center text-start me-0 me-sm-4">
	    					<h3 class="me-2 mb-0">4.5</h3>
	    					<div>
	    						<ul class="list-inline mb-0">
	    							<li class="list-inline-item me-0 h6"><i class="uil uil-star text-warning"></i></li>
	    							<li class="list-inline-item me-0 h6"><i class="uil uil-star text-warning"></i></li>
	    							<li class="list-inline-item me-0 h6"><i class="uil uil-star text-warning"></i></li>
	    							<li class="list-inline-item me-0 h6"><i class="uil uil-star text-warning"></i></li>
	    							<li class="list-inline-item me-0 h6"><i class="uil uil-star-half-alt text-warning"></i></li>
	    						</ul>
	    						<p class="mb-0 small">Clients Love Us!</p>
	    					</div>
	    				</div>
	    				<!-- Button -->
	    				<div> <a href="<?php echo build_url('hotels'); ?>" class="btn btn-lg btn-dark mb-0">Explore now</a> </div>
	    			</div>
	    		</div>
	    	</div> <!-- Row END -->
	    </div>
    </section>

	<!-- Featured Hotels -->
    <section class="section">
        <div class="container">
            <div class="row mb-4">
		    	<div class="col-12 text-center">
		    		<h3 class="mb-3">Featured Hotels</h3>
		    	</div>
		    </div>

            <div class="row g-4">
		    	<!-- Hotel item -->
		    	<div class="col-sm-6 col-xl-3">
		    		<!-- Card START -->
		    		<div class="card card-img-scale overflow-hidden bg-transparent">
		    			<!-- Image and overlay -->
		    			<div class="card-img-scale-wrapper rounded-3">
		    				<!-- Image -->
		    				<img src="images/hotels/01.jpg" class="card-img" alt="hotel image">
		    				<!-- Badge -->
		    				<div class="position-absolute bottom-0 start-0 p-3">
		    					<div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i class="uil uil-map-marker me-2"></i>New York</div>
		    				</div>
		    			</div>

		    			<!-- Card body -->
		    			<div class="card-body px-2">
		    				<!-- Title -->
		    				<h5 class="card-title"><a href="#" class="stretched-link">Baga Comfort</a></h5>
		    				<!-- Price and rating -->
		    				<div class="d-flex justify-content-between align-items-center">
		    					<h6 class="text-success mb-0">$455 <small class="fw-light">/night</small> </h6>
		    					<h6 class="mb-0">4.5<i class="uil uil-star text-warning ms-1"></i></h6>
		    				</div>
		    			</div>
		    		</div>
		    		<!-- Card END -->
		    	</div>

                <!-- Hotel item -->
		    	<div class="col-sm-6 col-xl-3">
		    		<!-- Card START -->
		    		<div class="card card-img-scale overflow-hidden bg-transparent">
		    			<!-- Image and overlay -->
		    			<div class="card-img-scale-wrapper rounded-3">
		    				<!-- Image -->
		    				<img src="images/hotels/02.jpg" class="card-img" alt="hotel image">
		    				<!-- Badge -->
		    				<div class="position-absolute bottom-0 start-0 p-3">
		    					<div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i class="uil uil-map-marker me-2"></i>California</div>
		    				</div>
		    			</div>

		    			<!-- Card body -->
		    			<div class="card-body px-2">
		    				<!-- Title -->
		    				<h5 class="card-title"><a href="#" class="stretched-link">New Apollo Hotel</a></h5>
		    				<!-- Price and rating -->
		    				<div class="d-flex justify-content-between align-items-center">
		    					<h6 class="text-success mb-0">$585 <small class="fw-light">/night</small> </h6>
		    					<h6 class="mb-0">4.8<i class="uil uil-star text-warning ms-1"></i></h6>
		    				</div>
		    			</div>
		    		</div>
		    		<!-- Card END -->
		    	</div>

                <!-- Hotel item -->
		    	<div class="col-sm-6 col-xl-3">
		    		<!-- Card START -->
		    		<div class="card card-img-scale overflow-hidden bg-transparent">
		    			<!-- Image and overlay -->
		    			<div class="card-img-scale-wrapper rounded-3">
		    				<!-- Image -->
		    				<img src="images/hotels/03.jpg" class="card-img" alt="hotel image">
		    				<!-- Badge -->
		    				<div class="position-absolute bottom-0 start-0 p-3">
		    					<div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i class="uil uil-map-marker me-2"></i>Los Angeles</div>
		    				</div>
		    			</div>

		    			<!-- Card body -->
		    			<div class="card-body px-2">
		    				<!-- Title -->
		    				<h5 class="card-title"><a href="#" class="stretched-link">Gemstone Hotel</a></h5>
		    				<!-- Price and rating -->
		    				<div class="d-flex justify-content-between align-items-center">
		    					<h6 class="text-success mb-0">$385 <small class="fw-light">/night</small> </h6>
		    					<h6 class="mb-0">4.6<i class="uil uil-star text-warning ms-1"></i></h6>
		    				</div>
		    			</div>
		    		</div>
		    		<!-- Card END -->
		    	</div>

                <!-- Hotel item -->
		    	<div class="col-sm-6 col-xl-3">
		    		<!-- Card START -->
		    		<div class="card card-img-scale overflow-hidden bg-transparent">
		    			<!-- Image and overlay -->
		    			<div class="card-img-scale-wrapper rounded-3">
		    				<!-- Image -->
		    				<img src="images/hotels/04.jpg" class="card-img" alt="hotel image">
		    				<!-- Badge -->
		    				<div class="position-absolute bottom-0 start-0 p-3">
		    					<div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i class="uil uil-map-marker me-2"></i>Chicago</div>
		    				</div>
		    			</div>

		    			<!-- Card body -->
		    			<div class="card-body px-2">
		    				<!-- Title -->
		    				<h5 class="card-title"><a href="#" class="stretched-link">Helios</a></h5>
		    				<!-- Price and rating -->
		    				<div class="d-flex justify-content-between align-items-center">
		    					<h6 class="text-success mb-0">$625 <small class="fw-light">/night</small> </h6>
		    					<h6 class="mb-0">4.8<i class="uil uil-star text-warning ms-1"></i></h6>
		    				</div>
		    			</div>
		    		</div>
		    		<!-- Card END -->
		    	</div>
		    	
		    </div>
        </div>
    </section>

	<!-- This Month Deals -->
    <section class="pt-5 pb-5 mb-0 mt-5">
    	<div class="container px-lg-5">
    		<!-- Title -->
    		<div class="row mb-4">
    			<div class="col-12 text-center">
    				<h3 class="mb-2 mb-3">This Month Deals</h3>
    			</div>
    		</div>

    		<div class="row g-4 mb-0">
    			<!-- Offer item -->
    			<div class="col-6 col-md-4 col-xl-2">
    				<div class="card bg-transparent h-100">
    					<img src="images/offer/02.jpg" class="card-img" alt="">
    					<div class="card-body text-center p-2">
    						<h6 class="mb-0"><a href="#" class="stretched-link">Pass Holder Package</a></h6>
    					</div>
    				</div>
    			</div>

    			<!-- Offer item -->
    			<div class="col-6 col-md-4 col-xl-2">
    				<div class="card bg-transparent h-100">
    					<img src="images/offer/03.jpg" class="card-img" alt="">
    					<div class="card-body text-center p-2">
    						<h6 class="mb-0"><a href="#" class="stretched-link">Summer in Maldives</a></h6>
    					</div>
    				</div>
    			</div>

    			<!-- Offer item -->
    			<div class="col-6 col-md-4 col-xl-2">
    				<div class="card bg-transparent h-100">
    					<img src="images/offer/07.jpg" class="card-img" alt="">
    					<div class="card-body text-center p-2">
    						<h6 class="mb-0"><a href="#" class="stretched-link">Group trip with Friends</a></h6>
    					</div>
    				</div>
    			</div>

    			<!-- Offer item -->
    			<div class="col-6 col-md-4 col-xl-2">
    				<div class="card bg-transparent h-100">
    					<img src="images/offer/04.jpg" class="card-img" alt="">
    					<div class="card-body text-center p-2">
    						<h6 class="mb-0"><a href="#" class="stretched-link">Travel on a Budget</a></h6>
    					</div>
    				</div>
    			</div>

    			<!-- Offer item -->
    			<div class="col-6 col-md-4 col-xl-2">
    				<div class="card bg-transparent h-100">
    					<img src="images/offer/06.jpg" class="card-img" alt="">
    					<div class="card-body text-center p-2">
    						<h6 class="mb-0"><a href="#" class="stretched-link">Spa Package Offer</a></h6>
    					</div>
    				</div>
    			</div>

    			<!-- Offer item -->
    			<div class="col-6 col-md-4 col-xl-2">
    				<div class="card bg-transparent h-100">
    					<div class="bg-light card-img position-relative h-100">
    						<button class="btn btn-lg btn-primary btn-round mb-0 position-absolute top-50 start-50 translate-middle"><i class="uil uil-arrow-right"></i></button>
    					</div>
    					<div class="card-body text-center p-2">
    						<h6 class="mb-0"><a href="#" class="stretched-link">View All Offers</a></h6>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

	<!-- Discount Code -->
	<section class="pt-0 pt-sm-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Card -->
					<div class="card bg-dark p-3">
						<div class="card-body border border-2 border-dashed border-white rounded position-relative p-5">
							<!-- Title -->
							<h2 class="text-white">Get an Extra 45% Discount Code</h2>
							<!-- Content -->
							<div class="d-flex justify-content-between flex-wrap">
								<h5 class="fw-light text-white mb-0">On all restaurant deals</h5>
								<a href="<?php echo build_url() ?>" class="text-warning fs-4 stretched-link">Use Code: BOOK56</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>

<!-- Footer -->
<?php
    include "./components/footer.php";
?>


<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>