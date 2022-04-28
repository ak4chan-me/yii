<?php
/* @var $this PakaianController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pakaians',
);

$this->menu=array(
	array('label'=>'Create Pakaian', 'url'=>array('create')),
	array('label'=>'Manage Pakaian', 'url'=>array('admin')),
);
?>

<h1>Pakaians</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
