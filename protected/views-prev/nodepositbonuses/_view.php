<?php
/* @var $this NoDepositBonusesController */
/* @var $data NoDepositBonuses */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('details')); ?>:</b>
	<?php echo CHtml::encode($data->details); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_rating')); ?>:</b>
	<?php echo CHtml::encode($data->total_rating); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_rater')); ?>:</b>
	<?php echo CHtml::encode($data->total_rater); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('average_rating')); ?>:</b>
	<?php echo CHtml::encode($data->average_rating); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('available_till')); ?>:</b>
	<?php echo CHtml::encode($data->available_till); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_comments')); ?>:</b>
	<?php echo CHtml::encode($data->total_comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_date')); ?>:</b>
	<?php echo CHtml::encode($data->update_date); ?>
	<br />

	*/ ?>

</div>