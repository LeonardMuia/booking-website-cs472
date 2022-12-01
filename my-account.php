<?php 

require_once './php/config.php';

if(!isset($_SESSION["username"]) || $_SESSION["loggedin"] === false){

    header("location: login.php");
    exit;
}

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
    <div class="container">
        <div class="p-3 mb-4 mt-5 bg-light rounded-3">
          <div class="container-fluid text-center py-5">
            <h1 class="display-6 fw-bold">👋 Hi <span class="text-accent"><?php echo $_SESSION["username"]; ?>!</span></h1>
            <p class="col-md-12 fs-6 mt-2">Welcome to your dashboard. Manage your bookings and more.</p>
          </div>
        </div>
    </div>
    
    <section class="section">
        <div class="container">
            <nav>
		    	<div class="nav nav-pills nav-fill mb-3" id="nav-tab" role="tablist">
		    		<button class="pills nav-link active" id="nav-hotels-tab" data-bs-toggle="tab" data-bs-target="#nav-hotels" type="button" role="tab" aria-controls="nav-hotels" aria-selected="true"><i class="uil uil-pricetag-alt"></i>Hotel Bookings</button>
		    		<button class="pills nav-link" id="nav-restaurant-tab" data-bs-toggle="tab" data-bs-target="#nav-restaurant" type="button" role="tab" aria-controls="nav-restaurant" aria-selected="false"><i class="uil uil-pricetag-alt"></i>Restaurant Reservations</button>
		    		<button class="pills nav-link" id="nav-spa-tab" data-bs-toggle="tab" data-bs-target="#nav-spa" type="button" role="tab" aria-controls="nav-spa" aria-selected="false"><i class="uil uil-pricetag-alt"></i>Spa Bookings</button>
		    		<button class="pills nav-link" id="nav-payments-tab" data-bs-toggle="tab" data-bs-target="#nav-payments" type="button" role="tab" aria-controls="nav-payments" aria-selected="false"><i class="uil uil-coins"></i>Payments</button>
		    		<button class="pills nav-link" id="nav-notifications-tab" data-bs-toggle="tab" data-bs-target="#nav-notifications" type="button" role="tab" aria-controls="nav-notifications" aria-selected="false"><i class="uil uil-bell"></i>Notifications</button>
		    		<button class="pills nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="uil uil-user-square"></i>My Profile</button>
		    		<button class="pills nav-link" id="nav-listing-tab" data-bs-toggle="tab" data-bs-target="#nav-listing" type="button" role="tab" aria-controls="nav-listing" aria-selected="false"><i class="uil uil-home"></i>My Listing</button>
		    	</div>
		    </nav>
            <div class="tab-content" id="nav-tabContent">
			    <div class="tab-pane fade active show" id="nav-hotels" role="tabpanel" aria-labelledby="nav-hotels-tab">
                    <?php include('./components/empty-booking.php'); ?>
			    </div>
			    <div class="tab-pane fade" id="nav-restaurant" role="tabpanel" aria-labelledby="nav-restaurant-tab">
                    <?php include('./components/empty-booking.php'); ?>
			    </div>
			    <div class="tab-pane fade" id="nav-spa" role="tabpanel" aria-labelledby="nav-spa-tab">
                    <?php include('./components/empty-booking.php'); ?>
			    </div>
                <div class="tab-pane fade" id="nav-payments" role="tabpanel" aria-labelledby="nav-payments-tab">
                    <?php include('./components/empty-payments.php'); ?>
			    </div>
                <div class="tab-pane fade" id="nav-notifications" role="tabpanel" aria-labelledby="nav-notifications-tab">
                    <?php include('./components/empty-notifications.php'); ?>
			    </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <?php include('./components/empty-booking.php'); ?>
			    </div>
                <div class="tab-pane fade" id="nav-listing" role="tabpanel" aria-labelledby="nav-listing-tab">
                    <?php include('./components/empty-booking.php'); ?>
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