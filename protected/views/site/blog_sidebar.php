<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

?>

<?php if(!empty($categories)){?>
<div class="review_sidebar_top_div">
    <p class="sidebar_widget_header">Categories</p>
    <div class="category-list">
        <?php 
            foreach($categories as $category){
        ?>
        <div class="category-list-div">
        
            <a href="<?php echo Yii::app()->request->getBaseUrl(true).'/blogs?cat='.urlencode($category['name']);?>"><?php echo $category['name']; ?></a>
        
        </div>
        <?php } ?>
    </div>
    
</div>
<?php } ?>

<a class="read_review_link" href="<?php echo Yii::app()->getBaseUrl(true);?>">See the full brokers list</a>


