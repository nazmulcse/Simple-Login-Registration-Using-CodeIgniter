<?php include "asset/include/header.php";
function pagetitle(){
$page = "Home";
return $page;
}

function pagedes(){
$des = "";
return $des;
}

function keyword(){
$keyword = "" ;
return $keyword;
}
 ?>

		  	<!-- banner start -->
			<!-- ================ -->
			
				<!-- breadcrumb start -->
				<!-- ================ -->
				<div class="breadcrumb-container">
					<div class="container">
						<ol class="breadcrumb">
							<li><i class="fa fa-home pr-10"></i><a class="link-dark" href="index.php">Home</a></li>
							<li class="active">Page About</li>
						</ol>
					</div>
				</div>
				<!-- breadcrumb end -->
				
			
			<!-- banner end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container padding-bottom-clear">





	
			<!-- section start -->
			
	<div class="container">
	<div class="row">
		<div class="col-md-12">
		<div align="center">
			<h4>Profile Summary</h4>
			<img src="<?php echo $user_photo;?>" class="img-responsive" height="150px" width="150px"/>
			<p>Name: <?php echo $full_name; ?></p>
			<p>Email: <?php echo $email; ?></p>
			<p>...</p>
			</div>
		</div>
		<div class="col-md-8">
			<?php if($role != 'admin'){?>
			<p>lorem ipsum dolum</p>
			<p>lorem ipsum dolum</p>
			<p>lorem ipsum dolum</p>
			<p>...</p>
			<?php }?>
		</div>
	</div>
	<?php if($role == 'admin'){?>
		<?php echo $this->session->flashdata('msg'); ?>
		<div class="row">
			<div class="col-md-12">
				<h4>Notification</h4>
				<table class="table table-bordered">
					<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Email</th>
						<th>Client Email Password</th>
						<th>Mobile No.</th>
						<th>NID No.</th>
						<th>Bank Name</th>
						<th>Account No.</th>
						<th>Payza ID</th>
						<th>Payza Password</th>
						<th>Status</th>
						<th>Action</th>

					</tr>
					</thead>
					<tbody>
					<?php $c=0;?>
					<?php foreach($users as $user){ ?>
						<tr>
							<td><?php echo ++$c?></td>
							<td><?php echo $user['full_name']?></td>
							<td><?php echo $user['email']?></td>
							<td><?php echo $user['client_email_password']?></td>
							<td><?php echo $user['mobile_no']?></td>
							<td><?php echo $user['nid']?></td>
							<td><?php echo $user['bank_name']?></td>
							<td><?php echo $user['account_no']?></td>
							<td><?php echo $user['payza_id']?></td>
							<td><?php echo $user['payza_password']?></td>
							<td>
								<?php
									if($user['is_active'] == 1){
										echo "<span style='border-radius: 5px;color: white;background: green;'>Active</span>";
									}else{
										echo "Inactive";
									}
								?>
							</td>
							<td><a class="btn btn-default" href="<?php echo base_url()?>signup/edit/<?php echo $user['id']?>" role="button">Edit</a></td>

						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	<?php }?>
</div>
			
			
			<!-- section end -->

		  <?php include "asset/include/footer.php" ?>

		</section>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster -->
		<!-- ================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="asset/plugins/jquery.min.js"></script>
		<script type="text/javascript" src="asset/bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="asset/plugins/modernizr.js"></script>

		<!-- jQuery Revolution Slider  -->
		<script type="text/javascript" src="asset/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="asset/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>


		<!-- Isotope javascript -->
		<script type="text/javascript" src="asset/plugins/isotope/isotope.pkgd.min.js"></script>

		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="asset/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="asset/plugins/waypoints/jquery.waypoints.min.js"></script>

		<!-- Count To javascript -->
		<script type="text/javascript" src="asset/plugins/jquery.countTo.js"></script>

		<!-- Parallax javascript -->
		<script src="asset/plugins/jquery.parallax-1.1.3.js"></script>

		<!-- Contact form -->
		<script src="asset/plugins/jquery.validate.js"></script>



		<!-- Background Video -->
		<script src="asset/plugins/vide/jquery.vide.js"></script>

		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="asset/plugins/owl-carousel/owl.carousel.js"></script>



		<!-- SmoothScroll javascript -->
		<script type="text/javascript" src="asset/plugins/jquery.browser.js"></script>
		<script type="text/javascript" src="asset/plugins/SmoothScroll.js"></script>



		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="asset/js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="asset/js/custom.js"></script>
		
		
	</body>


</html>