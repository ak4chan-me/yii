<?php
/* @var $this ObatController */
/* @var $model Obat */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'obat-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'obatNama'); ?>
		<?php echo $form->textField($model,'obatNama',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'obatNama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'obatHarga'); ?>
		<?php echo $form->textField($model,'obatHarga',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'obatHarga'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->