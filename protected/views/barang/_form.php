<?php
/* @var $this BarangController */
/* @var $model Barang */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'barang-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-floating mt-4">
		<?php echo $form->textField($model,'BarangNama',array(
					'placeholder'=>'Nama','class'=>"form-control",'size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->label($model,'BarangNama'); ?>
		<?php echo $form->error($model,'BarangNama'); ?>
	</div>

	<div class="form-floating mt-4">
		<?php echo $form->textField($model,'BarangHarga',array('placeholder'=>'Harga','class'=>"form-control",'size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->label($model,'BarangHarga'); ?>
		<?php echo $form->error($model,'BarangHarga'); ?>
	</div>

	<div class="form-floating mt-4">
		<?php 
		$items =CHtml::listData(
				Tipe::model()->findAll(),
				'TipeId',
				'TipeNama'
			);
		
		echo $form->dropDownList(
						$model,
						'BarangTipe',
						$items,
						array(
							'class'=>"form-control"
						)
					); ?>
		<?php echo $form->label($model,'BarangTipe'); ?>
		<?php echo $form->error($model,'BarangTipe'); ?>
	</div>

	<div class="form-floating mt-4">
		<?php echo $form->textArea($model,'BarangGambar',array('placeholder'=>'Gambar','class'=>"form-control",'rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->label($model,'BarangGambar'); ?>
		<?php echo $form->error($model,'BarangGambar'); ?>
	</div>

	<div class="mt-4">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary')); ?>		
		<?php echo CHtml::link('Kembali',array('barang/admin'),array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->