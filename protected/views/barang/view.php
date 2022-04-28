<?php
/* @var $this BarangController */
/* @var $model Barang */

$this->breadcrumbs=array(
	'Barangs'=>array('index'),
	$model->BarangId,
);
?>

<h1>View Barang #<?php echo $model->BarangId; ?></h1>
<?php 

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	/**/'itemTemplate'=>'
	<li class="list-group-item {class}">
		<div class="row">
			<div class="col-3"><b>{label}</b></div>
			<div class="col-9">: {value}</div>
		</div>
	</li>',/**/
	'attributes'=>array(
		'BarangId',
		'BarangNama',
		'BarangHarga',
		'BarangTipe',
		'BarangGambar',
	),
)); ?>

<?php echo CHtml::link('Kembali',array('barang/admin'),array('class'=>'btn btn-primary mt-4')); ?>