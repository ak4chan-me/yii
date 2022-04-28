<?php
/* @var $this ObatController */
/* @var $model Obat */

$this->breadcrumbs=array(
	'Obats'=>array('index'),
	$model->obatId,
);

$this->menu=array(
	array('label'=>'List Obat', 'url'=>array('index')),
	array('label'=>'Create Obat', 'url'=>array('create')),
	array('label'=>'Update Obat', 'url'=>array('update', 'id'=>$model->obatId)),
	array('label'=>'Delete Obat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->obatId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Obat', 'url'=>array('admin')),
);
?>

<h1>View Obat #<?php echo $model->obatId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'obatId',
		'obatNama',
		'obatHarga',
	),
)); ?>
