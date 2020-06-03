<?php
//TODO: get the tache informations from db
$submissions = $_SESSION['submissions_task'];
for ($i = 0; $i < count($submissions); $i++) {
    $tache_title=$submissions[$i]['titre_tache'];
    $desc = $submissions[$i]['desc_tache'];
    $date = $submissions[$i]['date_submit'];
    $deadline=$submissions[$i]['date_fin_tache'];
    $submitter="Soumise par : ".strtoupper($submissions[$i]['nom'])." ".ucfirst($submissions[$i]['prenom']);
?>
    <li class="list-group-item" data-aos="zoom-in-up">
    <div class="row align-items-center no-gutters">
        <div class="col-12">
            <?php 
                echo '<img src="data:image/*;base64,'.base64_encode($submissions[$i]['justificatif']).'"alt="justif de le soumission" style="width: 100%;">';
             ?>
        </div>   
    </div>
    <div class="row align-items-center no-gutters">
        <div class="col mr-2 ml-2">
            <div class="row">
                <div class="col">
                    <h5 class="mb-0 mt-1"><strong><?php echo $tache_title?></strong></h5>
                    <p style="margin-bottom: 0;margin-top: 10px;">
                        <?php echo $desc?><br><?php echo $submitter?><br>
                    </p>
                    <span class="text-xs text-danger">Date de soumission : <?php echo $date?></span>
                    <span class="float-right text-xs" style="margin-right: 1rem;">Date limite: <?php echo $deadline?></span>
                </div>
            </div>

            <div class="">
                <form action="functions/check_submission.php" method="POST">
                   <div class="form-group">
                        <div class="form-row">
                            <div class="col"><label class="col-form-label">Vos remarques </label></div>
                            <div class="col">
                                <textarea class="form-control" name="rmq" required=""></textarea>
                                <input type="hidden" name="id_tache" value=<?php echo $submissions[$i]['id_tache']; ?>>
                                <input type="hidden" name="cne" value=<?php echo $submissions[$i]['cne']; ?>>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="submit" class="btn btn-success" style="width: 100px;margin-left: 30%;" name="check_task" value="Valider">
                               <!--  <span class="text-white-50 icon"><i class="fas fa-check"></i>
                                </span>
                                <span class="text-white text">Done</span> -->
                            </input>
                        </div>
                        
                    </div>
               </form>
            </div>
        </div>
    </div>
</li>
<?php } ?>

      <!--   <div class="col-xl-12 offset-xl-0"><a class="btn btn-success btn-icon-split" role="button" style="width: 100px;margin-left: 40%;"><span class="text-white-50 icon"><i class="fas fa-check"></i></span><span class="text-white text">Done</span></a>
                    </div> -->