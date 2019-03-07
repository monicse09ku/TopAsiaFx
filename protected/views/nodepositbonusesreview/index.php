<?php
/* @var $this NoDepositBonusesReviewController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'No Deposit Bonuses Reviews',
);

$this->menu=array(
	array('label'=>'Create NoDepositBonusesReview', 'url'=>array('create')),
	array('label'=>'Manage NoDepositBonusesReview', 'url'=>array('admin')),
);
?>

<h1>No Deposit Bonuses Reviews</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
