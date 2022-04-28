<?php
/* @var $this PakaianController */
/* @var $model Pakaian */

$this->breadcrumbs=array(
	'Pakaians'=>array('index'),
	$model->kd_pakaian=>array('view','id'=>$model->kd_pakaian),
	'Update',
);
?>

<h1>Mengubah Pakaian <?php echo $model->kd_pakaian; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>