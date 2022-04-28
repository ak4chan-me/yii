<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->userId), array('view', 'id'=>$data->userId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userNama')); ?>:</b>
	<?php echo CHtml::encode($data->userNama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userPassword')); ?>:</b>
	<?php echo CHtml::encode($data->userPassword); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userGroup')); ?>:</b>
	<?php echo CHtml::encode($data->userGroup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userFoto')); ?>:</b>
	<?php echo CHtml::encode($data->userFoto); ?>
	<br />


</div>