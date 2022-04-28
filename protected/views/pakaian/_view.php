<?php
/* @var $this PakaianController */
/* @var $data Pakaian */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_pakaian')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kd_pakaian), array('view', 'id'=>$data->kd_pakaian)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nm_pakaian')); ?>:</b>
	<?php echo CHtml::encode($data->nm_pakaian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hrg_pakaian')); ?>:</b>
	<?php echo CHtml::encode($data->hrg_pakaian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gmbr_pakaian')); ?>:</b>
	<?php echo CHtml::encode($data->gmbr_pakaian); ?>
	<br />


</div>