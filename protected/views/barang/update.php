<?php
/* @var $this BarangController */
/* @var $model Barang */

$this->breadcrumbs=array(
	'Barangs'=>array('index'),
	$model->BarangId=>array('view','id'=>$model->BarangId),
	'Update',
);
?>

<h1>Update Barang <?php echo $model->BarangId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>