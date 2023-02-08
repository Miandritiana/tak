<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Takalomimilo Add</title>

  <link href="<?php echo base_url();?>assets/css/login.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container px-4 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-10 my-5">
                            <form action="<?php echo base_url('TakaloAdmin/insertObjet');?>" method="post">
                                <h3 class="mb-5 text-center heading">We are TakaloMimilo</h3>
                                <h6 class="msg-info">Ajouter un objet</h6>
                                <div class="form-group"> <label class="form-control-label text-muted">Nom</label> <input type="text" id="nom" name="nom" class="form-control"> </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Description</label> <input type="text" id="desc" name="desc" class="form-control"> </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Prix estimatif</label> <input type="number" min="0" id="prix" name="pass" class="form-control"> </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Image</label> <input type="file" id="sary" name="pass" class="form-control"> </div>
                                <div class="row justify-content-center my-3 px-3"> <button class="btn-block btn-color">Ok</button> </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

                     