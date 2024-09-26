<?php
$menu = "Restaurents";
if(isset($_GET['s']) AND $_GET['s'] == "offer")
	$menu = "Restaurents";
	$page_title = "Restaurents";
	include("header.php");
?>
<!--/process-->
	<section class="banner-rs-bottom py-lg-5 py-3" id="plats">
		<div class="container py-lg-4 py-3">
			<div class="row inner-sec-agileits-w3ls">
				<div class="row t-in" style="width: 100%;">
					<?php
					$db = new DB();
					$rsGlobal = new RsGlobal($db->con,"restaurant");
					if(isset($_GET['s'])){
						$allRestaurant = $rsGlobal->Query("SELECT * FROM restaurant WHERE offer != ''");
					}
					else{
						$allRestaurant = $rsGlobal->Query("SELECT * FROM restaurant");
					}
					while ($row = $allRestaurant->fetch_assoc()) {
						$restaurant = $row;
						include('inc/template/restaurant_loop.php');
					}
					?>
				</div>
			</div>
		</div>
	</section>
	<!--//preocess-->
<?php
	include("footer.php");
?>