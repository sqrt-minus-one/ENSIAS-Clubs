<?php 
    //TODO: get club president data from db
    $username=strtoupper($_SESSION['presidentC']['nom'])." ".ucfirst($_SESSION['presidentC']['prenom']);
    $avatar='image:data/jpeg;base64,'.base64_encode($_SESSION['presidentC']['photo']); 
?>

<div class="row" data-aos="zoom-in-up" style="margin-bottom: 40px;margin-top: 10px;">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h4>Current club president:</h4>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body" style="width: 300px;margin-right: auto;margin-left: auto;">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <?php 
                                        if ($_SESSION['presidentC']['photo']=='') {
                                            $avatar='../../images/profile.png';
                                        }
                                         ?>
                                        <img style="max-height: 50px; max-width: 50px;" class="border rounded-circle img-profile" src=<?php echo htmlspecialchars($avatar)?>>
                                    </div>
                                    <div class="col mr-2" style="margin-left: 10px;">
                                        <span style="font-size: 120%;"><?php echo htmlspecialchars($username) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col m-auto"><button class="btn btn-danger" type="button" data-toggle="modal" data-target="#presidentSelection" style="width: 82px;margin-right: auto;margin-left: auto;">Change</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>