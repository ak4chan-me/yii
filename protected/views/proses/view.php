<?php
/* @var $this PakaianController */
/* @var $model Pakaian */

$this->breadcrumbs=array(
	'Pakaians'=>array('index'),
	$model->kd_pakaian,
);

?>

<h1>Menampilkan Pakaian #<?php echo $model->kd_pakaian; ?></h1>
<div class="row">
	<div class="col-9">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'tagName'=>'ul',
	'htmlOptions'=>array('class'=>'list-group'),
	'itemTemplate'=>"<li class=\"{class} list-group-item\">{label} : {value}</li>\n",
	'attributes'=>array(
		'kd_pakaian',
		'nm_pakaian',
		'hrg_pakaian',
		'gmbr_pakaian',
	),
)); ?>
<?php echo CHtml::link('Kembali',array('site/index'),array('class'=>'mt-3 btn btn-primary')); ?>
	</div>
	<div class="col-3">
		<img class="img-fluid" src="<?=$model->gmbr_pakaian?>">
		<form method="post" 
			action="<?php 
			echo Yii::app()->createUrl(
				'proses/beli', // controller/action
				array('id'=>$model->kd_pakaian)
			);
			?>">
			<input type="number" name="jumlah" value="1">
			<input type="submit" class="btn btn-primary" value="Beli">
		</form>
	</div>
	
</div>