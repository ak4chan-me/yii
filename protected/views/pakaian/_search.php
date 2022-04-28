<?php
/* @var $this PakaianController */
/* @var $model Pakaian */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'kd_pakaian'); ?>
		<?php echo 		$form->textField($model,'kd_pakaian',array('class'=>"form-control", 'size'=>10,'maxlength'=>10))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'nm_pakaian'); ?>
		<?php echo 		$form->textField($model,'nm_pakaian',array('class'=>"form-control", 'size'=>45,'maxlength'=>45))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'hrg_pakaian'); ?>
		<?php echo 		$form->textField($model,'hrg_pakaian',array('class'=>"form-control", 'size'=>10,'maxlength'=>10))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'gmbr_pakaian'); ?>
		<?php echo 		$form->textField($model,'gmbr_pakaian',array('class'=>"form-control", 'size'=>45,'maxlength'=>45))		; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->