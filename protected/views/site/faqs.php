<?php 
    if(!empty($faqs)){
?>
<div class="users-comments">
    <h3 class="deposit-bonus-header" style="margin-top: 30px;margin-bottom: 20px;color: #034aa2;">FAQs:</h3>
</div>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    
    <?php
        $i = 0;
        foreach ($faqs as $faq) {
    ?>
    <div class="panel panel-default">
        <div class="panel-heading faqs-panel-default" role="tab" id="heading<?php echo $i; ?>" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
            <h4 class="panel-title">
                <?php echo ucfirst($faq['title']);?>
                <span class="glyphicon glyphicon-<?php if ($i == 0) { echo 'minus'; }else { echo 'plus'; }?> pull-right"></span>
            </h4>
        </div>
        <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse <?php if($i == 0) { echo 'in';}?>" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
            <div class="panel-body">
                <?php echo $faq['description'];?>
            </div>
        </div>
    </div>
    <?php 
            $i++; 
        } 
    ?>
    
  
</div>
<?php } ?>