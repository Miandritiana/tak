<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TakaloMimilo</title>

</head>
<body>
<?php $this->load->view($header);?>
<section class="owl-carousel active-product-area section_gap" style="margin-top:150px;">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Echange</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua.</p>
						</div>
					</div>
				</div>
					<!-- Start category Area -->
	<section class="category-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-12">
					<div class="row">
						<?php for ($i=0; $i < count($data); $i++) { ?>
							<div class="col-lg-4 col-md-4">
								<div class="single-deal">
									<div class="overlay"></div>
									<img class="img-fluid w-100" src="<?php echo base_url();?>assets/<?php echo $data[$i]['sary']; ?>" width="500px">
									<a href="<?php echo base_url('TakaloAdmin/traitChange');?>?idObjGet=<?php echo $data[$i]['id']; ?>&idObj=<?php echo $ObjSet; ?>" class="img-pop-up" target="_blank">
										<div class="deal-details">
											<h6 class="deal-title">Anah ho atakalo</h6>
										</div>
									</a>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<?php for ($i=0; $i < count($dataObjSet); $i++) { ?>
						<div class="single-deal">
							<div class="overlay"></div>
							<img class="img-fluid w-100" src="<?php echo base_url();?>assets/<?php echo $dataObjSet[$i]['sary']; ?>" width="10px">
							<a href="#" class="img-pop-up" target="_blank">
								<div class="deal-details">
									<h6 class="deal-title"><?php echo $dataObjSet[$i]['nom']; ?></h6>
									<h6 class="deal-title">Atakaloko</h6>
								</div>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<!-- End category Area -->
	<?php $this->load->view($footer);?>

</body>
</html>