<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TakaloMimilo</title>

  <!-- Bootstrap core CSS -->
  <link href="..assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/linearicons.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/nouislider.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">

</head>

<body>
<section class="owl-carousel active-product-area section_gap" style="margin-top:150px;">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Tous les objets</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
                    <?php for ($i=0; $i < count($data); $i++) { ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="<?php echo base_url();?>assets/<?php echo $data[$i]['sary']; ?>" alt="">
                                <div class="product-details">
                                    <h6><?php echo $data[$i]['nom']; ?></h6>
                                    <div class="price">
                                        <h6><?php echo $data[$i]['description']; ?></h6>
                                        <h6><?php echo $data[$i]['prixEstimatif']; ?> $</h6>
                                    </div>
                                    <div class="prd-bottom">
                                        <a href="<?php echo base_url('TakaloAdmin/change');?>?idObj=<?php echo $data[$i]['id'];?>" class="social-info">
                                            <span class="ti-bag"></span>
                                            <p class="hover-text">exchange</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
					<!-- single product -->
				</div>
			</div>
		</div>
		<!-- single product slide -->
</section>
</body>

</html>