<?php
/* @var $this PakaianController */
/* @var $model Pakaian */

$this->breadcrumbs=array(
	'Pakaians'=>array('index'),
	'Create',
);
?>

<h1>Tambah Pakaian</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>