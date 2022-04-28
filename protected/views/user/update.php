<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->userId=>array('view','id'=>$model->userId),
	'Update',
);
?>

<h1>Mengubah User <?php echo $model->userId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>