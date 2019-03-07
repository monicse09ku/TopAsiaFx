<?php
/* @var $this BrokersController */
/* @var $data Brokers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('broker_title')); ?>:</b>
	<?php echo CHtml::encode($data->broker_title); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_title')); ?>:</b>
	<?php echo CHtml::encode($data->meta_title); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_description')); ?>:</b>
	<?php echo CHtml::encode($data->meta_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('broker_url')); ?>:</b>
	<?php echo CHtml::encode($data->broker_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('broker_image')); ?>:</b>
	<?php echo CHtml::encode($data->broker_image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bonus_title')); ?>:</b>
	<?php echo CHtml::encode($data->bonus_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bonus_desc')); ?>:</b>
	<?php echo CHtml::encode($data->bonus_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_deposit')); ?>:</b>
	<?php echo CHtml::encode($data->min_deposit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spreads_from')); ?>:</b>
	<?php echo CHtml::encode($data->spreads_from); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_score')); ?>:</b>
	<?php echo CHtml::encode($data->user_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_leverage')); ?>:</b>
	<?php echo CHtml::encode($data->max_leverage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('regulation')); ?>:</b>
	<?php echo CHtml::encode($data->regulation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('review_title')); ?>:</b>
	<?php echo CHtml::encode($data->review_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pros')); ?>:</b>
	<?php echo CHtml::encode($data->pros); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cons')); ?>:</b>
	<?php echo CHtml::encode($data->cons); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('score')); ?>:</b>
	<?php echo CHtml::encode($data->score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_address')); ?>:</b>
	<?php echo CHtml::encode($data->site_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('broker_short_desc')); ?>:</b>
	<?php echo CHtml::encode($data->broker_short_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('broker_detail_desc')); ?>:</b>
	<?php echo CHtml::encode($data->broker_detail_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telephone')); ?>:</b>
	<?php echo CHtml::encode($data->telephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pairs_offered')); ?>:</b>
	<?php echo CHtml::encode($data->pairs_offered); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('markets')); ?>:</b>
	<?php echo CHtml::encode($data->markets); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deposit_options')); ?>:</b>
	<?php echo CHtml::encode($data->deposit_options); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('education')); ?>:</b>
	<?php echo CHtml::encode($data->education); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_rating')); ?>:</b>
	<?php echo CHtml::encode($data->total_rating); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_rating_user')); ?>:</b>
	<?php echo CHtml::encode($data->total_rating_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_date')); ?>:</b>
	<?php echo CHtml::encode($data->update_date); ?>
	<br />

	*/ ?>

</div>