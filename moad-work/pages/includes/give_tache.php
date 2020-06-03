<div class="card shadow mb-4" data-aos="zoom-in-up">
    <div class="card-header py-3">
        <h6 class="text-primary m-0 font-weight-bold">DONNER UNE&nbsp;TACHE</h6>
    </div>
    <div class="card-body">
        <form class="text-left" action="functions/give_tache.php" id="gv_tch_frm">
            <div class="form-group">
                <div class="form-row">
                    <div class="col-xl-3 offset-xl-1"><label class="col-form-label">Title&nbsp;</label></div>
                    <div class="col-xl-6 offset-xl-0"><input class="form-control" type="text" name="title" required=""></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-xl-3 offset-xl-1"><label class="col-form-label">To&nbsp;</label></div>
                    <div class="col-xl-6 offset-xl-0"><input class="form-control" type="search" name="to" required=""></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-xl-3 offset-xl-1"><label class="col-form-label">Deadline&nbsp;</label></div>
                    <div class="col-xl-6 offset-xl-0"><input class="form-control" type="datetime-local" name="deadline" required=""></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-xl-3 offset-xl-1"><label class="col-form-label">Discreption&nbsp;</label></div>
                    <div class="col-xl-6 offset-xl-0"><textarea class="form-control" name="discreption" required=""></textarea></div>
                </div>
            </div><button class="btn btn-primary" type="submit" style="margin-left: 40%;" onclick="give_tch()">submit</button>
        </form>
    </div>
</div>