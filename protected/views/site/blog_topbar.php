<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

?>

<?php if(!empty($categories)){?>
<nav id="topbar1" class="navbar navbar-default navbar-fixed-top clear-header">
    <div class="container">
        <ul class="nav navbar-nav">
            <?php foreach($categories as $category) { ?>
            <li>
                <a class="header_link" href="<?php echo Yii::app()->request->getBaseUrl(true).'/blogs?cat='.urlencode($category['name']);?>"><?php echo $category['name']; ?></a>
            </li>
            <?php } ?>
            
        </ul>
    </div>
</nav>
<?php } ?>

