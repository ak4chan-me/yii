<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Isian dengan tanda <span class="required">*</span> wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'userId'); ?>
		<?php echo 		$form->textField($model,'userId',array('class'=>"form-control", 'size'=>45,'maxlength'=>45))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'userId'); ?>
		</small>
	</div>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'userNama'); ?>
		<?php echo 		$form->textField($model,'userNama',array('class'=>"form-control", 'size'=>60,'maxlength'=>80))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'userNama'); ?>
		</small>
	</div>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'userPassword'); ?>
		<?php echo 		$form->textArea($model,'userPassword',array('class'=>"form-control",'rows'=>6, 'cols'=>50))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'userPassword'); ?>
		</small>
	</div>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'userGroup'); ?>
		<?php echo 		$form->textField($model,'userGroup',array('class'=>"form-control", 'size'=>45,'maxlength'=>45))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'userGroup'); ?>
		</small>
	</div>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'userFoto'); ?>
		<?php echo 		$form->textArea($model,'userFoto',array('class'=>"form-control",'rows'=>6, 'cols'=>50))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'userFoto'); ?>
		</small>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Ubah',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->