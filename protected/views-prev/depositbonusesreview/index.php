<?php
/* @var $this DepositBonusesReviewController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Deposit Bonuses Reviews',
);

$this->menu=array(
	array('label'=>'Create DepositBonusesReview', 'url'=>array('create')),
	array('label'=>'Manage DepositBonusesReview', 'url'=>array('admin')),
);
?>

<h1>Deposit Bonuses Reviews</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
