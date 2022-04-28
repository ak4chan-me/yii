<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'userId'); ?>
		<?php echo 		$form->textField($model,'userId',array('class'=>"form-control", 'size'=>45,'maxlength'=>45))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'userNama'); ?>
		<?php echo 		$form->textField($model,'userNama',array('class'=>"form-control", 'size'=>60,'maxlength'=>80))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'userPassword'); ?>
		<?php echo 		$form->textArea($model,'userPassword',array('class'=>"form-control",'rows'=>6, 'cols'=>50))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'userGroup'); ?>
		<?php echo 		$form->textField($model,'userGroup',array('class'=>"form-control", 'size'=>45,'maxlength'=>45))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'userFoto'); ?>
		<?php echo 		$form->textArea($model,'userFoto',array('class'=>"form-control",'rows'=>6, 'cols'=>50))		; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->