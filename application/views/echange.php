<div class="container">
            <div class="row">
              <div class="col-12" style= "margin-top: 270px;">
                    <div class="section-title">
                        <h1>Tous les echanges</h1>
                    </div>
                  <table class="table table-image">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Objet ako</th>
                        <th scope="col">Prix ako</th>
                        <th scope="col">User mangataka</th>
                        <th scope="col">Objet any</th>
                        <th scope="col">Prix any</th>
                        <th scope="col">Ok</th>
                        <th scope="col">Non</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php for($i = 0; $i<count($echange); $i++) { ?>
                                <tr>
                                    <th scope="row"><?php echo $echange[$i]['id']; ?></th>
                                    <td class="w-25">
                                        <img src="<?php echo base_url();?>assets/<?php echo $echange[$i]['saryObjSet']; ?>" class="img-fluid img-thumbnail" alt="Sheep">
                                    </td>
                                    <td><?php echo $echange[$i]['volaObjSet']; ?> $</td>
                                    <td><?php echo $echange[$i]['nomUM']; ?></td>
                                    <td class="w-25">
                                        <img src="<?php echo base_url();?>assets/<?php echo $echange[$i]['saryObjGet']; ?>" class="img-fluid img-thumbnail" alt="Sheep">
                                    </td>
                                    <td><?php echo $echange[$i]['volaObjGet']; ?> $</td>
                                    <td><a href="<?php echo base_url('takaloAdmin/accepte');?>?idUM=<?php echo $echange[$i]['idUA'];?>&objGet=<?php echo $echange[$i]['idObSet'];?>&objSet=<?php echo $echange[$i]['idObGet'];?>"><button type="button" class="btn btn-success">Oui</button></a></td>
                                    <td><a href="<?php echo base_url('takaloAdmin/refuse');?>?idUM=<?php echo $echange[$i]['idUA'];?>&objGet=<?php echo $echange[$i]['idObSet'];?>&objSet=<?php echo $echange[$i]['idObGet'];?>"><button type="button" class="btn btn-warning">Non</button></a></td>
                                </tr>
                        <?php } ?>
                    </tbody>
                  </table>   
                </div>
            </div>
        </div>