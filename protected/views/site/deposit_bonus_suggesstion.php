<div class="col-md-8 col-md-offset-2 table-margin">
    <div class="users-comments">
        <h3 class="deposit-bonus-header" style="margin-top: 30px;margin-bottom: 20px;color: #034aa2;">Leave Your Valuable Suggesstion:</h3>
    </div>
    <div class="form box-primary">
        <h4 align="center" style="color: red;" id="ajax_result"></h4>
        <div class="box-body">
            <div class="stars">
                <form action="" method="post" id="deposit_bonus_suggestion_form">
                    <div class="form-group col-md-12" id="alert-box" style="padding: 0">
                    
                    </div>
                    <div class="form-group row">
                        <label>Name</label>
                        <input type="text" name="name" class= "form-control deposit_bonus_suggestion_name">
                    </div>
    
                    <div class="form-group row">
                        <label>Suggesstion</label>
                        <textarea type="text" name="comment" id="comment_text" class="form-control deposit_bonus_suggestion_comment" rows="7"></textarea>
                        <span id="characters_left" class="pull-right" style="color:red;">Maximum 1000 Characters</span>
                    </div>
                
                    <div class="form-group row">
                        <button class="btn btn-primary" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>