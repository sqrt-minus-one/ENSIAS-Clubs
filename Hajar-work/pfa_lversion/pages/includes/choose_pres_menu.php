<div class="modal fade" role="dialog" tabindex="-1" id="presidentSelection">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Choose new president</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 50%;">
                <div class="card" style="margin-bottom: 30px;">
                    <div class="card-body" style="padding-bottom: 0;">
                        <!--TODO: code the logic for the seach, the output will be affected to the list below-->
                        
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-2"><label class="col-form-label">Search</label></div>
                                <div class="col">
                                    <input class="form-control" type="text" name="search_pres" id="search_pres">
                                </div>
                                <!-- <div class="col-3" style="width: 15%;"><button class="btn btn-primary btn-sm" type="submit">search</button>
                                </div> -->
                            </div>
                        </div>
                        
                    </div>
                </div>
                <form method="post" action="functions/new_president.php">
                <div>
                
                <ul class="list-group" id="result">
                   
                </ul>
                <div class="modal-footer">
                    <button class="btn btn-dark" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" name="submit_pres" type="submit">Save</button>
                </div>
                </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
