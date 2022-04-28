<?php
/* @var $this ObatController */
/* @var $data Obat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('obatId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->obatId), array('view', 'id'=>$data->obatId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obatNama')); ?>:</b>
	<?php echo CHtml::encode($data->obatNama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obatHarga')); ?>:</b>
	<?php echo CHtml::encode($data->obatHarga); ?>
	<br />


</div>