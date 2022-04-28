<?php
/* @var $this BarangController */
/* @var $model Barang */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<div class="form-floating mt-4">
		<?php echo $form->textField($model,'BarangId',array(
					'placeholder'=>'Barang ID','class'=>"form-control",'size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->label($model,'BarangId'); ?>
	</div>

	<div class="form-floating mt-4">
		<?php echo $form->textField($model,'BarangNama',array(
					'placeholder'=>'Nama','class'=>"form-control",'size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->label($model,'BarangNama'); ?>
	</div>

	<div class="form-floating mt-4">
		<?php echo $form->textField($model,'BarangHarga',array('placeholder'=>'Harga','class'=>"form-control",'size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->label($model,'BarangHarga'); ?>
	</div>

	<div class="form-floating mt-4">
		<?php echo $form->textField($model,'BarangTipe',array('placeholder'=>'Tipe','class'=>"form-control",'size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->label($model,'BarangTipe'); ?>
	</div>

	<div class="form-floating mt-4">
		<?php echo $form->textArea($model,'BarangGambar',array('placeholder'=>'Gambar','class'=>"form-control",'rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->label($model,'BarangGambar'); ?>
	</div>

	<div class="mt-4">
		<?php echo CHtml::submitButton('Search',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->