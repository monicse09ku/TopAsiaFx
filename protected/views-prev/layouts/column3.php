<?php /* @var $this Controller */ ?>
<?php
    Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/style.css');
?>

<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div class="col-md-9">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<div class="col-md-3">
	
	</div>
</div>
<div class="footer_top">
	<div class="container">
		<div class="col-md-9">
			<div id="content">
				<h4>Risk Disclaimer</h4>
				<p>TopAsiaFx.com will not be held legally responsible for any loss or damage resulting from relying on the information presented in this website, including brokers' reviews, financial news, authors' opinions and/or analysis. The data included on TopAsiaFx.com is not always published in real-time and/or necessarily accurate and do not always reflect the views of TopAsiaFx.com owners, employees and/or content contributors. One should know that Forex trading or any other kind of trading involves high risks, and is not suitable for everyone. Before trading Forex or any other financial tool one should be aware of the risks, know exactly his investment goals and limits and acquire a fine level of risk understanding and risk management.</p>
			</div><!-- content -->
		</div>
		<div class="col-md-3 footer_top_sidebar">
			<p><a href="<?php echo Yii::app()->request->baseUrl; ?>/">Home</a></p>
			<p><a href="<?php echo Yii::app()->request->baseUrl; ?>/about">About Us</a></p>
			<p><a href="<?php echo Yii::app()->request->baseUrl; ?>/contact">Contact Us</p>
			<div id="share"></div>
		</div>
	</div>
</div>
<?php $this->endContent(); ?>