<?php 
    /*
    * Configure Database Setup
    */
    
    require './php/config.php';

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

    <!-- Hero -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="bd-placeholder-img hero-img" width="100%" height="100%" src="images/hero/01.png" alt="banner">
            <div class="container">
              <div class="carousel-caption">
                <h2>Find amazing hotel deals <br/>for your dream travels worldwide</h2>
                <p class="sub-heading py-4">Get the best prices on 1,000+ properties, worldwide</p>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Listing -->
    <section class="section">
        <div class="container">
            <div class="row m-5">
                <div class="col-md-6 col-xl-4 mt-4">
		        	<div class="card shadow p-2 pb-0 h-100">
		        		<!-- Image -->
		        		<img src="images/hotels/listing/01.jpg" class="rounded-2" alt="Card image">
		        		<!-- Card body START -->
		        		<div class="card-body px-3 pb-0">
		        			<!-- Rating and cart -->
		        			<div class="d-flex justify-content-between mb-3">
		        				<a href="#" class="badge bg-dark text-white stretched-link"><i class="uil uil-star me-2 text-warning"></i>4.7</a>
		        				<a href="#" class="h6 mb-0 z-index-2"><i class="uil uil-bookmark bi-bookmark"></i></a>
		        			</div>
		        			<!-- Title -->
		        			<h5 class="card-title"><a href="#" class="stretched-link">Courtyard by Marriott</a></h5>
		        			<!-- List -->
		        			<ul class="nav nav-divider mb-2 mb-sm-3 mt-3">
		        				<li class="nav-item">Air Conditioning</li>
		        				<li class="nav-item">Wifi</li>
		        				<li class="nav-item">Pool</li>
		        				<li class="nav-item">More+</li>
		        			</ul>
		        		</div>
		        		<!-- Card body END -->
		        		<!-- Card footer START-->
		        		<div class="card-footer pt-0">
		        			<!-- Price and Button -->
		        			<div class="d-sm-flex justify-content-sm-between align-items-center">
		        				<!-- Price -->
		        				<div class="d-flex align-items-center">
		        					<h5 class="font-weight-bold text-success mb-0 me-1">$650</h5>
		        					<span class="mb-0 me-2">/night</span>
		        				</div>
		        				<!-- Button -->
		        				<div class="mt-2 mt-sm-0 z-index-2">
		        					<a href="#" class="btn btn-sm btn-primary mb-0 w-100">View Detail<i class="bi bi-arrow-right ms-2"></i></a>    
		        				</div>                  
		        			</div>
		        		</div>
		        	</div>
		        </div>

                <div class="col-md-6 col-xl-4 mt-4">
		        	<div class="card shadow p-2 pb-0 h-100">
		        		<!-- Image -->
		        		<img src="images/hotels/listing/12.jpg" class="rounded-2" alt="Card image">
		        		<!-- Card body START -->
		        		<div class="card-body px-3 pb-0">
		        			<!-- Rating and cart -->
		        			<div class="d-flex justify-content-between mb-3">
		        				<a href="#" class="badge bg-dark text-white stretched-link"><i class="uil uil-star me-2 text-warning"></i>5.0</a>
		        				<a href="#" class="h6 mb-0 z-index-2"><i class="uil uil-bookmark bi-bookmark"></i></a>
		        			</div>
		        			<!-- Title -->
		        			<h5 class="card-title"><a href="#" class="stretched-link">Al Faisal Hotel</a></h5>
		        			<!-- List -->
		        			<ul class="nav nav-divider mb-2 mb-sm-3 mt-3">
		        				<li class="nav-item">Air Conditioning</li>
		        				<li class="nav-item">Wifi</li>
		        				<li class="nav-item">Pool</li>
		        				<li class="nav-item">More+</li>
		        			</ul>
		        		</div>
		        		<!-- Card body END -->
		        		<!-- Card footer START-->
		        		<div class="card-footer pt-0">
		        			<!-- Price and Button -->
		        			<div class="d-sm-flex justify-content-sm-between align-items-center">
		        				<!-- Price -->
		        				<div class="d-flex align-items-center">
		        					<h5 class="font-weight-bold text-success mb-0 me-1">$980</h5>
		        					<span class="mb-0 me-2">/night</span>
		        				</div>
		        				<!-- Button -->
		        				<div class="mt-2 mt-sm-0 z-index-2">
		        					<a href="#" class="btn btn-sm btn-primary mb-0 w-100">View Detail<i class="bi bi-arrow-right ms-2"></i></a>    
		        				</div>                  
		        			</div>
		        		</div>
		        	</div>
		        </div>

                <div class="col-md-6 col-xl-4 mt-4">
		        	<div class="card shadow p-2 pb-0 h-100">
		        		<!-- Image -->
		        		<img src="images/hotels/listing/09.jpg" class="rounded-2" alt="Card image">
		        		<!-- Card body START -->
		        		<div class="card-body px-3 pb-0">
		        			<!-- Rating and cart -->
		        			<div class="d-flex justify-content-between mb-3">
		        				<a href="#" class="badge bg-dark text-white stretched-link"><i class="uil uil-star me-2 text-warning"></i>4.8</a>
		        				<a href="#" class="h6 mb-0 z-index-2"><i class="uil uil-bookmark bi-bookmark"></i></a>
		        			</div>
		        			<!-- Title -->
		        			<h5 class="card-title"><a href="#" class="stretched-link">Sunset Palm Resort</a></h5>
		        			<!-- List -->
		        			<ul class="nav nav-divider mb-2 mb-sm-3 mt-3">
		        				<li class="nav-item">Air Conditioning</li>
		        				<li class="nav-item">Wifi</li>
		        				<li class="nav-item">Kitchen</li>
		        				<li class="nav-item">More+</li>
		        			</ul>
		        		</div>
		        		<!-- Card body END -->
		        		<!-- Card footer START-->
		        		<div class="card-footer pt-0">
		        			<!-- Price and Button -->
		        			<div class="d-sm-flex justify-content-sm-between align-items-center">
		        				<!-- Price -->
		        				<div class="d-flex align-items-center">
		        					<h5 class="font-weight-bold text-success mb-0 me-1">$475</h5>
		        					<span class="mb-0 me-2">/night</span>
		        				</div>
		        				<!-- Button -->
		        				<div class="mt-2 mt-sm-0 z-index-2">
		        					<a href="#" class="btn btn-sm btn-primary mb-0 w-100">View Detail<i class="bi bi-arrow-right ms-2"></i></a>    
		        				</div>                  
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