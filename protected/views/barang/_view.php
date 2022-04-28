<?php
/* @var $this BarangController */
/* @var $data Barang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('BarangId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->BarangId), array('view', 'id'=>$data->BarangId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BarangNama')); ?>:</b>
	<?php echo CHtml::encode($data->BarangNama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BarangHarga')); ?>:</b>
	<?php echo CHtml::encode($data->BarangHarga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BarangTipe')); ?>:</b>
	<?php echo CHtml::encode($data->BarangTipe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BarangGambar')); ?>:</b>
	<?php echo CHtml::encode($data->BarangGambar); ?>
	<br />


</div>