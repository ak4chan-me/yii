<?php
/* @var $this PakaianController */
/* @var $model Pakaian */
/* @var $form CActiveForm */
?>
<div class="row">
	<div class="col-3">
		<img class="img-fluid" src="<?=$model->gmbr_pakaian?>">
	</div>
	<div class="col-9">
			
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pakaian-form',
	'htmlOptions'=>array(
		'enctype'=>'multipart/form-data',
	),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Isian dengan tanda <span class="required">*</span> wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'nm_pakaian'); ?>
		<?php echo 		$form->textField($model,'nm_pakaian',array('class'=>"form-control", 'size'=>45,'maxlength'=>45))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'nm_pakaian'); ?>
		</small>
	</div>

	     
	<div class="form-group">
		<?php echo $form->labelEx($model,'hrg_pakaian'); ?>
		<?php echo 		$form->textField($model,'hrg_pakaian',array('class'=>"form-control", 'size'=>10,'maxlength'=>10))		; ?>
		<small class="form-text text-muted">
			<?php echo $form->error($model,'hrg_pakaian'); ?>
		</small>
	</div>

	
	<div class="mb-3">
	  <label for="formFile" class="form-label">Gambar Pakaian</label>
	  <input class="form-control" type="file" name="gambar" id="formFile">
	</div>
	
	
	<div class="mt-4">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Ubah',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
	</div>
</div>
