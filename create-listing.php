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
    <section class="pt-4 pt-md-5">
    	<div class="container mb-5">
    		<div class="row g-4 align-items-center">				
    			<div class="col-lg-7">
    				<!-- Title -->
    				<h1 class="mb-4">List Your Property at <span class="text-accent">Travel Bookings</span></h1>
    				<!-- Info -->
    				<p class="mb-4 lead">Our website reaches 100k travelers from 15 countries. We have the reach that other platforms don't, and get you the bookings they can't.</p>
    				<!-- Button -->
    				<a href="<?php echo build_url('my-account'); ?>" class="btn btn-primary shadow btn-lg mb-4">Add Your Listing <i class="fa-solid fa-arrow-right-long fa-fw"></i></a>
    				<!-- List -->
    				<h6 class="h5 mb-2 mt-2">All you have to do</h6>
    				<ul class="list-group list-group-borderless mb-0 small">
    					<li class="list-group-item d-flex mb-0 align-items-center lead">
    						<i class="uil uil-check-circle text-success me-2 mt-1"></i>Sign in or sign up for an account
    					</li>
                        <li class="list-group-item d-flex mb-0 align-items-center lead">
    						<i class="uil uil-check-circle text-success me-2 mt-1"></i>Upload property details and pictures
    					</li>
                        <li class="list-group-item d-flex mb-0 align-items-center lead">
    						<i class="uil uil-check-circle text-success me-2 mt-1"></i>Set your prices and dates available
    					</li>
                        <li class="list-group-item d-flex mb-0 align-items-center lead">
    						<i class="uil uil-check-circle text-success me-2 mt-1"></i>Sit back, relax and watch your bookings flow in
    					</li>
    				</ul>
    			</div>
    			<!-- Image -->
    			<div class="col-lg-5 text-center">
    				<img src="images/join-us.svg" alt="join us">
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