<?php
/* @var $this BarangController */
/* @var $model Barang */

$this->breadcrumbs=array(
	'Barangs'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#barang-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Barangs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Tambah',array('barang/create'),array('class'=>'btn btn-primary')); ?>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'btn btn-primary search-button')); ?>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'barang-grid',
	'itemsCssClass'=>'table table-striped',
	'dataProvider'=>$model->search(),
	'pager'=>array(
		'class'=>'CLinkPagerCustom',
	),
	//'filter'=>$model,
	'columns'=>array(
		array(
			'header'=>'No.',
			'type'=>'raw',
			'value'=>'($this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1)',       //  row is zero based
		),
		//'BarangId',
		'BarangNama',
		'BarangHarga',
		'BarangTipe',
		'BarangGambar',
		array(
			'class'=>'CButtonColumn',
			'template'=>'<div style="width:180px">
							{delete} {update} {view}
						</div>',
			'buttons' => array(
						'delete'=>array(						
							'imageUrl' => false,
							'label' => '<i class="bi bi-trash3-fill"></i>',
							'options' => array(
											'class' => 'btn btn-danger'
										),
						),
						'update' => array(
							'imageUrl' => false,
							'label' => '<i class="bi bi-pencil-fill"></i>',
							'options' => array(
											'class' => 'btn btn-warning'
										),),
						'view' => array(
							'imageUrl' => false,
							'label' => '<i class="bi bi-search"></i>',
							'options' => array(
											'class' => 'btn btn-success'
										),
						),
					),
		),
	),
)); ?>
