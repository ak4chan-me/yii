<?php
/* @var $this BarangController */
/* @var $model Barang */

$this->breadcrumbs=array(
	'Barangs'=>array('index'),
	'Create',
);

?>

<h1>Create Barang</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>